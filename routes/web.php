<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::middleware('auth')->group(function(){
    Route::get('/',[PostController::class,'index'])->name('home');
    Route::post('Post/',[PostController::class,'store'])->name('NewPost');
    Route::post('like/{id}',[PostController::class,'like'])->name('like');
    Route::get('/perfil/{user_ide}',[PostController::class,'perfil'])->name('perfil');
    Route::post('editPerfil/{id}',[PostController::class,'editPerfil'])->name('editPerfil');
});
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
