@extends('layouts.manager.index')

@section('title', 'Manager Role')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Roles</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="{{route('dashboard')}}">Manager Role</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <form action="{{route('roles.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Role">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="{{route('roles.index')}}" class="btn btn-light" >Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
