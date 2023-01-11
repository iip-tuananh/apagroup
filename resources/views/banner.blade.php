<div class="img has-hover x md-x lg-x y md-y lg-y mgb-20" >
  <div class="img-inner image-cover dark" style="padding-top:38%; margin-top:22px">

    @foreach ($banners as $item)

    <img width="2000" height="761" src="{{$item->image}}" class="attachment-medium size-medium" alt="nhà thông minh hải phòng tiên phong banner" decoding="async" loading="lazy" srcset="{{$item->image}}" sizes="(max-width: 2000px) 100vw, 2000px" title="Nhà thông minh Hải Phòng 36">						
    @endforeach
  </div>
</div>