{{-- View admin index.blade.php --}}

{{-- Layouts app.blade.php --}}
@extends("layouts.app")

{{-- Yeld content --}}
@section("content")
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span>Hello</span><span> {{ $user->name }}, </span>
        <h2>Your Posts List</h2>
        <br>

        {{-- Posts list --}}
        <ul class="posts_list">
          @foreach ($posts as $post)

            {{-- Single post --}}
            <li>
              <a href="{{ route("admin.posts.show", $post) }}">
                <h3>{{ $post->title }}</h3>
              </a>
              <br>
              <span>User: {{ $user->name }}.</span>
              <p>{{ $post->content }}</p>
              <br>
              <hr>
            </li>
            {{-- end Single post --}}

          @endforeach
        </ul>
        {{-- end Posts list --}}

      </div>
    </div>
  </div>
@endsection
