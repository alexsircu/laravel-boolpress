@extends('layouts.main')

@section('header')
    <div class="container">
      <h1 class="mt-5 mb-5">Post</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif  
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Titolo</th>
              <th>Sottotitolo</th>
              <th>Autore</th>
              <th>Immagine</th>
              <th>Data pubblicazione</th>
              <th></th>
              <th></th>
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
                  <td><img src="{{ $item->img_path }}" alt="{{ $item->title }}"></td>
                  <td>{{ $item->publication_date }}</td>
                  <td><a href="{{ route('posts.show', $item->id) }}" class="btn"><i class="fas fa-info-circle"></i></a></td>
                  <td><a href="{{ route('posts.edit', $item->id) }}" class="btn"><i class="fas fa-pencil-alt"></i></a></td>
                  <td>
                    <form action="{{ route('posts.destroy', $item->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>       
      </div>
@endsection

@section('footer')
    <div class="container text-right mb-5">
      <a href="{{ route('posts.create') }}" class="btn btn-primary">Aggiungi post</a>
    </div>
@endsection