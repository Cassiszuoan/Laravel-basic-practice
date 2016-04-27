@extends('layouts.master')

@section('title', $post->title)

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
<header class="intro-header" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->sub_title }}</h2>
                    <span class="meta">由 <a href="#">Start Bootstrap</a> 發表於 {{ $post->created_at->toDateString() }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <div class="text-right" style="margin-bottom: 50px;">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" role="button">編輯</a>
               
                
                {!! Form::open(['route'=>['posts.destory',$post->id],'method' => 'detele','style'=> 'display: inline;'])!!}
                {!! Form::submit('刪除',['class'=>'btn btn-danger'])!!}
                {!! Form::close()!!}
                </div>
                <div style="margin-bottom: 30px;">
                    {!! $post->content !!}
                </div>

                <!-- Comments Form -->
                <div class="well">
                    <h4>留下您的意見：</h4>
                    {!! Form::open(['route' => ['posts.comment', $post->id], 'method' => 'post', 'role' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::label('name', '姓名：') !!}
                            {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'required']) !!}

                            {!! Form::label('email', 'Email：') !!}
                            {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'required']) !!}

                            {!! Form::label('content', '內文：') !!}
                            {!! Form::textarea('content', null, ['rows' => 3, 'id' => 'content', 'class' => 'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

                <hr>

                <!-- Posted Comments -->
                @foreach($post->comments as $comment)
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->name }} ({{ $comment->email }})
                            <small>{{ $comment->created_at->toDateString() }}</small>
                        </h4>
                        {!! $comment->content !!}
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</article>
@endsection