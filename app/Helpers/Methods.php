<?php

use Illuminate\Http\RedirectResponse;

if (!function_exists("portfolio")) {
    function portfolio($file): String
    {
        return env("WEB_SERVER", "artisan") == "artisan"
            ? asset("portfolio/$file")
            : asset("public/portfolio/$file");
    }
}

if (!function_exists("admin")) {
    function admin($file): String
    {
        return env("WEB_SERVER", "artisan") == "artisan"
            ? asset("argon/$file")
            : asset("public/argon/$file");
    }
}

if (!function_exists("error")) {
    function error($message = ""): RedirectResponse
    {
        return redirect()->back()->with("error", $message);
    }
}

if (!function_exists("notFound")) {
    function notFound($name): RedirectResponse
    {
        return redirect()->back()->with("error", "$name not found");
    }
}
