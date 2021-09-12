@extends('layouts.manager.index')

@section('title', 'Manager Category')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Category</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager Category</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('categories.create')}}" class="btn btn-success float-right">Create</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td style="width: 20%;">
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-warning" href="{{route('categories.edit', $category->id)}}">Edit</a>
                                    <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
