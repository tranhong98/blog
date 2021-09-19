@extends('layouts.manager.index')

@section('title', 'Manager Products')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Products</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('products.index')}}">Manager Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Product</h4>
                <form action="{{route('products.update', $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Role" value="{{$product->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description Price" value="{{$product->description}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price Price" value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Number</label>
                        <input type="number" name="number" class="form-control" id="number" placeholder="Enter Name Number" value="{{$product->number}}">
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Save</button>
                    <a href="{{route('products.index')}}" class="btn btn-gradient-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
