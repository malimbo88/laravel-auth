<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Post model class
use App\Post;

// Use User model class
use App\User;

class PostController extends Controller
{
    public function index() {

      // All data from model class
      $posts = Post::all();

      // Return to view
      return view("guests.posts.index", compact("posts"));
    }

    public function show(Post $post) {

      // Return to view
      return view("guests.posts.show", compact("post", compact("post")));
    }
}
