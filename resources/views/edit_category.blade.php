<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('categories.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1> Edit Category</h1>
        <label for="name">Name </label>
        <input type="text" id="name" name="name" placeholder="Name Category" value="{{$category->name}}">
        <button type="submit">Save</button>
    </form>
</body>

</html>
