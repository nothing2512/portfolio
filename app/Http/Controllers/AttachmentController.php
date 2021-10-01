<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AttachmentController extends Controller
{
    function show($path): StreamedResponse
    {
        return Storage::download($path);
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
