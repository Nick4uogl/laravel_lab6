<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h2>{{$movie->name}}</h2>
        @foreach ($genres as $genre)
            <a href="/genres/{{$genre->id}}">{{$genre->genre}}</a>
        @endforeach
</body>
</html>