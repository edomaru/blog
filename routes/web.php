<?php

use Spatie\Sheets\Facades\Sheets;
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
    $posts = Sheets::collection('posts')->all();
    return view('posts.index', [
        'posts' => $posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Sheets::collection('posts')->all()->where('slug', $slug)->first();

    abort_if(is_null($post), 404);

    return view('posts.show', [
        'post' => $post
    ]);
});

Route::view('/test', 'app');
