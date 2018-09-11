@extends('layouts.admin')
@section('title_layouts','Danh sách đơn hàng')
@section('content_layouts')

<div class="panel panel-default">
	<div class="panel-body">

	@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<p>{!! Session::get('success') !!}</p>
		</div>
	@endif
		@if(Session::has('error'))
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<p>{!! Session::get('error') !!}</p>
		</div>
	@endif	
		
		<div class="panel-body">
			<a href="{{ route('donhang')}}" class="btn btn-sm btn-info">Back</a>
		</div>
		<!-- <div class="panel-body">
			<form action=""  class="form-inline" role="form">
				<div class="form-group">
					
					<a href="{{ route('add-hoso')}}" class="btn btn-sm btn-primary">Thêm mới</a>
					<input class="form-control" name="search" placeholder="Tên thành viên..." style="width:140px; height: 31px" >
				</div>
				<button type="submit" class="btn btn-sm btn-info">Lọc</button>
			</form>

		</div> -->
		
		<table class="table  table-striped table-hover">
	
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
               @foreach($donhang_detail->Detail as $k =>$d)  
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
	
			
	</div>
</div>
@stop()