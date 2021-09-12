@extends('layouts.manager.index')

@section('title', 'Manager User')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Users</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager User</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('users.create')}}" class="btn btn-success float-right">Create</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role_ID</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                {{ $user->password }}
                            </td>
                            <td>
                                {{ $user->role_id }}
                            </td>
                            <td class="w-25">
                                <a class="btn btn-warning" href="{{route('users.edit', $user->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('users.destroy',$user->id)}}">Delete</a>
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
