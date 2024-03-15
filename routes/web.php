<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Redireccion a la pagina inicial.
 * Listado de todos los post, filtrado por categoria y por nombre/cuerpo.
 */
Route::get('/', [PostController::class, 'index'])->name('home');

/**
 * Redireccion al post indicado.
 */
Route::get('posts/{post:slug}', [PostController::class, 'show']);

/**
 * Redireccion al autor indicado.
 */
Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
