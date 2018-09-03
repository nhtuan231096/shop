@extends('layouts.home')
@section('title','Search Products')
@section('main')

  <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="Search">- Search Products</h3>
            <ul class="ps-masonry__filter">
              <h3>Tìm thấy {{count($product)}} sản phẩm!</h3>
            </ul>
          </div>

          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">

              <div class="ps-masonry">
                <div class="grid-sizer"></div>
   
              @foreach($product as $p)
                <div class="grid-item men">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">

                       @if($p->sale_price>0) 
                          <div class="ps-badge ps-badge--sale"><span>Sale</span></div>
                       @else($p->type=='new')
                         <div class="ps-badge"><span>New</span></div>           
                       @endif
                        
                       @if($p->sale_price>0 && $p->type=='new')
                         <div class="ps-badge"><span>New</span></div>           
                            <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>Sale</span></div>
                       @endif
                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                        <img src="{{url('uploads')}}/{{$p->image}}" alt="">
                        <a class="ps-shoe__overlay" href="{{route('view',['slug'=>$p->slug])}}"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal">
                            @foreach($p->images as $pp)
                              <img src="{{url('uploads')}}/{{$pp->links}}" alt="">
                            @endforeach
                           
                          </div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{route('view',['slug'=>$p->slug])}}">{{$p->name}}</a>
                          <p class="ps-shoe__categories"><a href="#"> Shoes</a> - <a href="#">{{$p->Cat->name}}</p><span class="ps-shoe__price">
                            
                             @if($p->sale_price>0)
                              <span>
                                {{ number_format($p->sale_price) }} vnđ <br/>
                                <del>{{number_format($p->price) }} vnđ</del> 
                              </span>   
                            @else
                              <span>
                                {{number_format($p->price)}} vnđ
                              </span> 
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               @endforeach 
         
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- logos -->
      <div class="ps-home-partner">
        <div class="ps-container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="40" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="4" data-owl-item-md="5" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on"><a href="#">
            <img src="{{url('public')}}/home/images/partner/p1.jpg" alt=""></a><a href="#">
              <img src="{{url('public')}}/home/images/partner/p2.jpg" alt=""></a><a href="#">
                <img src="{{url('public')}}/home/images/partner/p3.jpg" alt=""></a><a href="#">
                  <img src="{{url('public')}}/home/images/partner/p4.jpg" alt=""></a><a href="#">
                    <img src="{{url('public')}}/home/images/partner/p5.jpg" alt=""></a><a href="#">
                      <img src="{{url('public')}}/home/images/partner/p6.jpg" alt=""></a><a href="#">
                        <img src="{{url('public')}}/home/images/partner/p7.png" alt=""></a><a href="#">
                          <img src="{{url('public')}}/home/images/partner/p8.png" alt=""></a>
          </div>
        </div>
      </div>

      
@stop()
