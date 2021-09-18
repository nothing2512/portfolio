<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SpecializationController extends Controller
{
    function index(): View
    {
        return view("specialization")->with([
            "pageTitle" => "Specialization"
        ]);
    }
}
