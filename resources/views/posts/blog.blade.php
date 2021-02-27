@extends('layouts.main')

@section('content')
  <div class="container">
    <h1 class="text-center">Blog</h1>
    <div id="blog-post" class="text-center">
      <h2>{{ $post->title }}</h2>
      <img src="{{ $post->img_path }}" alt="{{ $post->title }}">
      <div>{{ $post->text }}</div>
      <small>{{ $post->author }}</small>
    </div>
  </div>
@endsection