@extends('layouts.admin')
@section('title_layouts','Thêm tài khoản')
@section('content_layouts')
	
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="" method="POST" role="form">

		<div class="form-group">
			<label for="">Họ và tên</label>
			<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Họ và tên">
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name') }}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Địa chỉ email">
		</div>
		@if($errors->has('email'))
		<div class="helper-box">
			<p>{{ $errors->first('email') }}</p>
		</div>
		@endif
		
		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input type="password" class="form-control" name="password" value="{{ old('password') }}"  placeholder="Mật khẩu">
		</div>
		@if($errors->has('password'))
		<div class="helper-box">
			<p>{{ $errors->first('password') }}</p>
		</div>
		@endif	
		<div class="form-group">
			<label for="">Nhập lại Mật khẩu</label>
			<input type="password" class="form-control" name="comfirm_password" value="{{ old('comfirm_password') }}"  placeholder="Nhập lại Mật khẩu">
		</div>
		@if($errors->has('comfirm_password'))
		<div class="helper-box">
			<p>{{ $errors->first('comfirm_password') }}</p>
		</div>
		@endif
		
		{{ csrf_field() }}
		<button type="submit" class="btn btn-success">Thêm</button>
	</form>
	
		</div>
	</div>
@stop()