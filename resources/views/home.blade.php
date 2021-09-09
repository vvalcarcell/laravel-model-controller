<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

    @foreach($allMovies as $movie)
    
        <h2>{{$movie -> original_title}}</h2>
        <img src="{{$movie -> cover}}" alt="cover of {{$movie -> original_title}}">      

    @endforeach
    
</body>
</html>