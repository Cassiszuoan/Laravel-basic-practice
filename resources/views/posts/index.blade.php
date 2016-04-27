@extends('layouts.master')

@section('title', $postType)

@section('content')
<!-- Page Header -->
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>{{ $postType }}</h1>
                    <hr class="small">
                    <span class="subheading">歡迎瀏覽{{ $postType }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        <div class="text-right">
            <a href="{{ route('posts.create') }}" class="btn btn-primary" role="button">新增</a>
        </div>

            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post->sub_title }}
                    </h3>
                </a>
                <p class="post-meta">由 <a href="#">Start Bootstrap</a> 發表於 {{ $post->created_at->toDateString() }}</p>
            </div>
            <hr>
            @endforeach
            
            <!-- Pager -->
            <nav class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
                {!! $posts->render() !!}
            </nav>
        </div>
    </div>
</div>
@endsection