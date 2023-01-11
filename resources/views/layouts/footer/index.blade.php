<footer id="footer">
   <div class="container">
      <style>
         .text-ct{
            text-align: center;
            padding-bottom: 10px;
         }
         .foter-ct li{
            list-style: none !important;
            padding-top: 20px;
            font-size: 16px;
            padding: 0 auto;
            margin: 0 auto;
         }
         .foter-ct li i{
            color: rgb(255, 68, 0);
         }
         .foter-ct ul{
            padding-left: 0px !important;
         }
      </style>
      <div class="row" style="padding-bottom: 20px">
         <div class="col-lg-4 col-xs-12 col-md-6 text-ct">
           <img src="{{$setting->logo}}" alt="" srcset="">
           <br>

           {{$setting->company}}
         </div>
         <div class="col-lg-4 col-xs-12 col-md-6 foter-ct">
            <h2 style="color: orangered; font-weight:bold">Thông tin liên hệ</h2>
            <ul>
               <li><i class="fa-solid fa-phone"></i>&nbsp;{{$setting->phone1}}</li>
               <li><i class="fa-regular fa-envelope"></i>  &nbsp;{{$setting->email}}</li>
               <li><i class="fa-solid fa-location-dot"></i>&nbsp;{{$setting->address1}}</li>
               <li></li>
            </ul>
         </div>
         <div class="col-lg-4 col-xs-12 col-md-6">
            <h2 style="color: orangered; font-weight:bold">Bản đồ</h2>
            {!!$setting->iframe_map!!}
         </div>
      </div>
      <div class="footer__bottom">
         <div class="item">
            © Ap Group 
         </div>
         <ul class="item">
            <li class="  active ">
               <a href="{{route('home')}}" title="Trang chủ">
               Trang chủ
               </a>
            </li>
            <li class=" ">
               <a href="{{route('aboutUs')}}" title="Giới thiệu">
               Giới thiệu
               </a>
            </li>
            <li class=" ">
               <a href="{{route('allProduct')}}" title="Sản phẩm">
               Sản phẩm
               </a>
            </li>
            <li class=" ">
               <a href="{{route('listProject')}}" title="Đại lý">
               Dự Án
               </a>
            </li>
          
            <li class=" ">
               <a href="{{route('allListBlog')}}" title="Tin tức">
               Tin tức
               </a>
            </li>
            <li class=" ">
               <a href="{{route('lienHe')}}" title="Liên hệ">
               Liên hệ
               </a>
            </li>
         </ul>
      </div>
   </div>
   <div class="hk-option-button-contact">
      <ul>
         <li><a href="https://zalo.me/{{$setting->phone1}}" target="_blank"><span class="button-hk-contact zalo"></span></a></li>
         <li><a href="tel:{{$setting->phone1}}"><span class="button-hk-contact facebook"></span></a></li>
         <li><a href="{{$setting->facebook}}" target="_blank"><span class="button-hk-contact messages"></span></a></li>
      </ul>
   </div>
</footer>