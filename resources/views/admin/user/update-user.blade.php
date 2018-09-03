@extends('layouts.admin')
@section('title_layouts','Cập nhật tài khoản')
@section('content_layouts')
<div class="panel panel-default">
		<div class="panel-body">
			<form action="" method="POST" role="form">

		<div class="form-group">
			<label for="">Họ và tên</label>
			<input type="text" class="form-control" name="name"  value="{{ $tai_khoan->name }}" >
		</div>
		@if($errors->has('name'))
		<div class="helper-box">
			<p>{{ $errors->first('name') }}</p>
		</div>
		@endif
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" name="email"   value="{{ $tai_khoan->email }}">
		</div>
		@if($errors->has('email'))
		<div class="helper-box">
			<p>{{ $errors->first('email') }}</p>
		</div>
		@endif
		
		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input type="password" class="form-control" name="password"   value="{{ $tai_khoan->password }}">
		</div>
		@if($errors->has('password'))
		<div class="helper-box">
			<p>{{ $errors->first('password') }}</p>
		</div>
		@endif	
		<div class="form-group">
			<label for="">Nhập lại Mật khẩu</label>
			<input type="password" class="form-control" name="comfirm_password"  value="{{ $tai_khoan->password }}">
		</div>
		@if($errors->has('comfirm_password'))
		<div class="helper-box">
			<p>{{ $errors->first('comfirm_password') }}</p>
		</div>
		@endif
		
		{{ csrf_field() }}
		<button type="submit" class="btn btn-info">Cập nhật</button>
	</form>
	
		</div>
	</div>
@stop()