@extends('layouts.admin')
@section('title_layouts','Thêm danh mục sản phẩm')
@section('content_layouts')
	<div class="panel panel-default">
	

		<div class="panel-body">
			<a href="{{ route('category')}}" class="btn btn-sm btn-info">Back</a>
		</div>
		<div class="panel-body">	
			<form action="" method="POST" role="form">
		<div class="form-group">
			<label for="">Tên danh mục</label>
			<input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}" placeholder="Tên danh mục">
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name')}}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Đường dẫn tĩnh</label>
			<input type="text" class="form-control" name="slug"  id="slug" value="{{ old('slug')}}" placeholder="Đường dẫn tĩnh">
		</div>
		@if($errors->has('slug'))
		<div class="helper-box">
			<p>{{ $errors->first('slug') }}</p>
		</div>
		@endif
	
		<div class="form-group">
			<label for="">Parent</label>
			<select name="parent"  class="form-control">
				<option value="0">root</option>
				@foreach($cats as $cat)
					<option value="{{ $cat->id }}">{{ $cat->name }}</option>
				@endforeach
			</select>
		</div>	
		<div class="form-group">
			<label for="">Trạng thái</label>
			<input type="text" class="form-control" name="status"  value="{{ old('status')}}" placeholder="Trạng thái">
		</div>
		@if($errors->has('status'))
		<div class="helper-box">
			<p>{{ $errors->first('status') }}</p>
		</div>
		@endif

		{{ csrf_field() }}
		<button type="submit" class="btn btn-success">Thêm</button>
	</form>
	</div>
</div>
@stop()