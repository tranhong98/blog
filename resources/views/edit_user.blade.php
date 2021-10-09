</html>
@extends('layouts.manager.index')

@section('title', 'Manager Users')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Users</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('roles.index')}}">Manager Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit User</h4>
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Enter Password" value="{{$user->password}}">
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Save</button>
                    <a href="{{route('users.index')}}" class="btn btn-gradient-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
