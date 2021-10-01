<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\User;
use App\Models\View\CounterView;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    function index(): View
    {
        $counter = CounterView::query()->first();
        $user = User::query()->first();
        $social = Social::query()->first();

        return view("profile")->with([
            "pageTitle" => "Profile",
            "counter" => $counter,
            "user" => $user,
            "social" => $social
        ]);
    }

    function update(Request $request): RedirectResponse
    {
        $user = User::query()->first();

        $user->fill($request->all());

        $cover = $request->file("cover");
        if ($cover != null) {
            $filename = uniqid() . "." . $cover->extension();
            $cover->storeAs("cover", $filename);
            $user->fill(["cover" => env("APP_URL") . "/attachment/cover/$filename"]);
        }

        $photo = $request->file("photo");
        if ($photo != null) {
            $filename = uniqid() . "." . $photo->extension();
            $photo->storeAs("photo", $filename);
            $user->fill(["photo" => env("APP_URL") . "/attachment/photo/$filename"]);
        }

        $user->save();

        $social = Social::query()->first();
        $social->fill($request->all());
        $social->save();

        return redirect()->back();
    }
}
