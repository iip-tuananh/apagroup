@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/page__product.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/cm__product.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/pagination.css')}}">

@endsection
@section('js')

@endsection
@section('content')
<main id="main">
   
   <section class="page__banner" style="background-image:url('{{asset('frontend/img/bg__page.jpg')}}')">
      <div class="container">
         <h1 class="title__global">
            Sản phẩm
         </h1>
      </div>
   </section>
   <section class="page__product">
      <div class="container">
         <div class="row">
            
            @include('menu')
            @if(count($list) > 0)
            <div class="col-9 product-ct-new">
               <div class="open-menu-mobile">
               ☰
               </div>
               <div class="menu-mobile-custom">
                  <h3 class="menu-mobile-title">
                  DANH MỤC
                  <span class="close-menu-mobile">x</span>
                  </h3>
             
                  <ul class="menu-mobile-right">
                     @foreach ($categoryProduct as $cate)
                        <li class="menu-mobile-content">
                           <a href="{{route('allListProCate',['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}
                           </a>
                     
                        </li>
                     @endforeach
                  </ul>
               </div>
               <div class="product__grid">
                  
                  @foreach ($list as $product)
                  @php
                      $img = json_decode($product->images)
                  @endphp
                     <div class="product">
                        <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" class="product__avatar frame" title="test">
                        <img src="{{$img[0]}}" alt="test">
                        </a>
                        <h3 class="product__title">
                           <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" title="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
                         {{languageName($product->name)}}
                           </a>
                        </h3>
                     </div>
                  @endforeach
               </div>
               <div id="pagenavnew">
                  {{$list->links()}}
               </div>
            </div>
            @else
            <div class="col-9" style="text-align: center">
               Hiện tại chưa có sản phẩm nào trong danh mục này
            </div>
               @endif
         </div>
      </div>
      </div>

         </div>
      </div>
   </section>
</main>
@endsection