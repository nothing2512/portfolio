<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    function index(): View
    {
        $user = User::query()->first();
        $social = Social::query()->first();
        $skills = Skill::query()->get();
        $specialization = Specialization::query()->get();
        $projects = Project::query()
            ->orderByDesc("id")
            ->paginate(6, "*", "page", 1)
            ->items();
        $totalProject = Project::query()->count();

        return view("index")->with([
            "user" => $user,
            "totalProjects" => $totalProject,
            "social" => $social,
            "skills" => $skills,
            "specializations" => $specialization,
            "projects" => array_slice($projects, 0, 6)
        ]);
    }
}
