<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\User;
use App\Models\View\CounterView;
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
}
