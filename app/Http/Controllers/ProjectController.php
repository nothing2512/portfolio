<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    function index(): View
    {
        return view("project")->with([
            "pageTitle" => "Projects"
        ]);
    }
}
