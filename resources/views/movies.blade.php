<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h2><a href="/movies/{{$movie->id}}">{{$movie->name}}</a></h2>
        @foreach ($comments[$movie->id - 1] as $comment)
            <p>Comment: {{$comment->content}}</p>
        @endforeach
    @endforeach
</body>
</html>