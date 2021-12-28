<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Red social</h1>
    @foreach($posts as $post)
        <p><a href="/posts/{{ $post -> id }}">{{ $post -> title }}</a></p>
        <p>{{ $post -> content }}</p>
    @endforeach
</body>
</html>