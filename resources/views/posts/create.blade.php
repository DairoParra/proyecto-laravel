<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear posts</h1>
    <form action="/posts" method="post">
        @csrf
        <input type="text" name="title" id="title">
        <input type="text" name="content" id="content">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>