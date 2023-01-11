@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image) }}
@endsection
@section('css')
 
@endsection
@section('js')
@endsection
@section('content')
      <main id="main" >
         <section class="home-banner">
            @foreach ($banners as $item)
               <div class="banner__item">
                  <div class="frame">
                     <img class="frame__image"  src="{{$item->image}}" alt="{{$item->image}}">
                     <div class="img" style="background-image: url('{{$item->image}}')"></div>
                  </div>
                  <h1 class="banner__title">{{$item->title}}</h1>
               </div>
            @endforeach
         </section>
         {{-- //end banner --}}
         <section class="home-field">
            <div class="container">
               <div class="home-field__content">
                  <span class="field__tag"> AP GROUP </span>
                  <h2 class="title__global">LĨNH VỰC HOẠT ĐỘNG</h2>
                  <div class="field__info">
                     <p>Ng&agrave;y nay, với sự ph&aacute;t triển kh&ocirc;ng ngừng của KH &ndash; KT v&agrave; sự nỗ lực kh&ocirc;ng mệt mỏi của c&ocirc;ng ty đ&atilde; gi&uacute;p ch&uacute;ng t&ocirc;i trở th&agrave;nh một trong những đơn vị dẫn đầu trong lĩnh vực sản xuất c&aacute;c sản phẩm : Nh&ocirc;m thanh định h&igrave;nh mang thương hiệu AP ,cửa nh&ocirc;m, cửa cuốn mang thương hiệu AP. Đảm bảo cung cấp ra thị trường h&agrave;ng chục ngh&igrave;n tấn nh&ocirc;m mỗi năm với chất lượng v&agrave; dịch vụ vượt trội, đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao của ng&agrave;nh nh&ocirc;m Việt v&agrave; xuất khẩu ra thị trường nước ngo&agrave;i.</p>
                  </div>
               </div>
            </div>
         </section>
         <section class="section-products">
            <div class="container">
                  <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                              <div class="header">
                                  <h1 class="blod">SẢN PHẨM TIÊU BIỂU</h1>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <!-- Single Product -->
                        @foreach ($hotProduct as $product)
                        @php
                           $img = json_decode($product->images);
                 
                        @endphp
                       
                           <div class="col-md-6 col-lg-4 col-xl-4">
                                 <div id="product-1" class="single-product">
                                       <div class="part-1">
                                          <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
                                          <img src="{{$img[0]}}" alt="" srcset="">
                                          </a>
                                       </div>
                                       <div class="part-2">
                                          <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
                                            <div class="nd limit-text-2 text-pr">{{languageName($product->name)}}</div>
                                          </a>
                                       </div>
                                 </div>
                           </div>
                   
                        @endforeach
                  </div>
            </div>
         </section>
         {{-- end product hot --}}
         <section class="home-new">
            <div class="container">
               <h1 class="blod" style="text-align:center; padding:50px 20px;">TIN TỨC</h1>
               <div class="new-grid">
                  @foreach ($hotBlogs as $item)
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
                              <span style="color:rgb(233, 104, 29)">
                                 {{$item->updated_at->format('d/m/y')}}
                              </span>
                              <div class="new__content">
                                 {{languageName($item->description)}}
                              </div>
                              <a style="color:rgb(233, 104, 29)" href="{{route('detailBlog',['slug'=>$item->slug])}}" class="btn btn__view" title="Xem thêm">
                              Xem thêm
                              </a>
                           </div>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </section>
         {{-- end tin tức --}}
         <section class="home-develope" style="background-image: url('http://singhal.com.vn/uploads/images/bg__develope.jpg')">
            <div class="container">
               <div class="module__header">
                  <h2 class="title__global" style="color:orangered">HÀNH TRÌNH 15 NĂM PHÁT TRIỂN</h2>
                  <div class="info__global" style="font-style: italic">
                     Bằng khát vọng mang tới những sản phẩm thương hiệu Việt thực sự chất lượng cùng định hướng phát triển bền vững, Ap Group phấn đấu trở thành Tập đoàn sản xuất và cung ứng nhôm thanh định hình và cửa cuốn theo xu hướng hiện đại, thân thiện với môi trường hàng đầu tại Việt Nam và hướng tới thị trường xuất khẩu.
                  </div>
               </div>
               <div class="develope__slide">
                  <div class="develope__item">
                     <div class="develope__box">
                        <h3 class="develope__title">15 năm</h3>
                        <div class="develope__desc">
                           <p>Một chặng đường đầy khát vọng và phấn đấu</p>
                        </div>
                        <a href="#" class="btn btn__view" title="Xem thêm">
                        Xem thêm
                        </a>
                     </div>
                  </div>
                  <div class="develope__item">
                     <div class="develope__box">
                        <h3 class="develope__title">Hơn 47</h3>
                        <div class="develope__desc">
                           <p>Nhà phân phối trên toàn quốc, xây dựng thương hiệu được thị trường yêu mến</p>
                        </div>
                        <a href="#" class="btn btn__view" title="Xem thêm">
                        Xem thêm
                        </a>
                     </div>
                  </div>
                  <div class="develope__item">
                     <div class="develope__box">
                        <h3 class="develope__title">Hơn 1  <br>  thập kỷ</h3>
                        <div class="develope__desc">
                           <p>dẫn đầu trong lĩnh vực sản xuất nhôm thanh định hình sơn tĩnh và cửa cuốn cao cấp</p>
                        </div>
                        <a href="#" class="btn btn__view" title="Xem thêm">
                        Xem thêm
                        </a>
                     </div>
                  </div>
                  <div class="develope__item">
                     <div class="develope__box">
                        <h3 class="develope__title">Năm 2015</h3>
                        <div class="develope__desc">
                           <p>được trao giải thưởng doanh nhân trẻ khởi nghiệp xuất sắc</p>
                        </div>
                        <a href="#" class="btn btn__view" title="Xem thêm">
                        Xem thêm
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         {{-- end hành trình --}}
         <section class="partner">
            <div class="container">
               <h2 class="title__global">ĐỐI TÁC - KHÁCH HÀNG</h2>
               <div class="partner__slide">
                  @foreach ($partners as $item)
                     <div class="partner__item">
                        <div class="partner__box">
                           <a href="" class="frame" title="{{$item->name}}">
                           <img src="{{$item->image}}" alt="{{$item->name}}" />
                           </a>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </section>
         {{-- end đối tác --}}
      </main>
 @endsection
