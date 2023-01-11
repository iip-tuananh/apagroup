<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="keywords" content="@yield('title')" />
<meta name="robots" content="noodp,index,follow" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="@yield('description')" />
<link rel="canonical" href="{{ url()->current() }}" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="article" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:site_name" content="{{ url()->current() }}" />
<meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
<meta property="og:image" content="@yield('image')" />
<meta property="og:image:secure_url" content="@yield('image')" />
<meta property="og:image:width" content="598" />
<meta property="og:image:height" content="333" />
<meta property="og:image:alt" content="" />
<meta property="og:image:type" content="image/jpeg" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<meta name="twitter:image" content="@yield('image')" />
<!-- Fav Icon -->
<link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
@yield('css')
      <!--link css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="{{asset('frontend/css/tool.css')}}" rel="stylesheet">
      <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/toastr.min.css')}}" />
      <link href="{{asset('frontend/css/tdt.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('frontend/css/index.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/css/cm__new.css')}}" />
   </head>
   <body class="page-body home-body lammo">
      <div class="loadingcover" style="display: none;">
         <p class="csslder">
            <span class="csswrap">
            <span class="cssdot"></span>
            <span class="cssdot"></span>
            <span class="cssdot"></span>
            </span>
         </p>
      </div>
@include('layouts.header.index')
@yield('content');
@include('layouts.footer.index')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="{{asset('frontend/js/tool.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/toastr.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('frontend/js/tdt.js')}}"></script>
      @yield('js')
      <script>

         $(document).ready(function() {
             homeBanner = () => {
                 $(".home-banner").slick({
                     arrows: false,
                     autoplay: true,
                     dots: true,
                     fade: true,
                 });
             };
             homeBanner();
             homeDevelope = () => {
                 $(".develope__slide").slick({
                     dots: false,
                     arrows: false,
                     slidesToShow: 4,
                     slidesToScroll: 1,
                     autoplay: true,
                     responsive: [{
                             breakpoint: 991.98,
                             settings: {
                                 slidesToShow: 3,
                                 slidesToScroll: 1,
                             },
                         },
                         {
                             breakpoint: 600,
                             settings: {
                                 slidesToShow: 2,
                                 slidesToScroll: 2,
                             },
                         },
                         {
                             breakpoint: 480,
                             settings: {
                                 slidesToShow: 1,
                                 slidesToScroll: 1,
                             },
                         },
                     ],
                 });
             };
             homeDevelope();
         
             homeParter = () => {
                 $(".partner__slide").slick({
                     dots: false,
                     arrows: true,
                     slidesToShow: 5,
                     slidesToScroll: 1,
                     autoplay: false,
                     responsive: [{
                             breakpoint: 991.98,
                             settings: {
                                 slidesToShow: 4,
                                 slidesToScroll: 1,
                             },
                         },
                         {
                             breakpoint: 600,
                             settings: {
                                 slidesToShow: 3,
                                 slidesToScroll: 2,
                             },
                         },
                         {
                             breakpoint: 479.98,
                             settings: {
                                 slidesToShow: 2,
                                 slidesToScroll: 1,
                             },
                         },
                     ],
                 });
             };
             homeParter();
         
             homeBrand = () => {
                 $(".slide__brand").slick({
                     dots: false,
                     arrows: false,
                     slidesToShow: 4,
                     slidesToScroll: 1,
                     autoplay: false,
                     responsive: [{
                             breakpoint: 600,
                             settings: {
                                 slidesToShow: 3,
                                 slidesToScroll: 2,
                             },
                         },
                         {
                             breakpoint: 479.98,
                             settings: {
                                 slidesToShow: 2,
                                 slidesToScroll: 1,
                             },
                         },
                     ],
                 });
             };
             homeBrand();
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
         	toastr.options = {
         		"closeButton": false,
         		"debug": false,
         		"newestOnTop": false,
         		"progressBar": false,
         		"positionClass": "toast-top-right",
         		"preventDuplicates": false,
         		"onclick": null,
         		"showDuration": "300",
         		"hideDuration": "1000",
         		"timeOut": "5000",
         		"extendedTimeOut": "1000",
         		"showEasing": "swing",
         		"hideEasing": "linear",
         		"showMethod": "fadeIn",
         		"hideMethod": "fadeOut"
         	}
         	var url = 'http://singhal.com.vn';
             var parent_id = $('a[href="'+url+'"]').data('parent');
             $('li[data-id="'+parent_id+'"]').addClass('active');
         });
      </script>
      <script>
        $('.open-menu-mobile').on('click',function(e){
            $('.menu-mobile-custom').addClass('show');
            console.log($(this).parent().find('.menu-mobile-custom.show'));
     
            // $(this).parent().find('.menu-mobile-custom.show').removeClass('show');
            
        });
        $('.close-menu-mobile').click(function(){
            $('.menu-mobile-custom').removeClass('show');
        });
      </script>
      <!-- Your Chat Plugin code -->
   </body>
</html>