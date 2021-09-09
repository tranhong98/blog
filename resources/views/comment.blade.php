@extends('layouts.manager.index')

@section('title', 'Comment')

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
    <h1>Comment Table</h1>
    <a href="{{route('comments.create')}}">Create</a>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Content</th>
                <th>View</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>
                    {{ $comment->id }}
                </td>
                <td>
                    {{ $comment->content }}
                </td>
                <td>
                    {{ $comment->view }}
                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('comments.edit', $comment->id)}}">Edit</a>
                    <form action="{{route('comments.destroy',$comment->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-default" type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $comments->links() }}
</div>
@endsection
