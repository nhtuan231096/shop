@extends('layouts.admin')
@section('title_layouts','Cập nhật thuộc tính')
@section('content_layouts')
	
	<div class="panel panel-default">
		
		<div class="panel-body">
			<a href="{{ route('attribute')}}" class="btn btn-sm btn-info">Back</a>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
	
		<div class="form-group">
			<label for="">Tên thuộc tính</label>
			<input type="text" class="form-control" name="name" value="{{$thuoc_tinh->name}}" placeholder="Tên thuộc tính">
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Giá trị</label>
			<input type="text" class="form-control" name="value" value="{{$thuoc_tinh->value}}" placeholder=" Giá trị ">
		</div>
		@if($errors->has('value'))
		<div class="helper-box">
			<p>{{ $errors->first('value') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Loại sản phẩm</label>
			
			<div class="radio">
				
				<label>
					<input type="radio"   name="type"  value="size">
					Size
				</label>
				<br/>	
				<label>
					<input type="radio"   name="type"  value="color">
					Color
				</label>
				<br/>
				<label>
					<input type="radio"   name="type"  value="material">
					Material
				</label>
			</div>
			
		</div>
		@if($errors->has('type'))
		<div class="helper-box">
			<p>{{ $errors->first('type')}}</p>
		</div>
		@endif
		{{ csrf_field() }}
		<button type="submit" class="btn btn-success">Cập nhật</button>
	</form>
	</div>
</div>
@stop()