<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {

    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->
    paginate(9)->withQueryString()]);
});


Route::get('/authors/{user:username}',  function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    //perpindahan halaman ke single post//
    return view('posts', ['title' =>  count($user->posts) . ' | Articles by ' . $user->name, 'posts' =>
    $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/posts/{post:slug}',  function (Post $post) {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    return view('post', ['title' => 'Single Post', 'post'=> $post]);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Abisam Hazim', 'title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

