<?php

use App\Models\Post;

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
 */
Route::get('/', function () {
    //return view('welcome');
    //return 'this is my blog';

    $posts = Post::all();
    return view('posts', [
        'posts' => $posts
    ]);
});

/**
 * Redireccion al post indicado.
 */
Route::get('posts/{post}', function ($slug) {
    $post = Post::findOrFail($slug);
    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_`-]+');
