@extends('layouts.main.master')
@section('title')
    {{ languageName($product->name) }}
@endsection
@section('description')
@endsection
@section('image')
@php
    $imgs = json_decode($product->images);
    
@endphp
{{ url('' . $imgs[0]) }}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/detail__product.css')}}">
@endsection
@section('js')
 <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
 <script>
    $('.tuan').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },

            1000:{
                items:4
            }
        }
    })
   </script>
@endsection
@section('content')
<main id="main">
    <section class="page__banner" style="background-image:url('{{asset('frontend/img/bg__page.jpg')}}')">
       <div class="container">
          <h2 class="title__global">
             Chi tiết Sản phẩm
          </h2>
       </div>
    </section>
    <section class="detail__product">
       <div class="container">
          <div class="detail__header">
             <div class="detail__avatar">
                <div class="frame">
                   <img src="{{$imgs[0]}}" alt="{{languageName($product->name)}}">
                </div>
             </div>
             <div class="detail__content">
                <h2 class="detail__title">
                   {{languageName($product->name)}}
                </h2>
                <a href="tel:{{$setting->phone1}}" class="btn btn__price" title="báo giá">
                    Báo giá
                </a>
                <br>
                <div class="detail__desc">
                  {!!languageName($product->description)!!}
                </div>
               
             </div>
          </div>
          <div class="detail__body">
             <h3 class="title-gioithieu">
                Giới thiệu sản phẩm
             </h3>
             <div class="detail__dec">
                {!!languageName($product->content)!!}
             </div>
          </div>
       </div>

       <div class="product__related">
          <div class="container">
            <div>
                <h3 class="title-splq">
                    Sản phẩm liên quan
                 </h3>
            </div>
            <div class="owl-carousel owl-theme tuan">
                @foreach ($productlq as $item)
                @if($item->id != $product->id)
                @php
                    $img = json_decode($item->images)
                @endphp
                <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'slug'=>$item->slug])}}">
                    <div class="item product-tuan">
                       <div class="item-img">
                            <img src="{{$img[0]}}" alt="" srcset="">
                       </div>
                       <div class="item-title">
                        {{languageName($item->name)}}
                       </div>
                    </div>
                </a>
                @else
   Hiện tại chưa có sản phẩm nào
         
                @endif
                @endforeach
            </div>
          </div>
       </div>
       
    </section>
 </main>

@endsection
