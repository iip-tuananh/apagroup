@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
<link href="{{ asset('frontend/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/blog_article_style.scss.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="container">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
       <div class="row container">
          <div class="large-9 col">
            <h2>{{$detail_service->name}}</h2>
            <span><i style="font-size: 11px">{{$detail_service->updated_at->format('d.m.Y')}}</i></span>
            <br>
            {!!languageName($detail_service->content)!!}
          </div>
          @include('blog.menublog')
       </div>
    </div>
    </main

@endsection