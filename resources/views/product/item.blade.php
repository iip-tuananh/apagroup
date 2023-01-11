@php
    $img = json_decode($product->images);
@endphp

    <div class="badge-container absolute left top z-1"></div>
    <div class="product-small box has-hover box-normal box-text-bottom item-border cusor-pointer">
       <div class="box-image">
          <div class="image-cover" style="padding-top:90%;">
             <a href="#" aria-label="{{languageName($product->name)}}">
             <img width="600" height="600" src="{{$img[0]}}" class="attachment-original size-original border-img" alt="{{languageName($product->name)}}" decoding="async" loading="lazy" sizes="(max-width: 600px) 100vw, 600px" title="{{languageName($product->name)}}">									</a>
          </div>
          <div class="image-tools top right show-on-hover">
          </div>
          <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
          </div>
       </div>
       <div class="box-text text-center">
          <div class="title-wrapper">
             <p class="name product-title woocommerce-loop-product__title"><a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link limit-text-2">{{languageName($product->name)}}</a></p>
          </div>
          <div class="price-wrapper limit-text-3">
             {!!languageName($product->description)!!}
          </div>
          <div>
             @if($product->price > 0)
             <span class="price"><span class="woocommerce-Price-amount amount">  {{number_format($product->price,0,'','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">đ</span></bdi></span></span>
             @else
             <span class="price"><span class="woocommerce-Price-amount amount">Liên Hệ&nbsp;<span class="woocommerce-Price-currencySymbol"></span></bdi></span></span>
             @endif
          </div>
       </div>
    </div>
