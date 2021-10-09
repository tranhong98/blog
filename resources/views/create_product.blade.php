@extends('layouts.manager.index')

@section('title', 'Manager Products')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Products</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('dashboard')}}">Manager Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Role</h4>
                <form action="{{route('products.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Product">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description Price">
                    </div>
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price Price">
                    </div>
                    <div class="form-group">
                        <label for="name">Number</label>
                        <input type="number" name="number" class="form-control" id="number" placeholder="Enter Name Number">
                    </div>
                    <div class="form-group">
                        <label for="name">Category</label>
                        <select name="category" class="form-control">
                            <option value="">Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="{{route('products.index')}}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
