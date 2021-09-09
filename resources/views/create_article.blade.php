<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Create Article</h1>
        <label for="name">Name </label>
        <input type="text" id="name" name="name" placeholder="Name Article"> <br>
        <label for="brief">Brief </label>
        <input type="text" id="brief" name="brief" placeholder="Brief Article"> <br>
        <label for="content">Content </label>
        <input type="text" id="content" name="content" placeholder="Content Article"> <br>
        <label for="views">Views </label>
        <input type="text" id="views" name="views" placeholder="Views Article"><br>
        <label for="avatar">Choose a profile picture:</label>
        <input type="file" id="avatar" name="image"> </br>
        <button type="submit">Save</button>
</body>

</html>
