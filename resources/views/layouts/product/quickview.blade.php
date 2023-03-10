@php
    $image = json_decode($product->images);
    $discountPrice = $product['price'] - $product['price'] * ($product['discount'] / 100);
               
@endphp
<div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
<div class="quick-view-product">
    <div class="block-quickview primary_block details-product">
        <div class="row">
            <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
            <div class="image-block large-image col_large_default">
                <span class="view_full_size">
                <a class="img-product" title="{{languageName($product->name)}}" href="javascript:;">
                <img src="{{$image[0]}}" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview">
                </a>
                </span>
                <div class="loading-imgquickview" style="display:none;"></div>
            </div>
            <div class="more-view-wrapper clearfix">
                <div class="thumbs_quickview owl_nav_custome1 swiper-container thumbs_list_quickview swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="thumbs_list_quickview">
                    <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper" id="thumblist_quickview" style="transform: translate3d(-111.25px, 0px, 0px); transition-duration: 0ms;">
                        @foreach ($image as $img)
                            <li class="swiper-slide swiper-slide-prev" style="width: 96.25px; margin-right: 15px;"><a href="javascript:void(0)" data-zoom-image="{{$img}}"><img src="{{$img}}" alt="Zomart" style="max-width:120px; max-height:120px;"></a>
                            </li>
                        @endforeach
                        
                    </ul>
                    <div class="swiper-button-prev">
                    </div>
                    <div class="swiper-button-next swiper-button-disabled">
                    </div>
                </div>
            </div>
            </div>
            <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border" id="product-27357045">
            <div class="head-qv group-status">
                <h3 class="qwp-name title-product"><a class="text2line" href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
                <div class="vend-qv group-status">
                    <div class="left_vend">
                        <div class="first_status ">Th????ng hi???u:
                        <span class="vendor_ status_name">{{ $product->brand->name}}</span>
                        </div>
                    
                        
                    </div>
                </div>
            </div>
            <div class="quickview-info">
                <span class="prices price-box">
                <span class="price product-price sale-price on-sale">{{number_format($discountPrice, 0 ,'', '.')}}???</span>
                <del class="old-price">{{number_format($product->price, 0 ,'', '.')}}???</del>
                </span>
            </div>
            <div class="product-description product-summary">
                <div class="rte">
                    <ul>
                        <li><strong>K??ch th?????c m??n h??nh:</strong> 6.7 inches</li>
                        <li><strong>C??ng ngh??? m??n h??nh:</strong> OLED</li>
                        <li><strong>Camera sau: </strong>12MP, ??/1.5</li>
                        <li><strong>Camera g??c si??u r???ng:</strong> 12MP, ??/1.8</li>
                        <li><strong>Camera tele: </strong>12MP, /2.8</li>
                        <li><strong>Camera tr?????c:</strong> 12MP, ??/2.2</li>
                        <li><strong>Chipset:</strong> Apple A15</li>
                        <li><strong>Dung l?????ng RAM:</strong> 6 GB</li>
                        <li><strong>B??? nh??? trong:</strong> 128 GB</li>
                        <li><strong>Pin:</strong> 4,325mAh</li>
                        <li><strong>Th??? SIM:</strong> 2 SIM (nano???SIM v?? eSIM)</li>
                        <li><strong>H??? ??i???u h??nh:</strong> iOS15</li>
                        <li><strong>????? ph??n gi???i m??n h??nh:</strong> 2778 x 1284 pixel</li>
                        <li><strong>T??nh n??ng m??n h??nh:</strong> 120Hz, Super Retina XDR v???i ProMotion 6.1???inch, OLED, 458 pp, HDR display, True Tone, Wide color (P3), Haptic Touch</li>
                        <li><strong>Tr???ng l?????ng:</strong> 240g</li>
                        <li><strong>Bluetooth:</strong> v5.0</li>
                        <li><strong>T???n s??? qu??t:</strong> 120Hz</li>
                    </ul>
                </div>
            </div>
            <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product" id="product-actions-27357045">
                <span class="price-product-detail d-none" style="opacity: 0;">
                <span class=""></span>
                </span>
                <div class="selector-wrapper">
                    <label>M??u s???c</label>
                    <select class="single-option-selector" data-option="option1" id="product-select-27357045-option-0">
                        <option value="V??ng">V??ng</option>
                        <option value="B???c">B???c</option>
                        <option value="Xanh L??">Xanh L??</option>
                        <option value="Xanh d????ng">Xanh d????ng</option>
                        <option value="X??m">X??m</option>
                    </select>
                </div>
                <select name="variantId" class="d-none" style="display:none" id="product-select-27357045">
                    <option value="70241732">V??ng</option>
                    <option value="70241733">B???c</option>
                    <option value="70241734">Xanh L??</option>
                    <option value="70241735">Xanh d????ng</option>
                    <option value="70241736">X??m</option>
                </select>
                <div class="swatch clearfix" data-option-index="0">
                    <div class="header">M??u s???c: </div>
                    <div data-image="https://bizweb.dktcdn.net/100/449/923/products/sp1-5c062487-6d90-4a39-bfcf-f62fc06007dd-d1194c71-ae18-4727-8f8d-1ffc1e0149e7.jpg?v=1660885018613" data-value="V??ng" class="swatch-element vang available ">
                        <div class="tooltip">V??ng</div>
                        <input id="swatch-0-vang" type="radio" name="option-0" value="V??ng" checked=""><label for="swatch-0-vang">V??ng</label>
                    </div>
                    <div data-image="https://bizweb.dktcdn.net/100/449/923/products/sp1-2-79f5daab-f723-4b49-a04d-d8609dbe6e26-93f92ff4-bfce-4c8a-b890-4e64f58960cd.jpg?v=1660885018613" data-value="B???c" class="swatch-element bac available ">
                        <div class="tooltip">B???c</div>
                        <input id="swatch-0-bac" type="radio" name="option-0" value="B???c"><label for="swatch-0-bac">B???c</label>
                    </div>
                    <div data-image="https://bizweb.dktcdn.net/100/449/923/products/sp1-5-0d290449-7f43-4a4d-92fe-b2b1b3d096e6-bda2931c-be33-48c8-b32f-5ee6d0d4f5f0.jpg?v=1660885018613" data-value="Xanh L??" class="swatch-element xanh-la available ">
                        <div class="tooltip">Xanh L??</div>
                        <input id="swatch-0-xanh-la" type="radio" name="option-0" value="Xanh L??"><label for="swatch-0-xanh-la">Xanh L??</label>
                    </div>
                    <div data-image="https://bizweb.dktcdn.net/100/449/923/products/sp1-3-d1ec191b-74d4-482a-abe8-87ca774874ea-0b6759cb-ea1d-453e-a716-f9cf3c8e6ebd.jpg?v=1660885018613" data-value="Xanh d????ng" class="swatch-element xanh-duong available ">
                        <div class="tooltip">Xanh d????ng</div>
                        <input id="swatch-0-xanh-duong" type="radio" name="option-0" value="Xanh d????ng"><label for="swatch-0-xanh-duong">Xanh d????ng</label>
                    </div>
                    <div data-image="https://bizweb.dktcdn.net/100/449/923/products/sp1-4-67cc5a7a-4a39-45b4-8ee4-f163c9661954-375d53b9-401c-43f6-b961-8b74cae7ce5b.jpg?v=1660885018613" data-value="X??m" class="swatch-element xam available ">
                        <div class="tooltip">X??m</div>
                        <input id="swatch-0-xam" type="radio" name="option-0" value="X??m"><label for="swatch-0-xam">X??m</label>
                    </div>
                </div>
                <div class="form_product_content">
                    <div class="count_btn_style quantity_wanted_p">
                        <div class=" soluong1 clearfix">
                        <span class="soluong_h">S??? l?????ng:</span>									
                        <div class="sssssscustom input_number_product">
                            <a class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">-</a>
                            <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                            <a class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
                        </div>
                        </div>
                        <div class="button_actions clearfix">
                        <button type="submit" class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail"><span class="btn-content text_1">Th??m v??o gi??? h??ng</span></button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="27357045">
            </form>
            </div>
        </div>
    </div>
    <a title="Close" class="quickview-close close-window" href="javascript:;">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
            <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
        </svg>
    </a>
</div>
<div id="quickview-modal" style="display:none;">
    <div class="block-quickview primary_block details-product">
        <div class="row">
            <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
            <div class="image-block large-image col_large_default">
                <span class="view_full_size">
                <a class="img-product" title="" href="javascript:;">
                <img src="//bizweb.dktcdn.net/100/449/923/themes/875305/assets/logo.png')}}" id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" alt="quickview">
                </a>
                </span>
                <div class="loading-imgquickview" style="display:none;"></div>
            </div>
            <div class="more-view-wrapper clearfix">
                <div class="thumbs_quickview owl_nav_custome1 swiper-container thumbs_list_quickview swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" id="thumbs_list_quickview">
                    <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper" id="thumblist_quickview" style="transition-duration: 0ms;"></ul>
                    <div class="swiper-button-prev">
                    </div>
                    <div class="swiper-button-next">
                    </div>
                </div>
            </div>
            </div>
            <div class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
            <div class="head-qv group-status">
                <h3 class="qwp-name title-product">abc</h3>
                <div class="vend-qv group-status">
                    <div class="left_vend">
                        <div class="first_status ">Th????ng hi???u:
                        <span class="vendor_ status_name"></span>
                        </div>
                        <span class="line_tt">|</span>
                        <div class="top_sku first_status">M?? s???n ph???m:
                        <span class="sku_ status_name"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quickview-info">
                <span class="prices price-box">
                <span class="price product-price"></span>
                <del class="old-price"></del>
                </span>
            </div>
            <div class="product-description product-summary">
                <div class="rte">
                </div>
            </div>
            <form action="/cart/add" method="post" enctype="multipart/form-data" class="quick_option variants form-ajaxtocart form-product">
                <span class="price-product-detail d-none" style="opacity: 0;">
                <span class=""></span>
                </span>
                <select name="variantId" class="d-none" style="display:none"></select>
                <div class="form_product_content">
                    <div class="count_btn_style quantity_wanted_p">
                        <div class=" soluong1 clearfix">
                        <span class="soluong_h">S??? l?????ng:</span>									
                        <div class="sssssscustom input_number_product">
                            <a class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv > 1 ) result.value--;return false;">-</a>
                            <input type="text" id="quantity-detail" name="quantity" value="1" maxlength="2" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                            <a class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
                        </div>
                        </div>
                        <div class="button_actions clearfix">
                        <button type="submit" class="btn_cool btn btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail">
                        <span class="btn-content text_1">Th??m v??o gi??? h??ng</span>
                        </button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <a title="Close" class="quickview-close close-window" href="javascript:;">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
            <path fill="currentColor" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z" class=""></path>
        </svg>
    </a>
</div>
<link rel="preload" as="script"
    href="{{asset('frontend/js/quickview.js')}}" />
<script src="{{asset('frontend/js/quickview.js')}}" type="text/javascript">
</script>
    <script>
var swiper = new Swiper('#thumbs_list_quickview', {
        slidesPerView: 4,
        spaceBetween: 15,
        slidesPerGroup: 2,
        pagination: {
            el: '#thumbs_list_quickview .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '#thumbs_list_quickview .swiper-button-next',
            prevEl: '#thumbs_list_quickview .swiper-button-prev',
        },
        breakpoints: {
            300: {
                slidesPerView: 'auto',
                spaceBetween: 15
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 15
            }
        }
    });
</script>