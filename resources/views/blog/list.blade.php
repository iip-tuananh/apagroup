@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/page__new.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/pagination.css')}}">
@endsection
@section('js')
@endsection
@section('content')
<main id="main">
   <h1 style="display: none">Tin tức</h1>
   <section class="page__banner" style="background-image: url('{{asset('frontend/img/e836b59bbadc4c8215cd(1).jpg')}}')">
      <div class="container">
         <h2 class="title__global">Tin tức</h2>
      </div>
   </section>
   <section class="page__new">
      <div class="container">
         <div class="new__group">
          
            <div class="new__content">
               <div class="new-grid">
                  @foreach ($list_blog as $item)
                     <div class="new__item">
                        <div class="new__group">
                        
                           <div class="new_box">
                              <h4 class="new__title">
                                 <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                                 {{languageName($item->title)}}
                                 </a>
                              </h4>
                              <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="frame" title="{{languageName($item->title)}}">
                              <img src="{{$item->image}}" alt="{{languageName($item->title)}}" />
                              </a>
                              <div class="new__content">
                                 {{languageName($item->description)}}
                              </div>
                              <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="btn btn__view" title="Xem thêm">
                              Xem thêm
                              </a>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
         <div id="pagenavnew">
            {{$list_blog->links()}}
         </div>
      </div>
   </section>
</main>
@endsection