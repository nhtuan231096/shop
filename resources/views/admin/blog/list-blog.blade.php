@extends('layouts.admin')
@section('title_layouts','Blogs')
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
					
			<a href="{{ route('add-blog')}}" class="btn btn-sm btn-primary">Thêm mới</a>
					<input class="form-control" name="search" placeholder="Tên danh mục..." style="width:140px; height: 31px" >
				</div>
				<button type="submit" class="btn btn-sm btn-info">Lọc</button>
			</form>

		</div>
		
			<table class="table  table-striped table-hover">
		<thead>
			<tr>
				<th>Stt</th>
				<th>Image</th>
				<th>Name</th>
				<th>Author</th>
				<th>Description</th>
				<th>Status</th>
				<th>Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		@foreach($blog as $key => $b)	
			<tr>
				<td>{{ $key+1 }}</td>
				<td>
					<img src="{{url('uploads')}}/{{$b->image}}" width="100px" alt="">
				</td>
				<td>{{ $b->name }}</td>
				<td>{{ $b->author }}</td>
				<td>{{ $b->content }}</td>
				
				<td>
                    @if($b->status == 1)
                        <span class="label label-primary">In Public</span>
                    @else
                        <span class="label label-danger">Pending</span>
                    @endif
                </td>
				<td>{{ date('d/m/y',strtotime($b->created_at ))}}</td>
				<td>
					<a href="{{ route('update-blog',['id'=>$b->id])}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
					<a href="{{ route('delete-blog',['id'=>$b->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn chứ?')"> <i class="fa fa-trash"></i></a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	</div>
</div>
@stop()