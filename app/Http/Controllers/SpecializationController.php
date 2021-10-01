<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpecializationController extends Controller
{
    function index(): View
    {
        $specializations = Specialization::query()->get();
        return view("specialization")->with([
            "pageTitle" => "Specialization",
            "specializations" => $specializations
        ]);
    }

    function store(Request $request, $id=null): JsonResponse
    {
        $iconType = "image";
        $icon = $request->input("icon");
        if ($icon != null) $iconType = explode(".", $icon)[1];

        if ($id == null) {
            $specialization = Specialization::query()->create(array_merge($request->all(), [
                "iconType" => $iconType,
                "icon" => route("attachment", $icon)
            ]));
        } else {
            $specialization = Specialization::query()->where("id", $id)->first();
            $specialization->fill($request->all());
            if ($icon != null) {
                $specialization->iconType = $iconType;
                $specialization->icon = route("attachment", $icon);
            }
            $specialization->save();
        }

        return response()->json($specialization);
    }

    function destroy($id): JsonResponse
    {
        Specialization::query()->where("id", $id)->delete();
        return response()->json([
            "status" => true
        ]);
    }
}
