<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index</h1>
    <a href="{{ route('admin.posts.create') }}">Crea Nuovo Post</a>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}}</p>
        <p>Tags: @forelse($post->tags as $tag) <span>{{$tag->name}} </span>  @empty <span> Nessuno </span>@endforelse</p>
        <a href="{{route('admin.posts.show', $post->id)}}">Dettagli</a>
        <a href="{{route('admin.posts.edit', $post->id)}}">Modifica</a>
        <form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}">
            @method("DELETE")
            @csrf
            <button type="submit">Elimina</button>
        </form>
    @endforeach
</body>
</html>