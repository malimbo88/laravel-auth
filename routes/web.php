<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin
// Route Admin/PostController
Route::prefix("admin")
  ->namespace("Admin")
  ->middleware("auth")
  ->name("admin_")
  ->group(function() {
      Route::resource("posts", "PostController");
});

// Public
// Route PostController index
Route::get("posts", "PostController@index")->name("guests_posts_index");

// Route PostController index
Route::get("posts/{post}", "PostController@show")->name("guests_posts_show");
