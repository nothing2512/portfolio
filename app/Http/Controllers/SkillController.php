<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillController extends Controller
{
    function index(): View
    {
        $skills = Skill::query()->get();
        return view("skills")->with([
            "pageTitle" => "Skills",
            "skills" => $skills
        ]);
    }
}
