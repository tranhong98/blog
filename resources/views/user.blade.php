@extends('layouts.manager.index')

@section('title', 'User')

@section('style')
<style>
    .container {
        width: 80%;
        margin: auto;
    }

    .pagination {
        display: flex;
        list-style: none;
        justify-content: flex-end;
    }

    .page-item {
        font-size: 18px;
        padding: 2px;
    }

    .page-item:hover {
        border: gray 1px solid;
        border-radius: 3px;
    }

    .active {
        border: gray 1px solid;
        border-radius: 3px;

    }

    .page-link {
        width: 16px;
        display: inline-block;
        text-align: center;
        text-decoration: none;
        color: black;
    }
</style>
@endsection

@section('text')
@parent
Ahihi
@endsection

@section('content')
<div class="container">
    <h1>User Table</h1>
    <a href="{{route('users.create')}}">Create</a>
    <table border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role_ID</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                {{ $user->password }}
            </td>
            <td>
                {{ $user->role_id }}
            </td>
            <td>
                    <a class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Edit</a>
                    <form action="{{route('users.destroy',$user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-default" type="submit" value="Delete" />
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection

