<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('comments.update', $comment->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1> Edit Comment</h1>
        <label for="name">Content </label>
        <input type="text" id="content" name="content" placeholder="Content Comment" value="{{$comment->content}}"></br>
        <label for="name">View </label>
        <input type="text" id="view" name="view" placeholder="View Comment" value="{{$comment->view}}"></br>

        <button type="submit">Save</button>
    </form>
</body>

</html>
