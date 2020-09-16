{{-- View admin\posts\index.blade.php --}}

{{-- Layouts --}}
@extends("layouts.app")

{{-- Yeld content --}}
@section('content')
  {{-- Posts --}}
  <div class="posts">
    <div class="container">
      <div class="row">
        <div class="col-12">

          {{-- Title --}}
          <div class="title">
            <h1>Create Post</h1>
          </div>
          {{-- end Title --}}

          <hr>

          {{-- Create form --}}
          <form class="create_posts" action="{{ route("admin_posts.store") }}" method="post" enctype="multipart/form-data">
            {{-- Cross-site request forgery --}}
            @csrf

            {{-- Request method --}}
            @method("POST")

            {{-- Create title --}}
            <div class="create_title">
              <label>Title</label>
              <input type="text" name="title" value="{{ old("title") }}">
            </div>
            {{-- end Create title --}}

            {{-- Create content --}}
            <div class="create_title">
              <label>Content</label>
              <textarea name="content" rows="8" cols="80">{{ old("content") }}</textarea>
            </div>
            {{-- end Create content --}}

            {{-- Upload image --}}
            <div class="create_title">
              <label>Post image</label>
              <input type="file" name="image_path" accept="image/*">
            </div>
            {{-- end Upload image --}}

            {{-- Create submit --}}
            <div class="submit">
              <input type="submit" value="Create">
            </div>
            {{-- end Create submit --}}

          </form>
          {{-- Create form --}}

        </div>
      </div>
    </div>
  </div>
  {{-- end Posts --}}
@endsection
