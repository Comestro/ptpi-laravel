<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamCenterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecruiterController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function(){
   Route::controller(AdminController::class)->group(function(){

   });
});

Route::prefix("recruiter")->group(function(){
    Route::controller(RecruiterController::class)->group(function(){

    });
});

Route::prefix("exam-center")->group(function(){
    Route::controller(ExamCenterController::class)->group(function(){

    });
});

// public routes

Route::controller(HomeController::class)->group(function(){
    Route::get("/", "index")->name("public.index");
});
