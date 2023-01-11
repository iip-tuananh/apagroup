<header id="header">
   <div class="header-body">
      <div class="container">
         <div class="header__banner">
            <a href="{{route('home')}}" class="logo" title="Logo">
            <img src="{{$setting->logo}}" alt="Logo">
            </a>
            <div class="box__menu">
               <div class="box__container">
                  <ul class="menu">
                     <span class="menu__line"></span>
                     <li class="menu__list    {{Route::currentRouteName() == 'home' ? 'active' : ''}}">
                        <a href="{{route('home')}}" class="menu__link" title="Trang chủ">
                        Trang chủ
                        </a>
                     </li>
                     <li class="menu__list  has-childrens {{Route::currentRouteName() == 'aboutUs' ? 'active' : ''}}  ">
                        <a href="{{route('aboutUs')}}" class="menu__link" title="Giới thiệu">
                        Giới thiệu
                        </a>
                     </li>
                     <li class="menu__list  has-childrens  {{Route::currentRouteName() == 'allProduct' ? 'active' : ''}}  {{Route::currentRouteName() == 'allListProCate' ? 'active' : ''}} ">
                        <a href="{{route('allProduct')}}" class="menu__link" title="Sản phẩm">
                        Sản phẩm
                        </a>
                        <ul class="sub__menu">
                           @foreach ($categoryProduct as $item)
                              <li>
                                 <a href="{{route('allListProCate',['cate'=>$item->slug])}}" title="{{languageName($item->name)}}">{{languageName($item->name)}}</a>
                              </li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="menu__list  has-childrens  {{Route::currentRouteName() == 'listProject' ? 'active' : ''}}  {{Route::currentRouteName() == 'detailProject' ? 'active' : ''}}">
                        <a href="{{route('listProject')}}" class="menu__link" title="Tin tức">
                           Dự Án
                        </a>
                     </li>
                     <li class="menu__list  has-childrens {{Route::currentRouteName() == 'allListBlog' ? 'active' : ''}} {{Route::currentRouteName() == 'detailBlog' ? 'active' : ''}}">
                        <a href="{{route('allListBlog')}}" class="menu__link" title="Tin tức">
                        Tin tức
                        </a>
                     </li>
                     <li class="menu__list   {{Route::currentRouteName() == 'lienHe' ? 'active' : ''}}">
                        <a href="{{route('lienHe')}}" class="menu__link" title="Liên hệ">
                        Liên hệ
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <button type="button" class="btn btn__menu">
               ☰</button>
         </div>
      </div>
   </div>
</header>