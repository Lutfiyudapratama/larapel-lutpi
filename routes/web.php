<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/login', [HomeController::class, "login"]);
Route::get('/add-todolist', [HomeController::class, "add"]);
Route::post('/add-todolist', [HomeController::class, "store"])->name('add');
Route::delete('/delete-todolist/{id}', [HomeController::class, "destroy"])->name('delete');
Route::get('/todolist-update/{id}', [HomeController::class, "show"])->name('show.update');
Route::put('/todolist-update/{id}', [HomeController::class, "update"])->name('update');

Route::apiResource('/list-siswa', StudentController::class);

// Route::get('dasboard', function (){[
//    return view('dasboard.dasboad'); 
// ])};