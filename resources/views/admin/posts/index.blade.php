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
            <h5>Welcome {{ $user->name }}</h5>
            <h1>Posts list</h1>
          </div>
          {{-- end Title --}}

          <hr>

          {{-- Posts list --}}
          <ul class="posts_list">

            {{-- Every single post --}}
            @foreach ($posts as $post)
              <li class="post">

                {{-- Post infos --}}
                <ul class="post_infos">

                  {{-- Post author name --}}
                  <li>
                    <span>Author: {{ $post->user->name }}</span>
                  </li>
                  {{-- Post author name --}}

                  {{-- Post title --}}
                  <li>
                    <a href="{{ route("admin_posts.show", $post) }}">
                      <h3>{{ $post->title }}</h3>
                    </a>
                  </li>
                  {{-- Post title --}}

                </ul>
              </li>
              {{-- end Post infos --}}

              <hr>
            @endforeach
            {{-- end Every single post --}}

          </ul>
          {{-- end Posts list --}}

        </div>
      </div>
    </div>
  </div>
  {{-- end Posts --}}
@endsection
