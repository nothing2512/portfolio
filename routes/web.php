<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [PortfolioController::class, "index"]);
//
//Route::prefix("dashboard")->group(function () {
//    Route::get("/", [DashboardController::class, "index"])->name("dashboard");
//    Route::get("/skills", [SkillController::class, "index"])->name("skills");
//    Route::get("/specializations", [SpecializationController::class, "index"])->name("specializations");
//    Route::get("/projects", [ProjectController::class, "index"])->name("projects");
//    Route::get("/profile", [UserController::class, "index"])->name("profile");
//    Route::get("/logout", [DashboardController::class, "logout"])->name("logout");
//});
