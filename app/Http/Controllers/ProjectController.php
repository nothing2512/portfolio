<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    function index(): View
    {
        $projects = Project::query()->get();
        return view("project")->with([
            "pageTitle" => "Projects",
            "projects" => $projects
        ]);
    }

    function store(Request $request, $id=null): JsonResponse
    {
        $image = $request->input("image");

        if ($id == null) {
            $project = Project::query()->create($request->all());
        } else {
            $project = Project::query()->where("id", $id)->first();
            $project->fill($request->all());
            if ($image != null) $project->image = $image;
            $project->save();
        }

        return response()->json($project);
    }

    function destroy($id): JsonResponse
    {
        Project::query()->where("id", $id)->delete();
        return response()->json([ "status" => true ]);
    }
}
