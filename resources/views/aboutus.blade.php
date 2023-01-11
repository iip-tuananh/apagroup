@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')

@endsection
@section('js')

@endsection
@section('content')

<main id="main" class="pd-top" style="padding-bottom: 30px">
  <div class="container">
   <div class="row maunen" >
      <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
         <div class="article-title">
            <span>
               <img src="{{$setting->logo}}" alt="" srcset="">
            </span>
      </div>
      <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
         <div class="article-content">
            {!!$pageContent->content!!}
         </div>
      </div>
      <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
         <div class="article-title pd-top-20">
            {!!$setting->iframe_map!!}
         </div>
      </div>
   </div>
  </div>
</main>
@endsection