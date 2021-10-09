@extends('layouts.manager.index')

@section('title', 'Manager Categories')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Categories</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('roles.index')}}">Manager Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>
                <form action="{{route('categories.update', $category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$category->name}}">
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Save</button>
                    <a href="{{route('categories.index')}}" class="btn btn-gradient-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
