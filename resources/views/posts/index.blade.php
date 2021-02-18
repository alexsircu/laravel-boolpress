<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        
    </head>
    <body>
      <div class="container">
        <h1 class="mt-5 mb-5">I miei post</h1>
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Titolo</th>
              <th>Sottotitolo</th>
              <th>Autore</th>
              <th>Data pubblicazione</th>
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
                </tr>
            @endforeach
          </tbody>
        </table>       
      </div>
    </body>
</html>