@extends('layouts.main.master')
@section('title')
{{ languageName($blog_detail->title) }}
@endsection
@section('description')
{{ languageName($blog_detail->description) }}
@endsection
@section('image')
{{ url('' . $blog_detail->image) }}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/detail__new.css')}}">
@endsection
@section('js')

@endsection
@section('content')
<main id="main">
   <section class="page__banner" style="background-image: url('http://singhal.com.vn/uploads/images/e836b59bbadc4c8215cd(1).jpg')">
      <div class="container">
         <h2 class="title__global">Tin tức</h2>
      </div>
   </section>
   <section class="news-details">
      <div class="container">
         <div class="news__details-grid">
            <div class="news__details-item">
               {{$blog_detail->updated_at->format('d-m-Y')}}
               <br>
               <br>
               <div class="news__details-header">
                  <h2 class="ct-title">
                    {!!languageName($blog_detail->title)!!}
                  </h2>
               </div>
               <div class="news__details-content">
                  <div class="news_text">
                     {!!languageName($blog_detail->content) !!}
                  </div>
               </div>
               <div class="facebook__comment">
                  <div id="fb-root"></div>
                  <div class="fb-box">
                     <div class="fb-comments" data-href="http://singhal.com.vn/tin-tuc/khoa-san-singhal-va-nhung-uu-diem-vuot-troi" data-width="100%" data-numposts="3"></div>
                  </div>
               </div>
            </div>
            <div class="news__details-sidebar">
               <h2 class="sidebar-title">
                  Bài viết Mới
               </h2>
               <div class="sidebar-content">
                  @foreach ($news as $item)
                     <div class="sidebar_content-item">
                        <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{!!languageName($item->title)!!}</a>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection