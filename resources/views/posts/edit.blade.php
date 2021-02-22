@extends('layouts.main')

@section('header')
    <div class="container">
      <h1 class="mt-5 mb-5">Modifica del post</h1>
    </div>
@endsection

@section('content')
    <div class="container mb-5">
      <form action="{{ route('posts.update', $post->id) }}" method="post" class="clearfix">
        @method('PUT')
        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ $post->title }}">  
        </div>

        <div class="form-group">
          <label for="subtitle">Sottotitolo</label>
          <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Inserisci il sottotitolo" value="{{ $post->subtitle }}">  
        </div>
        
        <div class="form-group">
          <label for="author">Autore</label>
          <input type="text" class="form-control" id="author" name="author" placeholder="Inserisci l'autore" value="{{ $post->author }}">  
        </div>

        
        <div class="form-group">
          <label for="img_path">Immagine</label>
          <input type="text" class="form-control" id="img_path" name="img_path" placeholder="Inserisci l'url dell'immagine" value="{{ $post->img_path }}">  
        </div>
        
        <div class="form-group">
          <label for="text">Testo</label>
          <textarea name="text" class="form-control" id="text" rows="10" placeholder="Inserisci il testo">{{ $post->text }}"</textarea>  
        </div>
        
        <div class="form-group">
          <label for="post_status">Stato del post</label>
          <select name="post_status" class="form-control" id="post_status">
            <option value="draft" {{ $post->infoPost->post_status == 'draft' ? 'selected' : '' }}>draft</option>  
            <option value="public" {{ $post->infoPost->post_status == 'public' ? 'selected' : '' }}>public</option>  
            <option value="private" {{ $post->infoPost->post_status == 'private' ? 'selected' : '' }}>private</option>  
          </select>  
        </div>
        
        <div class="form-group">
          <label for="post_status">Stato del commento</label>
          <select name="comment_status" class="form-control" id="comment_status">
            <option value="open" {{ $post->infoPost->comment_status == 'open' ? 'selected' : '' }}>open</option>  
            <option value="closed" {{ $post->infoPost->comment_status == 'closed' ? 'selected' : '' }}>closed</option>  
            <option value="private" {{ $post->infoPost->comment_status == 'private' ? 'selected' : '' }}>private</option>  
          </select>  
        </div>

        <div class="form-group">
          <label for="publication_date">Data di pubblicazione</label>
          <input type="date" class="form-control" id="publication_date" name="publication_date" placeholder="Inserisci la data di pubblicazione" value="{{ $post->publication_date}}">  
        </div>

        @foreach ($tags as $tag)
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="tag-{{ $tag->id }}" value="{{ $tag->id }}" name="tags[]" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
              <label class="custom-control-label" for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
            </div>
          </div>
        @endforeach

        <div class="float-left"><a href="{{ route('posts.index') }}" class="btn btn-primary">Indietro</a></div>
        <div class="float-right"><button type="submit" class="btn btn-primary">Modifica</button></div>
        
      </form>
    </div>
@endsection
