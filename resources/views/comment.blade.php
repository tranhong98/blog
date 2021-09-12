@extends('layouts.manager.index')

@section('title', 'Manager Comment')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Comment</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager Comment</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('comments.create')}}" class="btn btn-success float-right">Create</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Content</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td>
                                {{ $comment->content }}
                            </td>
                            <td>
                                {{ $comment->view }}
                            </td>
                            <td class="w-25">
                                <a class="btn btn-warning" href="{{route('comments.edit', $comment->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('comments.destroy',$comment->id)}}">Delete</a>
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
