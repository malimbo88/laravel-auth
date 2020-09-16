{{-- View guests\posts\show.blade.php --}}

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

          {{-- Author --}}
          <div>
            <span>Author: {{ $post->user->name }}</span>
          </div>
          {{-- end Author --}}

          <br>

          {{-- Route to index --}}
          <div class="route">
            <a href="{{ route("guests_index") }}">
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
