<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\JsonResponse;
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

    function store(Request $request, $id=null): JsonResponse
    {
        if ($id == null) {
            $skills = Skill::query()->create([
                "name" => $request->input("name"),
                "value" => 0
            ]);
        } else {
            $skills = Skill::query()->where("id", $id)->first();
            $skills->fill(["value" => $request->input("value")]);
            $skills->save();
        }

        return response()->json($skills);
    }

    function destroy($id): JsonResponse
    {
        Skill::query()->where("id", $id)->delete();
        return response()->json([
            "status" => true
        ]);
    }
}
