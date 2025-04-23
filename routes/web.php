<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

Route::get('/',[WelcomeController::class,'index']);
Route::get('/home',[WelcomeController::class,'index'])->name('home');
Route::get('/details/{id}',[WelcomeController::class,'details'])->name('details');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/blog-create',[BlogController::class,'create'])->name('blog.create');
    Route::get('/blog-index',[BlogController::class,'blog'])->name('blog.index');
    Route::get('/blog-edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog-store',[BlogController::class,'store'])->name('blog.store');
    Route::post('/blog-update/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::get('/blog-delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
    Route::get('/blog-show/{id}',[BlogController::class,'show'])->name('blog.show');
    Route::get('/blog-all',[BlogController::class,'allBlog'])->name('blog.all');

});
