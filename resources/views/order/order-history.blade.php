@extends('layouts.home')
@section('title','Lịch sử mua hàng')
@section('main')

   <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <h1 style="text-align: center;padding-bottom: 50px;">Lịch sử mua hàng</h1>
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Total</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Detail</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               @foreach($orders as $k =>$order)  
                  <tr>
                    <td>
                      {{$k+1}}
                    </td>
                   <td>
                        {{number_format($order->total_amount())}} vnđ
                    </td>
                   
                     <td> {{date('h:m  d/m/Y',strtotime($order->created_at))}}</td>
                    
                     <td>
                     @if($order->status==1)
                          <span class=" label label-danger"> Pending</span>
                      @else
                          <span class=" label label-success"> Approval</span>
                      @endif
                    </td>
                    <td>
                     <a class=" label label-success" href="{{route('order_detail',['id'=>$order->id])}}">Show</a>                 
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
     
    </main>
@stop()
