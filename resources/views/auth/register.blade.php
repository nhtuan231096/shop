@extends('layouts.main')
@section('title','Trang đăng ký')
@section('content')
   <div class="form-body" class="container-fluid">
       
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        
                                        <p style="color:black;">{!! Session::get('success')!!}</p>
                                    </div>
                                    @endif
                                    @if(Session::has('error'))
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            
                                            <p>{!! Session::get('error')!!}</p>
                                        </div>
                                        @endif
                            </div>
                        <h3>Register</h3>
                        
                        <div class="page-links">
                            <a href="{{route('dangnhap')}}">Login</a><a href="{{route('dangky')}}" class="active">Register</a>
                        </div>
                        <form action="" method="POST" role="form">
                             {{ csrf_field()}}
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                             @if($errors->has('name'))
                            <p>{{$errors->first('name')}}</p>
                            @endif
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                               @if($errors->has('email'))
                            <p>{{$errors->first('email')}}</p>
                            @endif
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                               @if($errors->has('password'))
                            <p>{{$errors->first('password')}}</p>
                            @endif
                            <input class="form-control" type="password" name="comfirm_password" placeholder="Comfirm Password" required>
                               @if($errors->has('confirm_password'))
                            <p>{{$errors->first('confirm_password')}}</p>
                            @endif

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                            
                        </form>
                        <div class="other-links">
                            <span><a href="{{route('home')}}">Home</a></a></span><a href="#">Facebook</a><a href="#">Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@stop()