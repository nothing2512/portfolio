<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    function index(): View
    {
        return view("profile")->with([
            "pageTitle" => "Profile"
        ]);
    }
}
