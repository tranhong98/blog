<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Role Table </h1>
    <a href="{{route('roles.create')}}">Create</a>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>
                {{ $role->id }}
            </td>
            <td>
                {{ $role->name }}
            </td>
            <td>
                <a class="btn btn-primary" href="{{route('roles.edit',$role->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('roles.destroy',$role->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</body>
</html>
