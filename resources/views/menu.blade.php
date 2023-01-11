<div class="col-3 col-xs-hidden ">
   <div class="menu-right-custom">
    <div class="">
       <h3 class="menu-right-title">
          DANH MỤC 
       </h3>
    </div>
    <ul class="ul-menu-right">
       @foreach ($categoryProduct as $cate)
          <li class="menu-right-content">
             <a href="{{route('allListProCate',['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
             <button type="button" class="btn btn__add">
             </button>
          </li>
       @endforeach
    </ul>
   </div>
</div>