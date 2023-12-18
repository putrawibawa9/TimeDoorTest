<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Volunteers;
use App\Models\User;

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



Route::get('/', function ( ) {
    $user = User::where('id',1)->first();
  

    return view('home',[
        'title'=>'Home',
        'nana' => $user
    ]);
});


// Route::get('/about', function (Post $post) {
//     return view('about',[
//         'title'=>'About',
//         'nama'=> 'putra',
//         'alamat'=> 'sukawati',
//         'image'=> 'putra.jpg',
//         'post'=> $post
//     ]

// );
// });

Route::resource('/about', AboutController::class);




Route::get('/posts',[PostController::class, 'index' ] );

//halaman single post

Route::get('/posts/{post:slug}',[PostController::class, 'show']);




Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','author')
    ]);
});


Route::get('/author/{author:user_name}', function(User $author){
    return view('posts',[
        'title' => "Post by Author: $author->name",
        'posts' => $author->posts->load('category','author',)
    ]);
});

Route::get('/categories', function(){

    return view('posts',[
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});


Route::get('/form', function (Volunteers $volunteers) {
    return view('form');
});