<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        // 'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        // 'active' => 'about',
        "name" => "Dian Rahmawati",
        "email" => "diianrhma06@gmail.com",
        "image" => "profile-dian.png"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// halaman single post - route mode binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Post Categories",
        'active' => 'categories',
        "categories" => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function()
{
     return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
->middleware('admin');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])
->middleware('admin');





// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         "title" => "Post by Category : $category->name",
//         'active' => 'categories',
//         "posts" => $category->posts->load('category', 'author'), //lazy eager loading
//         // "category" => $category->name
//     ]);
// });

// Route::get('authors/{author:username}', function(User $author) {
//     return view('posts', [
//         "title" => "Post By Author : $author->name",
//         'active' => 'posts',
//         "posts" => $author->posts->load('category', 'author')
//         // "category" => $category->name
//     ]);

// });

