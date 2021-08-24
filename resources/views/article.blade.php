@extends('layouts.manager.index')

@section('title', 'Article')

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
    <h1>Article Table</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brief</th>
                <th>Content</th>
                <th>Image</th>
                <th>Views</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>
                    {{ $article->id }}
                </td>
                <td>
                    {{ $article->name }}
                </td>
                <td>
                    {{ $article->brief }}
                </td>
                <td>
                    {{ $article->content }}
                </td>
                <td align="center">
                    <img width="100" height="80" src="{{ asset('storage/' . $article->image) }}" />
                </td>
                <td align="center">
                    {{ $article->views }}
                </td>
                <td align="center">
                    {{ count($article->comments) }}
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $articles->links() }}
</div>
@endsection
