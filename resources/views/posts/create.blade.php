@extends('layouts.main')

@section('header')
    <div class="container">
      <h1 class="mt-5 mb-5">Creazione nuovo post</h1>
    </div>
@endsection

@section('content')
    <div class="container mb-5">
      <form action="{{ route('posts.store') }}" method="post" class="clearfix">
        @method('POST')
        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">  
        </div>

        <div class="form-group">
          <label for="subtitle">Sottotitolo</label>
          <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Inserisci il sottotitolo">  
        </div>
        
        <div class="form-group">
          <label for="author">Autore</label>
          <input type="text" class="form-control" id="author" name="author" placeholder="Inserisci l'autore">  
        </div>

        
        <div class="form-group">
          <label for="img_path">Immagine</label>
          <input type="text" class="form-control" id="img_path" name="img_path" placeholder="Inserisci l'url dell'immagine">  
        </div>
        
        <div class="form-group">
          <label for="text">Testo</label>
          <textarea name="text" class="form-control" id="text" rows="10" placeholder="Inserisci il testo"></textarea>  
        </div>
        
        <div class="form-group">
          <label for="post_status">Stato del post</label>
          <select name="post_status" class="form-control" id="post_status">
            <option value="draft">draft</option>  
            <option value="public">public</option>  
            <option value="private">private</option>  
          </select>  
        </div>
        
        <div class="form-group">
          <label for="post_status">Stato del commento</label>
          <select name="comment_status" class="form-control" id="comment_status">
            <option value="open">open</option>  
            <option value="closed">closed</option>  
            <option value="private">private</option>  
          </select>  
        </div>

        <div class="form-group">
          <label for="publication_date">Data di pubblicazione</label>
          <input type="date" class="form-control" id="publication_date" name="publication_date" placeholder="Inserisci la data di pubblicazione">  
        </div>

        @foreach ($tags as $tag)
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]">
              <label class="custom-control-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
            </div>
          </div>
        @endforeach

        <div class="float-left"><a href="{{ route('posts.index') }}" class="btn btn-primary">Indietro</a></div>
        <div class="float-right"><button type="submit" class="btn btn-primary">Aggiungi</button></div>
        
      </form>
    </div>
@endsection