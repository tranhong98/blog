<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1> Edit User</h1>
        <label for="name">Name </label>
        <input type="text" id="name" name="name" placeholder="Name User" value="{{$user->name}}"></br>
        <label for="email">Email </label>
        <input type="text" id="email" name="email" placeholder="Email User" value="{{$user->email}}"></br>
        <label for="password">Password </label>
        <input type="password" id="password" name="password" placeholder="Password User" value="{{$user->password}}"></br>
        <button type="submit">Save</button>
    </form>
</body>

</html>
