@extends('layouts.home')
@section('title','Profile')
@section('main')

<main class="ps-main">
  <div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-cart-listing">
        <table class="table ps-cart__table">
        </table>            
         
         <h1 style="text-align: center;">Thông tin tài khoản</h1>
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
                    <form action="" method="POST" role="form">

                     <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Full name"
                        value="{{Auth::user()->name}}" 
                        >
                      </div>
                       @if($errors->has('name'))
                        <div class="help-block">
                            {{ $errors->first('name')}}
                        </div>
                    @endif
                      <div class="form-group" >
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Address email"
                        value="{{Auth::user()->email}}" 
                        >
                      </div>
                      @if($errors->has('email'))
                        <div class="help-block">
                            {{ $errors->first('email')}}
                        </div>
                    @endif
                      <div class="form-group" >
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="password">
                      </div>
                         @if($errors->has('password'))
                        <div class="help-block">
                            {{ $errors->first('password')}}
                        </div>
                    @endif
                     <div class="form-group" >
                        <label for="">Cofirm password</label>
                        <input type="text" class="form-control" name="comfirm_password" placeholder="comfirm_password">
                      </div>
                         @if($errors->has('comfirm_password'))
                        <div class="help-block">
                            {{ $errors->first('comfirm_password')}}
                        </div>
                    @endif
                      

                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" placeholder=" address"
                        
                        >
                      </div>
                       @if($errors->has('address'))
                        <div class="help-block">
                            {{ $errors->first('address')}}
                        </div>
                    @endif

                    <div class="form-group" >
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                      </div>
                         @if($errors->has('phone'))
                        <div class="help-block">
                            {{ $errors->first('phone')}}
                        </div>
                    @endif
                      <div class="form-group" >
                        <label for="">Gender</label>
                        <input type="email" class="form-control" name="gender" placeholder="Gender"
                        
                        >
                      </div>
                      @if($errors->has('gender'))
                        <div class="help-block">
                            {{ $errors->first('gender')}}
                        </div>
                    @endif

                      <div class="form-group" >
                        <label for="">Birthday</label>
                        <input type="text" class="form-control" name="birthday" placeholder="Birthday">
                      </div>
                         @if($errors->has('birthday'))
                        <div class="help-block">
                            {{ $errors->first('birthday')}}
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
