<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function(){
    
    $posts = Post::with('category')->get();

    return view("blog-posts", [
        'posts' => $posts
    ]);

});


Route::get('/post/{id}', function($id){
    
    $post = Post::find($id);

    return view("blog-post", [
        'post' => $post
    ]);
    
});


Route::get('/category/{id}', function($id){
    
    $category = Category::find($id);

    return view("category", [
        'category' => $category
    ]);
    
});



