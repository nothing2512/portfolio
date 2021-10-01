<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function index(): View
    {
        return view("dashboard")->with([
            "pageTitle" => "Dashboard"
        ]);
    }

    function logout()
    {

    }
}
