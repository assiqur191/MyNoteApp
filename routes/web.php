<?php

use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('homepage');
});

//user related route

Route::get("/",[userController::class,'showCorrectHomepage']);
Route::post("/register",[userController::class,'register']);
Route::get("/login",[userController::class,'showLoginpage']);
Route::post("/loginaction",[userController::class,'login']);
Route::get("/logout",[userController::class,'logout']);
//project route
Route::get("/dashboard/add-new-project",[projectController::class,'viewAddNewProject']);
Route::get("/dashboard/view-all-project",[projectController::class,'allProject'])->name('projects');
Route::post("/dashboard/add-new-project",[projectController::class,'addNewProject'])->name('addNewProject');
Route::get("/dashboard/add-new-project/{project_id}",[projectController::class,'viewSingleproject']);

Route::get("/project/{{project}}/edit",[projectController::class,'showEiditPage'])->name('editprojet')->middleware('MustBeLogin');
Route::post("/project/{{project-edit}}",[projectController::class,'updateProject'])->middleware('MustBeLogin');

