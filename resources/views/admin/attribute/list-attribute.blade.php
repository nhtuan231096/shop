@extends('layouts.admin')
@section('title_layouts','Danh sách thuộc tính')
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
			<form action=""  class="form-inline" role="form">
				<div class="form-group">
					
			<a href="{{ route('add-attribute')}}" class="btn btn-sm btn-primary">Thêm mới</a>
					<input class="form-control" name="search" placeholder="Tên danh mục..." style="width:140px; height: 31px" >
				</div>
				<button type="submit" class="btn btn-sm btn-info">Lọc</button>
			</form>

		</div>
		
			<table class="table  table-striped table-hover">
		<thead>
			<tr>
				<th>Stt</th>
				<th>Tên</th>
				<th>Giá trị</th>
				<th>Loại</th>
				<th>Date</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
		@foreach($attributes as $key => $att)	
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $att->name }}</td>

				<td>
				@if($att->type=='color')	
				 	<span
				 	 style="
				 		background:{{ $att->value }};
						display: inline-block;
						width:18px;
						height:18px;
						border-radius:10px;
				 		">

				 		</span>
				@else
					{{ $att->value }}
				@endif
					
				</td>
				<td>{{ $att->type }}</td>
				<td>{{ date('d/m/y',strtotime($att->created_at ))}}</td>
				<td>
					<a href="{{ route('update-attribute',['id'=>$att->id])}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
					<a href="{{ route('delete-attribute',['id'=>$att->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn chứ?')"> <i class="fa fa-trash"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{{ $attributes->links()}}
	</div>
</div>
@stop()