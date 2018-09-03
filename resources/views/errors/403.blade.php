@extends('layouts.home')
@section('title','Errors')
@section('main')

   <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">

                <div class="jumbotron">
                  <div class="container" style="text-align: center;padding-bottom: 20px;">
                 <h1>403 error!</h1>
				<h3>FORBIDDEN!!!</h3>
                    <p style="margin-top: 40px;">
                      <a  href="{{route('home')}}" class="btn btn-info btn-md">Home</a>
                    </p>
                  </div>
                </div>
            </table> 

            

<!--        
             <div class="ps-cart__actions">
               <div class="ps-cart__promotion">
                
              </div>
               <div class="ps-cart__total">
                
                <div class="form-group">
                  
                 
                </div>
              </div>
              
            </div> -->
          
          </div>
        </div>
      </div>
     
    </main>
@stop()
