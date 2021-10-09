@extends('layouts.manager.index')

@section('title', 'Manager Articles')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Articles</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('products.index')}}">Manager Articles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Articles</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Article</h4>
                <form action="{{route('articles.update', $article->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$article->name}}">
                    </div>
                    <div class="form-group">
                        <label for="brief">Brief</label>
                        <input type="text" name="brief" class="form-control" id="brief" placeholder="Enter Brief" value="{{$article->brief}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Content</label>
                        <input type="text" name="content" class="form-control" id="content" placeholder="Enter Content" value="{{$article->content}}">
                    </div>
                    <div class="form-group">
                        <label for="views">Views</label>
                        <input type="text" name="views" class="form-control" id="views" placeholder="Enter Views" value="{{$article->views}}">
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Save</button>
                    <a href="{{route('articles.index')}}" class="btn btn-gradient-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
