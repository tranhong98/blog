@extends('layouts.manager.index')

@section('title', 'Manager Users')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Users</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('users.index')}}">Manager Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Users</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Users</h4>
                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="image" class="form-control" id="avatar">
                    </div>
                    <div class="form-group">
                        <label for="name">Role</label>
                        <select name="role" class="form-control">
                            <option value="">Choose Role</option>
                           @foreach($roles as $role)
                           <option value="{{$role->id}}">{{$role->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Submit</button>
                    <a href="{{route('users.index')}}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
