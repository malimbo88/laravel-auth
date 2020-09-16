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

      // All data from class
      $posts = Post::all();

      // Return to view
      return view("guests.posts.index", compact("posts"));
    }

    // Method show
    public function show(Post $post) {

      // Return to view
      return view("guests.posts.show", compact("post"));
    }
}
