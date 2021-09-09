<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('articles.update', $article->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1> Edit Article</h1>
        <label for="name">Name </label>
        <input type="text" id="name" name="name" placeholder="Name Article" value="{{$article->name}}"> <br>
        <label for="brief">Brief </label>
        <input type="text" id="brief" name="brief" placeholder="Brief Article" value="{{$article->brief}}"> <br>
        <label for="content">Content </label>
        <input type="text" id="content" name="content" placeholder="Content Article" value="{{$article->content}}"> <br>
        <label for="image">Image </label>
        <input type="text" id="image" name="image" placeholder="Image Article" value="{{ asset('storage/' . $article->image) }}"><br>
        <label for="views">Views </label>
        <input type="text" id="views" name="views" placeholder="Views Article" value="{{$article->views}}"><br>
        <button type="submit">Save</button>
    </form>
</body>

</html>
