<?php

namespace App\Http\Controllers;

use App\Models\Mail as MailModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class AttachmentController extends Controller
{
    function show($path): View
    {

        Mail::send('mail', [], function ($message) {
            $message->from(env("MAIL_USERNAME"), "Robet Atiq Maulana Rifqi")
                ->to("blank345red@gmail.com", "You")
                ->subject("Download File")
                ->attach(storage_path("app/cover/615720d31609c.png"));

            $message->getHeaders()->addTextHeader(
                "List-Unsubscribe",
                "<mailto:admin@robet.my.id?subject=UnsubscribeEmail&body=UnsubscribeEmail>"
            );
        });

        return view('attachment', [
            "path" => $path
        ]);
    }

    function download(Request $request)
    {
        $email = $request->input("email");
        $path = $request->input("dir");
        MailModel::query()->create([
            "name" => $email,
            "email" => $email,
            "message" => $path
        ]);

        try {
            Mail::send('mail', [], function ($message) use ($email, $path) {
                $message->from(env("MAIL_USERNAME"), "Robet Atiq Maulana Rifqi")
                    ->to($email, "You")
                    ->subject("Download File")
                    ->attach(storage_path("app/" . $path));

                $message->getHeaders()->addTextHeader(
                    "List-Unsubscribe",
                    "<mailto:admin@robet.my.id?subject=UnsubscribeEmail&body=UnsubscribeEmail>"
                );
            });
        } catch (\Exception $e) {
            die($e->getMessage());
        }

//        return redirect()->route("home");

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
