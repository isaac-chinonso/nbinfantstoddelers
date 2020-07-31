@extends('Layout.master1')    
@section('title')
Post Products || Nbinfants&toddlers
@endsection

@section('content')

 @include('Layout.header1')
 <!-- CONTENT AREA -->

            <article  class="container theme-container"> 
                <div class="row" style="padding-top: 50px;">
                    <!-- Sidebar Start -->
                    <aside class="col-md-4 col-sm-4 space-bottom-20">                        
                        <div class="blog-sidebar-widget light-bg default-box-shadow">
                            <h4 class="widget-title blue-bg"> <span>  Account  </span> </h4>
                            <div class="blog-widget-content">
                                <ul>
                                    <li  class="accout-item"><a href="#"> Account Information </a></li>
                                    <li  class="accout-item active"><a href="{{ route('myaccount') }}">My Account</a></li> 
                                    <li  class="accout-item"><a href="#">Post Product</a></li>                                     
                                    <li  class="accout-item"><a href="#">Manage Products</a></li>
                                    <li  class="accout-item"><a href="#">Manage Order</a></li>
                                    <li  class="accout-item"><a href="#">Reviews and Ratings</a></li>
                                </ul>
                            </div>
                        </div>                      
                    </aside>
                    <!-- / Sidebar Ends -->

                    <!-- Posts Start -->
                    <aside class="col-md-8 col-sm-8 space-bottom-20">
                        <div class="title-wrap  text-center space-bottom-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font pink-tag">Post Products</span> 
                                    <span class="italic-font">Form</span>
                                </span>
                            </h2>                                                          
                        </div>
                        <div class="account-details-wrap">
                            <div class="title-2 sub-title-small"> Post Products </div>
                            @include('include.success')
                            @include('include.warning')
                            @include('include.error')
                            <div class="account-box  light-bg default-box-shadow">
                                <form method="POST" action="{{ route('saveproduct') }}" enctype="multipart/form-data" class="form-delivery">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Product Title <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Title" name="title">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Product Category <span style="color: red;">*</span></label>
                                                <select class="form-control" name="category_id">
                                                    <option selected disabled>Category</option>
                                                    @foreach ($category as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Product Price <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="#5000" name="price" >
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Country Posting From <span style="color: red;">*</span></label>
                                                <select class="form-control" name="country_id">
                                                    <option selected disabled>Country</option>
                                                    @foreach ($country as $cont)
                                                    <option value="{{ $cont->id }}">{{ $cont->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>State Posting From <span style="color: red;">*</span></label>
                                                <select class="form-control" name="state_id">
                                                    <option selected disabled>State</option>
                                                    @foreach ($state as $stat)
                                                    <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                         <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>City Posting From <span style="color: red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="City" name="city">
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">                                                                                              
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Product Description <span style="color: red;">*</span></label>
                                                <textarea class="form-control" placeholder="Product Description" name="description"></textarea>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Product Image <span style="color: red;">*</span></label>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Size <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product size" name="size">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Type<span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Type" name="type">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Quantity <span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Quantity" name="quantity">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Brand<span style="color:red;">*</span></label>
                                                <input type="text" class="form-control" placeholder="Product Brand" name="brand">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label class="pink-btn btn">
                                                <input type="submit" value="Post Product">
                                            </label>                                            
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>
                        </div>                                                    
                    </aside>
                    <!-- Posts Ends --> 

                         
                </div>
            </article>

            <!-- / CONTENT AREA -->

        @endsection