@extends('layouts.master')

@section('title', '新增文章')

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
<header class="intro-header" style="background-image: url('{{ asset('img/contact-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>新增文章</h1>
                    <hr class="small">
                    <span class="subheading">請填寫以下表單來新增文章</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            {!! Form::open(['route' => 'posts.store', 'method' => 'post', 'name' => 'sentMessage', 'id' => 'contactForm', 'novalidate']) !!}
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('title', '標題') !!}
                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => '標題', 'data-validation-required-message' => '請輸入文章標題', 'required']) !!}
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('sub_title', '副標題') !!}
                        {!! Form::text('sub_title', null, ['id' => 'sub_title', 'class' => 'form-control', 'placeholder' => '副標題', 'data-validation-required-message' => '請輸入副文章標題', 'required']) !!}
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        {!! Form::label('content', '內文') !!}
                        {!! Form::textarea('content', null, ['id' => 'content', 'rows' => 5, 'class' => 'form-control', 'placeholder' => '內文', 'data-validation-required-message' => '請輸入文章內文', 'required']) !!}
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <p style="font-size: 1.5em; color: #555; margin-bottom: 0">設定為精選文章？</p>
                        {!! Form::radio('is_feature', 1, false) !!} 是
                        {!! Form::radio('is_feature', 0, true) !!} 否
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        {!! Form::submit('送出', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

