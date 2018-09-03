@extends('layouts.home')
@section('title','Blog')
@section('main')
	 <main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                @foreach($blog as $bg)
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{route('blog-detail',['id'=>$bg->id])}}"></a>
                    <img src="{{url('uploads')}}/{{$bg->image}}" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="{{route('blog-detail',['id'=>$bg->id])}}">{{$bg->name}}</a>
                        <p>Posted by <a href="{{route('blog-detail')}}">{{$bg->author}}</a> on {{ date('d/m/Y',strtotime($bg->created_at ))}} in <a href="{{route('blog-detail')}}"> Shoes</a> , <a href="{{route('blog-detail')}}">Stylish</a></p>
                      </header>
                      <div class="ps-post__content">
                        <p> {!! $bg->content!!}</p>
                      </div>
                      <footer class="ps-post__footer"><a class="ps-post__morelink" href="{{route('blog-detail',['id'=>$bg->id])}}">READ MORE<i class="ps-icon-arrow-left"></i></a>
                        <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Comments</span><span><i class="fa fa-heart"></i>  likes</span>
                          <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Share</a>
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </footer>
                    </div>
                  </div>
                  @endforeach
                  <div class="mt-30">
                    <div class="ps-pagination">
                      <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--sidebar ps-widget--search">
                    <form class="ps-search--widget" action="http://nouthemes.com/html/trueshoes/do_action" method="post">
                      <input class="form-control" type="text" placeholder="Search posts...">
                      <button><i class="ps-icon-search"></i></button>
                    </form>
                  </aside>
                  
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Ads Banner</h3>
                    </div>
                    <div class="ps-widget__content"><a href="product-listing-2.html"><img src="{{url('public')}}/home/images/offer/sidebar.jpg" alt=""></a></div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Recent Posts</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="{{url('public')}}/home/images/blog/sidebar/1.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Micenas Placerat Nibh Loreming Fentum</a><span>SEP 29, 2017</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="{{url('public')}}/home/images/blog/sidebar/2.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Micenas Placerat Nibh Loreming Fentum</a><span>SEP 29, 2017</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="{{url('public')}}/home/images/blog/sidebar/3.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Micenas Placerat Nibh Loreming Fentum</a><span>SEP 29, 2017</span></div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Best Seller</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="{{url('public')}}/home/images/shoe/sidebar/1.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Men's Shoe</a>
                          <p><del> £253.00</del> £152.00</p><a class="ps-btn" href="#">PURCHASE</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="{{url('public')}}/home/images/shoe/sidebar/2.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Nike Flight Bonafide</a>
                          <p><del> £253.00</del> £152.00</p><a class="ps-btn" href="#">PURCHASE</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="{{url('public')}}/home/images/shoe/sidebar/3.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Nike Sock Dart QS</a>
                          <p><del> £253.00</del> £152.00</p><a class="ps-btn" href="#">PURCHASE</a>
                        </div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Tags</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-tags">
                        <li><a href="product-listing.html">Men</a></li>
                        <li><a href="product-listing.html">Female</a></li>
                        <li><a href="product-listing.html">B&G</a></li>
                        <li><a href="product-listing.html">ugly fashion</a></li>
                        <li><a href="product-listing.html">Nike</a></li>
                        <li><a href="product-listing.html">Dior</a></li>
                        <li><a href="product-listing.html">Adidas</a></li>
                        <li><a href="product-listing.html">Diour</a></li>
                      </ul>
                    </div>
                  </aside>
                </div>
          </div>
        </div>
      </div>
      
    </main>
     

@stop()
