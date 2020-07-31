@extends('Layout.master')    
@section('title')
Login|| Nbinfants&toddlers
@endsection

@section('content')

<body id="home" class="wide">

            @include('Layout.header')

              <!-- CONTENT AREA -->

        
             <!-- Login Register -->
            <div class="" id="login-register" >
                <div class="modal-dialog">                 
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <div class="modal-content light-bg">   
                        <div class="col-sm-10">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Welcome</span> 
                                        <span class="italic-font">to NB Infants & kiddies Store</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title">Login</h3>
                                <hr class="dash-divider-small">                                
                            </div> 
                            
                        </div>                                             
                        <div class="col-sm-12 col-md-12">
                            @include('include.success')
                            @include('include.warning')
                            @include('include.error')
                            <div class="login-wrap">
                                <h2 class="title-2 sub-title-small">Sign In</h2>
                                <form method="POST" action="{{ route('login') }}">      
                                    <div class="form-group">
                                        <input type="email" placeholder="email" class="form-control" name="email" value="{{ Request::old('email')}}" />
                                        <i class="blue-color fa fa-user"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control" name="password" />
                                        <i class="pink-color fa  fa-unlock-alt"></i>
                                    </div>

                                    <div class="form-group">
                                        <label class="chk-box"><input type="checkbox" name="optradio">Not a User </label>
                                        <label class="forgot-pwd">
                                            <a href="{{ route('registerpage') }}" class="blue-color title-link">Register</a>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="blue-btn btn">Sign In</button>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /Popup: Login Register -->
        @endsection