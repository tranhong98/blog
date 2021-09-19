@extends('layouts.manager.index')

@section('title', 'Manager Products')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Products</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager Products</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('products.create')}}" class="btn btn-success float-right mb-3">Create</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Number</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td>
                                {{ number_format($product->price) . ' VND' }}
                            </td>
                            <td>
                                {{ number_format($product->number) }}
                            </td>
                            <td>
                                {{ $product->category->name }}
                            </td>
                            <td style="width: 10%;">
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning btn-sm mr-2" href="{{route('products.edit', $product->id)}}">Edit</a>
                                    <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-5">
                <div class="float-right">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
        @endsection
