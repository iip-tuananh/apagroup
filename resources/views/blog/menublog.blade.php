<div class="post-sidebar large-3 col">
   <div id="secondary" class="widget-area " role="complementary">
      <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
         <span class="widget-title "><span>Danh mục sản phẩm</span></span>
         <div class="is-divider small"></div>
         <ul class="product-categories">
            @foreach ($categoryProduct as $cate)
            <li class="cat-item cat-item-111"><a href="{{route('allListProCate',['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
            @endforeach
         </ul>
      </aside>
      <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">
         <span class="widget-title "><span>Bài viết mới</span></span>
         <div class="is-divider small"></div>
         <ul>
            @foreach ($hotBlogs as $blog)
            <li class="recent-blog-posts-li">
               <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                  <div class="flex-col mr-half">
                     <div class="badge post-date  badge-outline">
                        <div class="badge-inner bg-fill" style="background: url({{$blog->image}}); border:0;">
                        </div>
                     </div>
                  </div>
                  <div class="flex-col flex-grow limit-text-3">
                     <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                     <span class="post_comments op-7 block is-xsmall"><a href="{{route('detailBlog',['slug'=>$blog->slug])}}#respond"></a></span>
                  </div>
               </div>
            </li>
            @endforeach
         </ul>
      </aside>
   </div>
</div>