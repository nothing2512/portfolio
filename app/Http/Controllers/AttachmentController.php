<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\AttachmentCredential;
use App\Models\Mail as MailModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AttachmentController extends Controller
{
    function show($id)
    {
        $attachment = Attachment::query()->where("id", $id)->first();
        if ($attachment == null) return redirect()->route("home");

        return view('attachment', [
            "id" => $id,
            "filename" => $attachment->name
        ]);
    }

    function download(Request $request, $token=null)
    {
        if ($token == null) {
            $email = $request->input("email");
            $name = $request->input("name");
            $attachmentId = $request->input("id");

            $attachment = Attachment::query()->where([
                "id" => $attachmentId
            ])->first();

            if ($attachment == null) return redirect()->route("home");

            MailModel::query()->create([
                "name" => $email,
                "email" => $email,
                "message" => "Download " . $attachmentId
            ]);

            $token = Hash::make("download{$attachmentId}");
            AttachmentCredential::query()->create([
                "attachmentId" => $attachmentId,
                "token" => $token
            ]);

            $link = route("attachment.download", ["token" => $token]);

            try {
                Mail::send('mail', ["link" => $link], function ($message) use ($email, $name) {
                    $message->from(env("MAIL_USERNAME"), "Robet Atiq Maulana Rifqi")
                        ->to($email, $name)
                        ->subject("Download File");

                    $message->getHeaders()->addTextHeader(
                        "List-Unsubscribe",
                        "<mailto:mail@robet.id?subject=UnsubscribeEmail&body=UnsubscribeEmail>"
                    );
                });
            } catch (\Exception $e) {
                die($e->getMessage());
            }

            return redirect()->route("home");
        } else {
            $credential = AttachmentCredential::query()->where("token", $token)->first();
            if ($credential == null) return redirect()->route("home");
            $attachment = Attachment::query()->where("id", $credential->attachmentId)->first();
            if ($attachment == null) return redirect()->route("home");
            $credential->delete();
            return Storage::download($attachment->dir);
        }
    }

    function index()
    {
        return response()->json(Attachment::query()->get());
    }

    function manualUpload(Request $request): JsonResponse
    {
        $file = $request->file("file");
        $dir = $request->input("dir");
        $name = $request->input("name");
        $path = $file->storeAs($dir, $name . "." . $file->extension());

        $attachment = Attachment::query()->create([
            "name" => $name,
            "dir" => $path
        ]);

        return response()->json([
            "status" => true,
            "data" => route("attachment", ["path" => $attachment->id])
        ]);
    }

    function upload(Request $request): JsonResponse
    {
        $file = $request->file("file");
        $context = $request->input("context");
        $path = $file->storeAs($context, uniqid() . "." . $file->extension());
        return response()->json([
            "status" => true,
            "data" => $path
        ]);
    }
}
