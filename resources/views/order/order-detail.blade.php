@extends('layouts.home')
@section('title','Chi tiết lịch sử đặt hàng')
@section('main')

   <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <h1 style="text-align: center;padding-bottom: 50px;">Chi tiết lịch sử mua hàng</h1>

              <thead>
                <tr>
                  <th>Stt</th>
                  <th>Product</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               @foreach($order_detail->Detail as $k =>$d)  
                  <tr>
                    <td>
                      {{$k+1}}
                    </td>
                    <td>
                     {{$d->pro->name}}
                    </td>
                    <td> 
                     <img src=" {{ url('uploads')}}/{{$d->pro->image}}" alt="" width="80px">
                    </td>

                    <td>
                       {{number_format($d->price)}} vnđ 
                    </td>
                    <td>
                     {{$d->quantity}}      
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
<!-- 
             <div class="ps-cart__actions">
               <div class="ps-cart__promotion">
                
              </div>
               <div class="ps-cart__total">
                
                <div class="form-group">
                  
                  <a href="{{route('order')}}" class="btn btn-sm btn-success">Home</a>
                </div>
              </div>
              
            </div> -->
          
          </div>
        </div>
      </div>
     
    </main>
@stop()
