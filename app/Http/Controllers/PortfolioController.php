<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index(Request $request): View
    {
        $user = User::query()->first();
        $social = Social::query()->first();
        $skills = Skill::query()->get();
        $specialization = Specialization::query()->get();
        $projects = Project::query()->orderByDesc("id")->get();
        $totalProject = sizeof($projects);

        return view("index")->with([
            "user" => $user,
            "totalProjects" => $totalProject,
            "social" => $social,
            "skills" => $skills,
            "specializations" => $specialization,
            "projects" => $projects
        ]);
    }
}
