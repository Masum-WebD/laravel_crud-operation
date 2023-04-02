<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home',[StudentsController::class,"index"]);
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

require __DIR__.'/auth.php';
