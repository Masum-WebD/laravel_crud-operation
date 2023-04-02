<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/home',[StudentsController::class,"index"]);
Route::get('/',[StudentsController::class,"index"]);
Route::get('/login',[LoginController::class,"index"]);
Route::get('/register',[RegisterController::class,"index"]);
Route::get('/',[StudentsController::class,"index"]);
Route::get("/create",[StudentsController::class, 'create'])->name('create');
Route::post("/store",[StudentsController::class, 'store'])->name('store');
Route::get("/edit/{studentId}",[StudentsController::class, 'update'])->name('edit');
Route::post("/editStore",[StudentsController::class, 'editStore'])->name('editStore');
Route::delete('/delete', [StudentsController::class, 'destroy'])->name('delete');
Route::get('/details/{studentId}', [StudentsController::class, 'details'])->name('details');

Route::get("blog/edit/{studentId}",[BlogController::class, 'edit'])->name('blog.edit');
Route::post("blog/editStores",[BlogController::class, 'update'])->name('blog.editStores');
Route::delete('blog/delete', [BlogController::class, 'destroy'])->name('blog.delete');
Route::get('blog/details/{studentId}', [BlogController::class, 'show'])->name('blog.details');

Route::post("/blog/store",[BlogController::class, 'store'])->name('blog.store');
Route::resource('blog', BlogController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');