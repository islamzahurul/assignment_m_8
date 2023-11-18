<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new person</title>
</head>
<body>
    <h1>Creat a new person with  </h1>
    <h2> Name : {{$name}}:</h2>
    <h2> Email : {{$email}}:</h2>
    @if($image)
    <h2 > Image : {{$image}}:</h2>
    <img src="{{ asset('images/'.$image) }}" alt="image" width ="400px">
    @endif
</body>
</html>
