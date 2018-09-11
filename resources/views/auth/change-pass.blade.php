@extends('layouts.home')
@section('title','Change password')
@section('main')

<main class="ps-main">
  <div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-cart-listing">
        <table class="table ps-cart__table">
        </table>            
         
         <h1 style="text-align: center;">Thay đổi mật khẩu</h1>
         <br/>
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
                  <div class="col-md-4 col-md-offset-4"> 
                    <form action="" method="POST" role="form">
                      <div class="form-group">
                        <label for="">Mật khẩu cũ</label>
                        <input type="password" class="form-control" name="old_password" placeholder="Mật khẩu cũ"
                        
                        >
                      </div>
                       @if($errors->has('old_password'))
                        <div class="help-block">
                            {{ $errors->first('old_password')}}
                        </div>
                    @endif
                  </div> 
                  <div class="col-md-4 col-md-offset-4"> 
                    <form action="" method="POST" role="form">
                      <div class="form-group">
                        <label for="">Mật khẩu mới</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới"
                        
                        >
                      </div>
                       @if($errors->has('password'))
                        <div class="help-block">
                            {{ $errors->first('password')}}
                        </div>
                    @endif
                  </div> 
                  <div class="col-md-4 col-md-offset-4"> 
                    <form action="" method="POST" role="form">
                      <div class="form-group">
                        <label for="">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" name="comfirm_password" placeholder="Nhập lại mật khẩu mới"
                        
                        >
                      </div>
                       @if($errors->has('comfirm_password'))
                        <div class="help-block">
                            {{ $errors->first('comfirm_password')}}
                        </div>
                    @endif
                  </div>
                  {{ csrf_field()}}
                  <button type="submit" class="ps-btn ps-btn--fullwidth" style="width: 160px; height: 50px; margin-left: 43%;">Cập nhật</button>
                    
                </form>                                   
          </div>
        </div>
      </div>
     
    </main>
    	
@stop()
