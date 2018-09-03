@extends('layouts.home')
@section('title','Đặt hàng thành công')
@section('main')

   <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">

                <div class="jumbotron">
                  <div class="container" style="text-align: center;padding-bottom: 20px;">
                 <h1 >404 error!</h1>
                  <h3>Sorry! Page you are looking can't be found.</h3>
                    <p style="margin-top: 40px;">
                      <a  href="{{route('home')}}" class="btn btn-info btn-md">Home</a>
                    </p>
                  </div>
                </div>
            </table> 

          </div>
        </div>
      </div>
     
    </main>
@stop()
