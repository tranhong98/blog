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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brief</th>
                            <th>Content</th>
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
                                {!! $article->content !!}
                            </td>
                            <td>
                                {{ $article->views }}
                            </td>
                            <td>
                                {{ count($article->comments) }}
                            </td>
                            <td class="w-11">
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-primary btn-sm" href="{{route('articles.show', $article->id)}}">Show</a>
                                    <a class="btn btn-warning btn-sm" href="{{route('articles.edit', $article->id)}}">Edit</a>
                                    <form action="{{route('articles.destroy',$article->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-5">
                <div class="float-right">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
