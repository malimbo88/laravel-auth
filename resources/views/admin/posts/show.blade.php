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
            <h1>{{ $post->title }}</h1>
          </div>
          {{-- end Title --}}

          <hr>

          {{-- Post show --}}
          <div class="show_post">
            <div class="post_content">
              <p>{{ $post->content }}</p>
            </div>
          </div>
          {{-- end Post show --}}

          {{-- User infos show --}}
          <div class="show_user_infos">
            <ul class="user_infos">
              <li>
                <span>Author: {{ $post->user->name }}</span>
              </li>
              <li>
                <span>{{ $post->user->email }}</span>
              </li>
            </ul>
          </div>
          {{-- end User infos show --}}

          {{-- Route to index --}}
          <div class="route">
            <a href="{{ route("admin_posts.index") }}">
              <h5>To index</h5>
            </a>
          </div>
          {{-- end Route to index --}}

        </div>
      </div>
    </div>
  </div>
  {{-- end Posts --}}
@endsection
