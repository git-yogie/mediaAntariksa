<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Auth\LoginForm;
use App\Livewire\Auth\RegisterForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\WelcomePageController;


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
});

Route::get("/auth/login", LoginForm::class)->name("login");
Route::get("/auth/register", RegisterForm::class)->name("auth.register");

