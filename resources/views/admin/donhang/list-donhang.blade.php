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
				<th>Mã đơn hàng</th>
				<th>Mã khách hàng</th>
				<th>Tên khách hàng</th>
				<th>Ngày đặt</th>	
				<th>Trạng thái</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>

	<!-- 	@foreach($orders->Detail2 as $key =>$dh)	
		
				<tr>
				<td>{{ $key++ }}</td>
				<td>12321</td>
				<td>323</td>
				<td>{{ $dh->name }}</td>
				<td>{{ date('h:m d/m/Y',strtotime($dh->created_at)) }}</td>
			

				<td>
                     @if($dh->status==1)
                          <span class="label  label-success">Đã xử lý</span>
                      @else
                          <span class=" label label-primary">Chờ xử lý</span>
                      @endif
                    </td> -->
				
				<td>
					<a href="{{ route('update-donhang',['id'=>$dh->id])}}" class="label label-md label-info">Xem</a>
					<a href="{{ route('delete-donhang',['id'=>$dh->id])}}" class="label label-md label-danger" onclick="return confirm('Bạn chắc chắn chứ?')">Hủy</a>
				</td>
			</tr>	
		
		@endforeach
		</tbody>
	</table>
	
			{{ $don_hang->links() }}
	</div>
</div>
@stop()