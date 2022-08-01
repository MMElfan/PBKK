<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware(['auth', 'checkRole:user,admin'])->group(function () {
    Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'read']);
    Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category']);
});

Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::resource('contents', App\Http\Controllers\ContentController::class);
    Route::get('/datauser', [UserController::class, 'datauser']);
    Route::get('/formuser', [UserController::class, 'formuser']);
    Route::post('/adduser', [UserController::class, 'adduser']);
    Route::get('/datauser/{id}', [UserController::class, 'deleteuser']);
});
    
