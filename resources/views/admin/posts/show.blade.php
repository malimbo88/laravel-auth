{{-- View admin show.blade.php --}}

{{-- Layouts app.blade.php --}}
@extends("layouts.app")

{{-- Yeld content --}}
@section("content")
  <div class="container">
    <div class="row">
      <div class="col-12">

        {{-- Title --}}
        <h3>{{ $post->title }}</h3>
        {{-- end Title --}}

        <hr>

        {{-- Image --}}
        <div class="image">
          <img src="{{ $post->image_path }}" alt="">
        </div>
        {{-- Image --}}

        <br>

        {{-- User --}}
        <div class="user_info">
          <div>
            <h3>User: {{ $post->user->name }}.</h3>
          </div>
          <div>
            <span>Email: {{ $post->user->email }}</span>
          </div>
        </div>
        {{-- end User --}}

        <br>

        {{-- Content --}}
        <p>{{ $post->content }}</p>
        {{-- end Content --}}

      </div>
    </div>
  </div>
@endsection
{{-- end Yeld content --}}
