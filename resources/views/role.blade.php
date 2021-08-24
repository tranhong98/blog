@extends('layouts.manager.index')

@section('title', 'Role')

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
@section('content')
<div class="container">
    <h1>Role Table </h1>
    <a href="{{route('roles.create')}}">Create</a>
    <table  border="1" width="100%">
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
                    <a class="btn btn-primary" href="{{route('roles.edit', $role->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('roles.destroy',$role->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
