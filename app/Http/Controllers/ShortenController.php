<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShortenController extends Controller
{

    function show($code)
    {
        $shorten = ShortUrl::query()->where("code", $code)->first();
        if ($shorten == null) return redirect()->route("home");
        return redirect($shorten->url);
    }

    function store(Request $request)
    {
        $url = $request->input("url");
        $shorten = ShortUrl::query()->create([
            "url" => $url,
            "code" => uniqid()
        ]);
        return response()->json([
            "status" => true,
            "data" => route("shorten.get", ["code" => $shorten->code])
        ]);
    }
}
