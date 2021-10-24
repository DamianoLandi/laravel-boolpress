<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form method="POST" action="{{ route('admin.posts.update', $post->id) }}">
        @csrf
        @method("PATCH")
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="image">URL Immagine</label>
            <input type="text" name="image" id="image" value="{{$post->image}}">
        </div>
        <div>
            <label for="content">Contenuto</label>
            <textarea name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <div>
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id">
                <option>Nessuna</option>
                @foreach($categories as $category)
                    <option value='{{$category->id}}'> {{$category->name}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Modifica</button>
    </form>
</div>
</body>
</html>