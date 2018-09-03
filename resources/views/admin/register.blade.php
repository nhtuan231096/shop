@extends('layouts.index')
@section('title', 'Đăng ký tài khoản')
@section('main')
			<div class="col-md-6 col-md-offset-3">
				<form action="" method="POST" role="form">
					<label for="">Đăng ký Tài khoản</label>
					<div class="form-group">
						<label for="">họ và tên</label>
						<input type="text" class="form-control" name="name" placeholder="name">
					</div>

					@if($errors->has('name'))
						<div class="help-block">
							{{ $errors->first('name')}}
						</div>
					@endif
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>

					@if($errors->has('email'))
						<div class="help-block">
							{{ $errors->first('email')}}
						</div>
					@endif
					<div class="form-group">
						<label for="">Mật khẩu</label>
						<input type="password" class="form-control" name="password" placeholder="Mật khẩu">
					</div>
					@if($errors->has('password'))
						<div class="help-block">
							{{ $errors->first('password')}}
						</div>
					@endif
					<div class="form-group">
						<label for="">Nhập lại Mật khẩu</label>
						<input type="password" class="form-control" name="comfirm_password" placeholder="Mật khẩu">
					</div>
					@if($errors->has('comfirm_password'))
						<div class="help-block">
							{{ $errors->first('comfirm_password')}}
						</div>
					@endif
					
					{{ csrf_field() }}
					<button type="submit" class="btn btn-primary">Đăng ký</button>
				</form>
			</div>
@stop()