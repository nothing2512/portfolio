<?php

use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ShortenController;
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

/**
 * Route::prefix("dashboard")->group(function () {
 * Route::get("/", [DashboardController::class, "index"])->name("dashboard");
 * Route::get("/skills", [SkillController::class, "index"])->name("skills");
 * Route::get("/specializations", [SpecializationController::class, "index"])->name("specializations");
 * Route::get("/projects", [ProjectController::class, "index"])->name("projects");
 * Route::get("/profile", [UserController::class, "index"])->name("profile");
 * Route::get("/logout", [DashboardController::class, "logout"])->name("logout");
 * Route::get('/mailbox', [MailController::class, "mailbox"])->name("mailbox");
 * });
 */

Route::prefix("services")->group(function () {
    Route::post("/skill/{id?}", [SkillController::class, "store"])->name("skill.store");
    Route::post("/skill/{id}/delete", [SkillController::class, "destroy"]);

    Route::post("/specialization/{id?}", [SpecializationController::class, "store"])->name("specialization.store");
    Route::post("/specialization/{id}/delete", [SpecializationController::class, "destroy"]);

    Route::post("/project/{id?}", [ProjectController::class, "store"])->name("project.store");
    Route::post("/project/{id}/delete", [ProjectController::class, "destroy"]);

    Route::post("/profile/update", [UserController::class, "update"])->name("profile.update");
});

Route::get('/', [PortfolioController::class, "index"])->name("home");
Route::post("/mail", [MailController::class, "store"])->name("mail");

Route::prefix("attachment")->group(function () {
    Route::get("/list", [AttachmentController::class, "index"]);
    Route::post("/upload/manual", [AttachmentController::class, "manualUpload"]);
    Route::post("/upload", [AttachmentController::class, "upload"])->name("attachment.upload");
    Route::any("/download/{token?}", [AttachmentController::class, "download"])
        ->where('token', '.*')
        ->name("attachment.download");
    Route::get("/{path?}", [AttachmentController::class, "show"])
        ->where('path', '.*')->name("attachment");
});

Route::post("/short", [ShortenController::class, "store"])->name("shorten.store");

Route::get("/{code?}", [ShortenController::class, "show"])
    ->where('code', '.*')
    ->name("shorten.get");

