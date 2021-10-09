</html>
@extends('layouts.manager.index')

@section('title', 'Manager Artticles')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Artticles</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('dashboard')}}">Manager Articles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Article</h4>
                <form action="{{route('articles.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="name">Brief</label>
                        <input type="text" name="brief" class="form-control" id="brief" placeholder="Enter Brief">
                    </div>
                    <div class="form-group">
                        <label for="name">Content</label>
                        <input type="text" name="content" class="form-control" id="content" placeholder="Enter Content">
                    </div>
                    <div class="form-group">
                        <label for="name">Views</label>
                        <input type="text" name="views" class="form-control" id="views" placeholder="Enter Views">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="{{route('articles.index')}}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
