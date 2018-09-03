@extends('layouts.admin')
@section('title_layouts','Cập nhật blog')
@section('content_layouts')
	
	<div class="panel panel-default">

		<div class="panel-body">
			<a href="{{ route('blog')}}" class="btn btn-sm btn-info">Back</a>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
	
		<div class="form-group">
			<label for="">Ảnh blog</label>
			<input type="file" class="form-control" name="upload_file" value="{{ $blog->upload_file}}" placeholder="Ảnh blog">
		</div>
		@if($errors->has('upload_file'))
		<div class="helper-box">
			<p>{{ $errors->first('upload_file') }}</p>
		</div>
		@endif
		
		<div class="form-group">
			<label for="">Tên blog</label>
			<input type="text" class="form-control" name="name"  value="{{ $blog->name}}" placeholder="Đường dẫn ">
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Tác giả</label>
			<input type="text" class="form-control" name="author"  value="{{ $blog->author}}" placeholder="Đường dẫn ">
		</div>
		@if($errors->has('author'))
		<div class="helper-box">
			<p>{{ $errors->first('author') }}</p>
		</div>
		@endif

		
		<div class="form-group">
			<label for="">Nội dung 1</label>
		
			<textarea name="content" id="desc" class="form-control" rows="3" required="required" >
			 {!! $blog->content!!}
			</textarea>	
		</div>
		
		@if($errors->has('content'))
		<div class="helper-box">
			<p>{{ $errors->first('content') }}</p>
		</div>
		@endif

		<div class="form-group">
			<label for="">Nội dung 2</label>
		
			<textarea name="description" id="desc" class="form-control" rows="3" required="required" >
			 {!! $blog->description!!}
			</textarea>	
		</div>
		
		@if($errors->has('description'))
		<div class="helper-box">
			<p>{{ $errors->first('description') }}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Trạng thái</label>
			<input type="text" class="form-control" name="status"  value="{{ $blog->status}}" placeholder="Đường dẫn ">
		</div>
		@if($errors->has('status'))
		<div class="helper-box">
			<p>{{ $errors->first('status') }}</p>
		</div>
		@endif
		
		{{ csrf_field() }}
		<button type="submit" class="btn btn-info">Cập nhật</button>
	</form>
	</div>
</div>
@stop()
