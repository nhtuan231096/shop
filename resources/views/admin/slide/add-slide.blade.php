@extends('layouts.admin')
@section('title_layouts','Thêm slide')
@section('content_layouts')
	
	<div class="panel panel-default">
		
		<div class="panel-body">
			<a href="{{ route('slide')}}" class="btn btn-sm btn-info">Back</a>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
	
		<div class="form-group">
			<label for="">Tên slide</label>
			<input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Tên slide ">
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Ảnh slide</label>
			<input type="file" class="form-control" name="upload_file" value="{{ old('upload_file')}}"  placeholder="Ảnh slide">
		</div>
		@if($errors->has('upload_file'))
		<div class="helper-box">
			<p>{{ $errors->first('upload_file') }}</p>
		</div>
		@endif
		
		<div class="form-group">
			<label for="">Đường dẫn liên kết</label>
			<input type="text" class="form-control" name="links" value="{{ old('links')}}" placeholder="Đường dẫn liên kết ">
		</div>
		@if($errors->has('links'))
		<div class="helper-box">
			<p>{{ $errors->first('links') }}</p>
		</div>
		@endif	

		<div class="form-group">
			<label for="">Sắp xếp</label>
			<input type="text" class="form-control" name="ordering" value="{{ old('ordering')}}" placeholder="Sắp xếp ">
		</div>
		@if($errors->has('ordering'))
		<div class="helper-box">
			<p>{{ $errors->first('ordering') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Note 1</label>
			<input type="text" class="form-control" name="caption_1" value="{{ old('caption_1')}}" placeholder="Note 1 ">
		</div>
		@if($errors->has('caption_1'))
		<div class="helper-box">
			<p>{{ $errors->first('caption_1') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Note 2</label>
			<input type="text" class="form-control" name="caption_2" value="{{ old('caption_2')}}" placeholder="Note 2">
		</div>
		@if($errors->has('caption_2'))
		<div class="helper-box">
			<p>{{ $errors->first('caption_2') }}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Trạng thái</label>
			<input type="text" class="form-control" name="status" value="{{ old('status')}}" placeholder="Trạng thái">
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