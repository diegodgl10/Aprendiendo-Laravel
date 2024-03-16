<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

use Illuminate\Support\Facades\Route;

/**
 * Redireccion a la pagina inicial.
 * Listado de todos los post, filtrado por categoria y por nombre/cuerpo.
 */
Route::get('/', [PostController::class, 'index'])->name('home');

/**
 * Redireccion al post indicado.
 */
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy']);
