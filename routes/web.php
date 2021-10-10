<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
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

Route::get('/', [PortfolioController::class, "index"])->name("home");
Route::post("/mail", [MailController::class, "store"])->name("mail");

//Route::prefix("dashboard")->group(function () {
//    Route::get("/", [DashboardController::class, "index"])->name("dashboard");
//    Route::get("/skills", [SkillController::class, "index"])->name("skills");
//    Route::get("/specializations", [SpecializationController::class, "index"])->name("specializations");
//    Route::get("/projects", [ProjectController::class, "index"])->name("projects");
//    Route::get("/profile", [UserController::class, "index"])->name("profile");
//    Route::get("/logout", [DashboardController::class, "logout"])->name("logout");
//});
//
//Route::prefix("services")->group(function () {
//    Route::post("/skill/{id?}", [SkillController::class, "store"])->name("skill.store");
//    Route::post("/skill/{id}/delete", [SkillController::class, "destroy"]);
//
//    Route::post("/specialization/{id?}", [SpecializationController::class, "store"])->name("specialization.store");
//    Route::post("/specialization/{id}/delete", [SpecializationController::class, "destroy"]);
//
//    Route::post("/project/{id?}", [ProjectController::class, "store"])->name("project.store");
//    Route::post("/project/{id}/delete", [ProjectController::class, "destroy"]);
//
//    Route::post("/profile/update", [UserController::class, "update"])->name("profile.update");
//});

Route::prefix("attachment")->group(function () {
    Route::post("/upload", [AttachmentController::class, "upload"])->name("attachment.upload");
    Route::post("/download/{path?}", [AttachmentController::class, "download"])
        ->where('path', '.*')
        ->name("attachment.download");
    Route::get("/{path?}", [AttachmentController::class, "show"])
        ->where('path', '.*')->name("attachment");
});
