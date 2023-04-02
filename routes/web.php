<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,"index"]);

Route::get('/home',[StudentsController::class,"index"]);
Route::get("/create",[StudentsController::class, 'create'])->name('create');
Route::post("/store",[StudentsController::class, 'store'])->name('store');
Route::get("/edit/{studentId}",[StudentsController::class, 'update'])->name('edit');
Route::post("/editStore",[StudentsController::class, 'editStore'])->name('editStore');
Route::delete('/delete', [StudentsController::class, 'destroy'])->name('delete');
Route::get('/details/{studentId}', [StudentsController::class, 'details'])->name('details');
Route::get('/newUser',[UserController::class,"register"]);

Route::get("blog/edit/{studentId}",[BlogController::class, 'edit'])->name('blog.edit');
Route::post("blog/editStores",[BlogController::class, 'update'])->name('blog.editStores');
Route::delete('blog/delete', [BlogController::class, 'destroy'])->name('blog.delete');
Route::get('blog/details/{studentId}', [BlogController::class, 'show'])->name('blog.details');

Route::post("/blog/store",[BlogController::class, 'store'])->name('blog.store');
Route::resource('blog', BlogController::class);


