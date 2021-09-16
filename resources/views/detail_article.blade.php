@extends('layouts.manager.index')

@section('title', 'Manager Article')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manager Article</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manager Article</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="blog-single gray-bg">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-lg-12 m-15px-tb">
                                <article class="article">
                                    <div class="article-title">
                                        <h2>{{ $article->name }}</h2>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <div class="article-content">
                                        {!! $article->content !!}
                                    </div>
                                </article>
                                <div class="container mb-5 mt-5">
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="text-center mb-5">Comments</h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                @foreach($article->comments as $comment)
                                                                <div class="row">
                                                                    <div class="col-8 d-flex">
                                                                        <img class="mr-3 rounded-circle" alt="Img" src="" />
                                                                        <h5>{{ $comment->user->name }}</h5> <span> - {{ $comment->created_at }}</span>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="pull-right reply"> <a href="#"><span><i class="fa fa-reply"></i> reply</span></a> </div>
                                                                    </div>
                                                                </div>
                                                                <div>{!! $comment->content !!}</div>
                                                                @foreach($comment->childComments as $child)
                                                                <div class="media mt-4"> <a class="pr-3" href="#">
                                                                        <img class="rounded-circle" alt="Img" src="https://i.imgur.com/xELPaag.jpg" /></a>
                                                                    <div class="media-body">
                                                                        <div class="row">
                                                                            <div class="col-12 d-flex">
                                                                                <h5>{{ $child->user->name }}</h5> <span>- {{ $child->created_at }}</span>
                                                                            </div>
                                                                        </div>
                                                                        {{ $child->content }}
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
