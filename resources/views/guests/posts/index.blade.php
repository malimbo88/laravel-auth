{{-- View guests index.blade.php --}}

{{-- Layouts app.blade.php --}}
@extends("layouts.app")

{{-- Yeld content --}}
@section("content")
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Your Posts List</h2>
        <br>

        {{-- Posts list --}}
        <ul class="posts_list">
          @foreach ($posts as $post)

            {{-- Single post --}}
            <li>
              <h3>{{ $post->title }}</h3>
              <p>{{ $post->content }}</p>
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
