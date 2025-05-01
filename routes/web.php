<?php

use App\Livewire\Auth\LoginForm;
use App\Livewire\Auth\RegisterForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\LearningProgressController;


Route::controller(WelcomePageController::class)->group(function () {
    Route::get("/", "index")->name("welcome.index");
});



Route::get("/test", function () {
    return view("layouts.content-layout");
});


Route::controller(QuizController::class)->group(function () {
    Route::get("kuis/start/{materi}", "beforeQuiz")->name("quiz.prepare");
    Route::get("/kuis/{materi}", "startQuiz")->name("eval.start");
    Route::post("/evaluasi/submit", "startQuiz")->name("eval.submit");
});


Route::middleware(['auth'])->group(function () {
    Route::controller(MateriController::class)->group(function () {
        Route::get("/materi/{slug}", "materi")->name("materi");
    });
    Route::controller(QuizController::class)->group(function () {
        Route::get("kuis/start/{materi}", "beforeQuiz")->name("quiz.prepare");
        Route::get("/kuis/{materi}", "startQuiz")->name("eval.start");
        Route::post("/evaluasi/submit", "startQuiz")->name("eval.submit");
    });
    Route::get("/auth/logout", [AuthController::class, "Logout"])->name("auth.logout");
    Route::put("/auth/update", [AuthController::class, "updateUser"])->name("auth.updateProfile");
    Route::get("/dashboard", [AuthController::class, "dashboard"])->name("dashboard");

});

Route::get("/auth/login", LoginForm::class)->name("login");
Route::get("/auth/register", RegisterForm::class)->name("auth.register");

Route::controller(LearningProgressController::class)->group(function () {
    Route::post("/learning-progress/set", "set_progress")->name("learning-progress.set");
    Route::get("/learning-progress/get/{materi}", "get_progress")->name("learning-progress.get");
    Route::get("learning-progress/count-point", "countPoint")->name("learning-progress.count-point");
});


