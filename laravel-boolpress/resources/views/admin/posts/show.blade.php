<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>

    <h2>{{$post->title}}</h2>
    <p>Categoria: @if($post->category) {{ $post->category->name }} @else Nessuna @endif</p>

    <a href="{{route('admin.posts.edit', $post->id)}}">Modifica</a>
</body>
</html>