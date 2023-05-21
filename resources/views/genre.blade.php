<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h2>{{$genre->genre}}</h2>
        <p>Other movies with this genre: </p>
        @foreach ($movies as $movie)
            <a href="/movies/{{$movie->id}}">{{$movie->name}}</a>
        @endforeach
</body>
</html>