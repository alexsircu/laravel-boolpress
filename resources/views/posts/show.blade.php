@extends('layouts.main')

@section('header')
    <div class="container">
      <h1 class="mt-5 mb-5">Informazioni Post</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered">
          @foreach ($post->getAttributes() as $key => $value)
              <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
              </tr>
          @endforeach
        </table>
        <p>Stato del mio post: <strong>{{ strtoupper($post->infoPost->post_status) }}</strong></p>       
      </div>
@endsection

@section('footer')
    <div class="container">
      <a href="{{ route('posts.index') }}" class="btn btn-primary">Indietro</a>      
    </div>
@endsection


