<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Use Auth class
use Illuminate\Support\Facades\Auth;

// Use Post class model
use App\Post;

// Use User class model
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Data from class
        $posts = Post::all();
        $user = Auth::user();

        // Return to view
        return view("admin.posts.index", compact("posts", "user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return to view
        return view("admin.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // If Authenticated..
        if(Auth::check()) {

          // All data from $request
          $data = $request->all();

          // Upload file image
          $path = $request->file("image_path")->store("images", "public");

          // Create new istance/database row
          $new_post = new Post();
          $new_post->user_id = Auth::id();
          $new_post->title = $data["title"];
          $new_post->image_path = $path;
          $new_post->content = $data["content"];

          // Save data
          $new_post->save();

          // Redirect to view
          return redirect()->route("admin_posts.show", $new_post);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // Return to view
        return view("admin.posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
