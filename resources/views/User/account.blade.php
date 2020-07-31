@extends('Layout.master1')    
@section('title')
Account home || Nbinfants&toddlers
@endsection

@section('content')

 @include('Layout.header1')
 <!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                            <span>
                                <span class="funky-font blue-tag">My </span> 
                                <span class="italic-font">Account</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> Account Information </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >  <span class="blue-color"> My Account </span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <div class="row">
                    <!-- Posts Start -->
                    <aside class="col-md-8 col-sm-8 space-bottom-20">
                        <div class="title-wrap  text-center space-bottom-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">Account</span> 
                                    <span class="italic-font">Information</span>
                                </span>
                            </h2>                                                          
                        </div>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small">  My Account Information </div>
                            @include('include.success')
                            @include('include.warning')
                            @include('include.error')
                            <div class="account-box  light-bg default-box-shadow">
                                <form method="POST" action="{{ route('updateprofile') }}" enctype="multipart/form-data" class="form-delivery">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input type="text" class="form-control" placeholder="First Name" name="fname" ></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input type="text" class="form-control" placeholder="Last Name" name="lname" ></div>
                                        </div>                                                                                                 
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input type="text" class="form-control" placeholder="Phone Number" name="phone"> </div>
                                        </div> 
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="country">
                                                    <option selected disabled>Country</option>
                                                    <option>Nigeria</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" name="state">
                                                    <option selected disabled>State</option>
                                                    <option>Nigeria</option>
                                                </select>
                                            </div>
                                        </div> 
                                         <div class="col-md-6 col-sm-6">
                                            <div class="form-group"><input type="text" class="form-control" placeholder="City" name="city"></div>
                                        </div> 
                                        <div class="col-md-12 col-sm-12">
                                            <label class="pink-btn btn">
                                                <input type="submit" value="Update">
                                            </label>                                            
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>                                                    
                    </aside>
                    <!-- Posts Ends --> 

                    <!-- Sidebar Start -->
                    <aside class="col-md-4 col-sm-4 space-bottom-20">                        
                        <div class="blog-sidebar-widget light-bg default-box-shadow">
                            <h4 class="widget-title blue-bg"> <span>  Account  </span> </h4>
                            <div class="blog-widget-content">
                                <ul>
                                    <li  class="accout-item"><a href="#"> Account Information </a></li>
                                    <li  class="accout-item active"><a href="{{ route('myaccount') }}">My Account</a></li> 
                                    <li  class="accout-item"><a href="{{ route('post_product') }}">Post Product</a></li>                                     
                                    <li  class="accout-item"><a href="{{ route('myproduct') }}">Manage Products</a></li>
                                    <li  class="accout-item"><a href="#">Order History</a></li>
                                    <li  class="accout-item"><a href="#">Reviews and Ratings</a></li>
                                </ul>
                            </div>
                        </div>                      
                    </aside>
                    <!-- / Sidebar Ends -->     
                </div>
            </article>

            <!-- / CONTENT AREA -->

        @endsection