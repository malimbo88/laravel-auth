<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Post class model
use App\Post;

class PostController extends Controller
{
    // Methods
    // Method index
    public function index() {
      
      // All data from Post class model
      $posts = Post::all();
      dd($posts);
    }
}
