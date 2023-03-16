@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')

<link rel="stylesheet" href="{{asset('frontend/css/page__contact.css')}}">
    
@endsection
@section('js')
@endsection
@section('content')
<main id="main">
	<h1 style="display: none">Liên hệ</h1>
	<section class="page__banner" style="background-image: url('{{asset('frontend/img/bg__detail-contact.jpg')}}')">
	   <div class="container">
		  <h2 class="title__global">Liên hệ</h2>
	   </div>
	</section>
	<section class="page__contact">
	   <div class="container">
		  <div class="header__global">
			 <span>Đăng ký nhận tư vấn</span>
		  </div>
		 
			 {{-- <div class="contact__item">
				<div class="contact__title">
				   <span>Về chúng tôi</span>
				</div>
				<div class="contact__group">
				   <div class="contact__content">
					  <p>
						{!!$pageContent->content!!}
					  </p>
				   </div>
				   <div class="contact__info">
					  <div class="info-item">
						 <img src="{{asset('frontend/img/icon__contact-phone.png')}}" alt="{{$setting->phone1}}">
						 <span>{{$setting->phone1}}</span>
					  </div>
					  <div class="info-item">
						 <img src="{{asset('frontend/img/icon__email-c.png')}}" alt="{{$setting->email}}">
						 <span>{{$setting->email}}</span>
					  </div>
					  <div class="info-item">
						 <img src="{{asset('frontend/img/icon__addr.png')}}" alt="{{$setting->address1}}">
						 <span>
						 {{$setting->address1}}
						 </span>
					  </div>
				   </div>
				</div>
			 </div> --}}
			 <div class="contact__item">
				<div class="contact__title">
				   <span>Thông tin về bạn</span>
				</div>
				@if (Session::has('thanhcong'))
				<div class="alert alert-success">
				{{ Session::get('thanhcong') }}
				</div>
			@endif
			@if (Session::has('error'))
				<div class="alert alert-error">
				{{ Session::get('error') }}
				</div>
			@endif
				<form class="form__input"  method="POST" action="{{route('postcontact')}}">
					@csrf
					<input type="text" placeholder="Họ và tên" name="name">
				   <span class="fr-error" id="error_name"></span>
				   <input type="text" placeholder="Số điện thoại" name="phone">
				   <span class="fr-error" id="error_phone"></span>
				   <input type="text" placeholder="Email" name="email">
				   <span class="fr-error" id="error_email"></span>
				   <textarea name="mess" id="" cols="30" rows="10" placeholder="Lời nhắn..." class="input-comment"></textarea>
				   <span class="fr-error" id="error_content"></span>
				   <button  type="submit" class="t-ct">Tư vấn</button>
				</form>
			 </div>
		  
	   </div>
	</section>
	<section class="contact__map">
	   <div class="container">
		  <div class="header__global">
			 <span>Bản đồ</span>
		  </div>
		  <div class="map">
			{!!$setting->iframe_map!!}
		  </div>
	   </div>
	</section>
 </main>
@endsection
