@extends('layouts.manager.index')

@section('title', 'Manager Role')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Roles</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager Role</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('roles.create')}}" class="btn btn-success float-right">Create</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>
                                {{ $role->id }}
                            </td>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td class="w-25">
                                <a class="btn btn-warning" href="{{route('roles.edit', $role->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('roles.destroy',$role->id)}}">Delete</a>
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
