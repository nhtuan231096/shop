@extends('layouts.home')
@section('title','The Cart')
@section('main')

   <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               @foreach($cart->items as $item)  
                  <tr>
                    <td><a class="ps-product__preview" href="product-detail.html">
                      <img class="mr-15" src="{{url('uploads')}}/{{$item['image']}}" alt="" width="100">{{$item['name']}}</a></td>
                    <td>{{number_format($item['price'])}} vnđ</td>
                    <td>
                      <div class="form-group--number">
                        <form action="{{route('update-cart',['id'=>$item['id']])}}">
                        <div class="form-group">
                          <input  class="form-control" name="qty" value="{{$item['quantity']}}" 
                           style="width: 66px;height: 25px; text-align: center;"><br/>
                          <input  type="submit" value="update">

                        </div>
                      </form>
                      </div>
                    </td>
                    <td>{{number_format($item['price']*$item['quantity'])}} vnđ</td>
                    <td>
                     
                      <a  class="ps-remove" href="{{route('delete-cart',['id'=>$item['id']])}}"></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="ps-cart__actions">
               <div class="ps-cart__promotion">
                <h3>Total Price: <span>{{number_format($cart->total_amount)}} vnđ</span></h3>
              </div>
               <div class="ps-cart__total">
                
                <div class="form-group">
                  <a href="{{route('home')}}" class="btn btn-sm btn-info" >Shopping</a>
                  <a href="{{route('clear-cart')}}" class="btn btn-sm btn-danger">Delete all</a>
                 @if($cart->total_quantity>0)
                    <a href="{{route('order')}}" class="btn btn-sm btn-success">Checkout</a>
                  @else
                     <span class="btn btn-sm btn-success">Checkout</span>
                  @endif
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
     
    </main>
@stop()
