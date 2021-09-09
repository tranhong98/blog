@extends('layouts.manager.index')

@section('title', 'Category')

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
    <h1>Category Table </h1>
    <a href="{{route('categories.create')}}">Create</a>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('categories.edit', $category->id)}}">Edit</a>
                    <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-default" type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection