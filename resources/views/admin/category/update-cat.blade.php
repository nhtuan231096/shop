@extends('layouts.admin')
@section('title_layouts','Cập nhật danh mục')
@section('content_layouts')
	
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="" method="POST" role="form">

		<div class="form-group">
			<label for="">Tên danh mục</label>
			<input type="text" class="form-control" name="name" id="name"  value="{{$danh_muc->name}}">
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name') }}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Đường dẫn tĩnh</label>
			<input type="text" class="form-control" name="slug" id="slug" value="{{$danh_muc->slug}}"  >
		</div>
		@if($errors->has('slug'))
		<div class="helper-box">
			<p>{{ $errors->first('slug') }}</p>
		</div>
		@endif
		
	
		<div class="form-group">
			<label for="">Parent  </label>
			<select name="parent"  class="form-control">
				<option value="0">root</option>
				@foreach($cats as $cat_here)
				<?php $selected=($danh_muc->parent == $cat_here->id ) ? 'selected' : '' ?>
					<option value="{{ $cat_here->id }}" {{$selected}}>{{ $cat_here->name }}</option>
				@endforeach
			</select>
		</div>
			<div class="form-group">
			<label for="">Trạng thái</label>
			<input type="text" class="form-control" name="status" value="{{$danh_muc->status}}"" placeholder="Trạng thái">
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