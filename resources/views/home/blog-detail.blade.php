@extends('layouts.home')
@section('title','Blog Details')
@section('main')
	  <main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <div class="ps-post--detail">
                    <div class="ps-post__thumbnail"><img src="{{url('uploads')}}/{{$blog->image}}" alt=""></div>
                    <div class="ps-post__header">
                      <h3 class="ps-post__title">{{$blog->name}}</h3>
                      <p class="ps-post__meta">Posted by <a href="">{{$blog->author}}</a> on {{ date('d/m/Y',strtotime($blog->created_at ))}} in <a href="">Shoes</a> , <a href="">Stylish</a></p>
                    </div>
                    <div class="ps-post__content">
                      <p>{!!$blog->description!!}</p>
                      <blockquote>
                        <p>It seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. And there is no question, investing in a good telescope can really enhance your enjoyment of your new passion in astronomy.</p>
                        <p class="author">Rodney <br> <span>Cannon</span></p>
                      </blockquote>
                      <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space   telescope known as the Hubble. While NASA has had many ups and downs, the launch and continued operation of the Hubble space telescope probably ranks next to the moon landings ace exploration accomplishments of the last hundred years.</p>
                    </div>
                    <div class="ps-post__footer">
                      <p class="ps-post__tags"><i class="fa fa-tags"></i><a href="blog-list.html">Man shoe</a>,<a href="blog-list.html"> Woman</a>,<a href="blog-list.html"> Nike</a></p>
                      <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Comments</span><span><i class="fa fa-heart"></i>  likes</span>
                        <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Share</a>
                          <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ps-comments">
                    <h3>Comment(4)</h3>
                    @foreach($blog->comment as $cmt)
                    <div class="ps-comment">
                      <div class="ps-comment__thumbnail"><img src="{{url('uploads/user')}}/{{$cmt->user->image}}" alt="Ảnh đại diện"></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>{{$cmt->user->name}} <span>({{$cmt->created_at}})</span></h4><a href="#">Reply<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>{{$cmt->comment}}</p>
                      </div>
                    </div>
                    @endforeach
                    <!-- <div class="ps-comment ps-comment--reply">
                      <div class="ps-comment__thumbnail"><img src="{{url('public')}}/home/images/user/3.jpg" alt=""></div>
                      <div class="ps-comment__content">
                        <header>
                          <h4>MARK GREY <span>(3 hours ago)</span></h4><a href="#">Reply<i class="ps-icon-arrow-left"></i></a>
                        </header>
                        <p>The development of the mass spectrometer allowed the mass of atoms to be measured with increased accuracy. The device uses  continue ace explore.</p>
                      </div>
                    </div> -->
                  </div>
                  @if(Auth::check())
                  <form class="ps-form--comment" action="{{route('post_comment')}}" method="post">
                    <h3>LEAVE A COMMENT</h3>
                    <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-group">
                              <textarea class="form-control" rows="6" name="comment" placeholder="Text your message here..."></textarea>
                              @if($errors->has('comment'))
                              <div class="help-block">{{$errors->first('comment')}}</div>
                              @endif
                            </div>
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                          </div>
                    </div>
                    @csrf
                    <div class="form-group">
                      <button class="ps-btn ps-btn--sm ps-contact__submit">Send<i class="ps-icon-next"></i></button>
                    </div>
                  </form>
                  @else
                  <div class="jumbotron">
                    <div class="container text-center">
                      <h2><i><a href="{{route('dangnhap')}}">Đăng nhập</a> để có thể bình luận</i></h2>
                    </div>
                  </div>
                  @endif
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
                      <h3>Archive</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-list--arrow">
                        <li class="current"><a href="product-listing.html">Shoe(321)</a></li>
                        <li><a href="product-listing.html">Amazin’ Glazin’</a></li>
                        <li><a href="product-listing.html">The Crusty Croissant</a></li>
                        <li><a href="product-listing.html">The Rolling Pin</a></li>
                        <li><a href="product-listing.html">Skippity Scones</a></li>
                        <li><a href="product-listing.html">Mad Batter</a></li>
                        <li><a href="product-listing.html">Confection Connection</a></li>
                      </ul>
                    </div>
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
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="http://nouthemes.com/html/trueshoes/do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
     
    </main>
@stop()
