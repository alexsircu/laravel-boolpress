@extends('layouts.main')

@section('header')
    <div class="container">
      <h1 class="mt-5 mb-5">Post</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Titolo</th>
              <th>Sottotitolo</th>
              <th>Autore</th>
              <th>Data pubblicazione</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->subtitle }}</td>
                  <td>{{ $item->author }}</td>
                  <td>{{ $item->publication_date }}</td>
                  <td><a href="{{ route('posts.show', $item->id) }}"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            @endforeach
          </tbody>
        </table>       
      </div>
@endsection

@section('footer')
    <div class="container text-right">
      <a href="{{ route('posts.create') }}" class="btn btn-primary">Aggiungi post</a>
    </div>
@endsection