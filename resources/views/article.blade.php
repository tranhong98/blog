@extends('layouts.manager.index')

@section('title', 'Manager Article')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Article</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager Article</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('articles.create')}}" class="btn btn-success float-right">Create</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brief</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Views</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td>
                                {{ $article->name }}
                            </td>
                            <td>
                                {{ $article->brief }}
                            </td>
                            <td>
                                {{ $article->content }}
                            </td>
                            <td>
                                <img width="100" height="80" src="{{ asset('storage/' . $article->image) }}" />
                            </td>
                            <td>
                                {{ $article->views }}
                            </td>
                            <td>
                                {{ count($article->comments) }}
                            </td>
                            <td class="w-25">
                                <a class="btn btn-warning" href="{{route('articles.edit', $article->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('articles.destroy',$article->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
