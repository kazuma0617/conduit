<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::get('/create', [ArticleController::class, 'create']);
Route::post('/create', [ArticleController::class, 'store']);
Route::get('/', [ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);
Route::post('/article/{id}/update', [ArticleController::class, 'update']);
Route::post('/article/{id}/delete', [ArticleController::class, 'destroy']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
