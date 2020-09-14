{{-- View admin show.blade.php --}}

{{-- Layouts app.blade.php --}}
@extends("layouts.app")

{{-- Yeld content --}}
@section("content")
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>{{ $post->title }}</h3>
        <hr>
        <span>User: {{ $user->name }}.</span>
        <p>{{ $post->content }}</p>
      </div>
    </div>
  </div>
@endsection
{{-- end Yeld content --}}
