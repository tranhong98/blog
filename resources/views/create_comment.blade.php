<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('comments.store')}}" method="POST">
        @csrf
        <h1> Create Comment</h1>
        <label for="content">Content </label>
        <input type="text" id="content" name="content" placeholder="Content Comment"> </br>
        <label for="view">View </label>
        <input type="text" id="view" name="view" placeholder="View Comment"></br>
        <button type="submit">Save</button>
    </form>
</body>

</html>
