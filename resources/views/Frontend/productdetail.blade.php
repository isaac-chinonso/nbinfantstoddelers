@extends('Layout.master1')    
@section('title')
Product Detail || Nbinfants&toddlers
@endsection
@include('Layout.header1')
@section('content')

<!-- CONTENT AREA -->

            <!-- Breadcrumbs Start -->
            <section class="breadcrumb-bg margin-bottom-80">     
                <span class="gray-color-mask color-mask"></span>
                <div class="theme-container container">
                    <div class="site-breadcrumb relative-block space-75">
                        <h2 class="section-title">
                             <span>
                                <span class="funky-font blue-tag">Nb </span> 
                                <span class="italic-font">infants&toddlers</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> {{ $productdetail->title }}</ </h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a> > <span class="blue-color">{{ $productdetail->category->title }}</span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->         


            <article class="container theme-container">
                 @include('include.success')
                 @include('include.warning')
                 @include('include.error')
                <!-- Single Products Start -->
                <section id="product-fullwidth" class="space-bottom-45"> 
                    <div class="single-product-wrap">      
                        <div class="list-category-details">
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <div class="row">
                                        <!-- Main Slider Start -->
                                        <section id="main-slider" class="carousel slide main-slider" >  
                                            <!--Carousel Slide Button Start-->
                                            <div class="slider-pagination col-md-2 col-sm-3  col-xs-3">                
                                                <ul class="product-thumbnails">
                                                    <li  data-slide-to="0" data-target="#main-slider">
                                                        <a href="#"><img class="img-responsive" alt="img" src="../upload/images//{{ $productdetail->image->first()->source }}"></a></li>
                                                    <li class="active" data-slide-to="1" data-target="#main-slider">
                                                        <a href="#"><img class="img-responsive" alt="img" src="../upload/images//{{ $productdetail->image->first()->source }}"></a></li>
                                                    <li data-slide-to="2" data-target="#main-slider">
                                                        <a href="#"><img class="img-responsive" alt="img" src="../upload/images//{{ $productdetail->image->first()->source }}"></a></li> 
                                                </ul>  
                                            </div>    
                                            <div class="col-md-10 col-sm-9  col-xs-9">
                                                <div class="carousel-inner product-fullwidth light-bg slider">
                                                    <div class="item">  
                                                        <img src="../upload/images//{{ $productdetail->image->first()->source }}" alt="{{ $productdetail->title }}">
                                                    </div>     
                                                    <div class="item active">  
                                                         <img src="../upload/images//{{ $productdetail->image->first()->source }}" alt="{{ $productdetail->title }}">  
                                                    </div> 
                                                    <div class="item">  
                                                         <img src="../upload/images//{{ $productdetail->image->first()->source }}" alt="{{ $productdetail->title }}"> 
                                                    </div> 
                                                </div>
                                            </div>

                                        </section>
                                        <!-- / Main Slider Ends -->  
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="product-content">
                                    @if ($productdetail->review->count() > 0)
                                        <div class="rating">  
                                        @if ($productdetail->review->avg('rate') < 1)                                                            
                                            <span class="star half"></span>
                                        @elseif ($productdetail->review->avg('rate') == 1)
                                            <span class="star active"></span>
                                        @elseif ($productdetail->review->avg('rate') < 2)
                                            <span class="star active"></span>
                                            <span class="star half"></span>
                                        @elseif ($productdetail->review->avg('rate') == 2)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        @elseif ($productdetail->review->avg('rate') < 3)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star half"></span>
                                        @elseif ($productdetail->review->avg('rate') == 3)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        @elseif ($productdetail->review->avg('rate') < 4)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star half"></span>
                                        @elseif ($productdetail->review->avg('rate') == 4)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                        @elseif ($productdetail->review->avg('rate') < 5)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star half"></span>
                                        @elseif ($productdetail->review->avg('rate') == 5)
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                            <span class="star active"></span>
                                         @elseif ($productdetail->review->count() == 0)
                                          No Review
                                    @endif
                                    @endif

                                            <div class="product-review">
                                                <ul>
                                                    <li>- ( {{ $productdetail->review->count('rate') }}  )  Review </li>
                                                    <li> | <a href="{{ route('review',$productdetail->slug) }}" data-toggle="modal">Add Your Review</a> </li>
                                                </ul>
                                            </div>
                                        </div>                                            
                                        <div class="product-name">
                                            <a href="#">{{ $productdetail->title }}</a>
                                            <small>Posted: {{ $productdetail->created_at->diffForHumans() }}</small>                                              
                                        </div>
                                        <div class="product-price">
                                            <h4 class="pink-btn-small">  £{{ number_format($productdetail->price, 0, '.', ', ') }}  </h4>
                                        </div>
                                        <div class="product-size">
                                            <form class="product-form">
                                                <div class="row">
                                                    <div class="form-group selectpicker-wrapper">
                                                        <label>SIZE</label>
                                                        <select title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden"><option class="bs-title-option" value="">2 - 4 Years</option>
                                                            <option>4 - 6 Years</option>
                                                            <option>6 - 8 Years</option>
                                                            <option>8 - 10 Years</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group selectpicker-wrapper">
                                                        <label>QTY</label>
                                                        <select title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden"><option class="bs-title-option" value="">02</option>
                                                            <option>03</option>
                                                            <option>04</option>
                                                            <option>05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                           
                                            <hr class="fullwidth-divider">   
                                        </div>
                                        <div class="add-to-cart">
                                            <a class="blue-btn btn" href="{{ route('addtocart',$productdetail->id) }}"> <i class="fa fa-shopping-cart white-color"></i> Add to Basket</a>
                                            <a> 
                                                
                                                <form action="{{route('wishliststore',$productdetail->id)}}" method="post" id="contact_form" class="contact-form" accept-charset="UTF-8">
                                                    {{csrf_field()}}
                                                    <button type="submit" class="btn btn-danger">
                                                        Save For Later
                                                    </button>
                                                  </form>
                                            </a>
                                            <a class="btn btn-success" href="#"> <i class="fa fa-share"> Share</i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                        </div>  
                    </div>            
                </section>
                <!-- Single Products Ends -->

                <!-- Single Products Description Start -->
                <section id="description-item">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <!-- Product Best Sellers Start -->
                            <section id="single-product-tabination" class="space-bottom-45">                            
                                <div class="light-bg product-tabination default-box-shadow">
                                    <div class="tabination">
                                        <div class="product-tabs" role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul role="tablist" class="nav nav-tabs navtab-horizontal">
                                                <li  role="presentation" class="active">
                                                    <a class="green-background" data-toggle="tab" role="tab"  href="#description" aria-expanded="true">Description</a>
                                                </li>   
                                                <li role="presentation" class="">
                                                    <a data-toggle="tab" class="golden-background" role="tab" href="#reviews" aria-expanded="false">Reviews</a>
                                                </li> 
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <!-- =============================== Description ============================= -->
                                                <div id="description" class="tab-pane fade active in" role="tabpanel">
                                                    <div class="col-md-12 product-wrap">
                                                        <div class="title-wrap">
                                                            <h2 class="section-title">
                                                                <span>
                                                                    <span class="funky-font blue-tag">Product</span> 
                                                                    <span class="italic-font">Description</span>
                                                                </span>
                                                            </h2>  
                                                        </div>
                                                        <div class="product-disc space-bottom-35">
                                                            <p>
                                                               {{ $productdetail->description}}
                                                            </p>
                                                            <div class="row circle-list-box">                                                                
                                                                <div class="box-left col-md-6 col-sm-6">
                                                                    <h2 class="title-2 sub-title-small">specification</h2>
                                                                    <ul class="circle-list">
                                                                        <li>Category - {{ $productdetail->category->title }}</li>
                                                                        <li> Brand - {{ $productdetail->brand}}</li>
                                                                        <li>Type - {{ $productdetail->type}}</li>
                                                                        <li>Size - {{ $productdetail->size}}</li>
                                                                        <li>Quantity - {{ $productdetail->quantity}}</li>
                                                                    </ul>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- ====================== Reviews ======================== -->
                                                <div id="reviews" class="tab-pane fade" role="tabpanel">
                                                    <div class="col-md-12 product-wrap">
                                                        <div class="title-wrap">
                                                            <h2 class="section-title">
                                                                <span>
                                                                    <span class="funky-font blue-tag">Product</span> 
                                                                    <span class="italic-font">Reviews</span>
                                                                </span>
                                                            </h2>  
                                                        </div>
                                                        <div class="product-disc space-bottom-35">
                                                             @foreach($review as $rev)  
                                                                <span class="pull-left"><img src="../assets/img/fill.jpg" width="50px" height="50px"> {{ $rev->profile->fname }} {{ $rev->profile->lname }} </span>
                                                                      <div class="rating">
                                                                        <ul style="padding-top: 16px;"> - 
                                                                        @if ($rev->rate == 0.5)
                                                                            <span class="star half"></span>
                                                                          @elseif ($rev->rate == 1)
                                                                           <span class="star active"></span>
                                                                          @elseif ($rev->rate == 1.5)
                                                                            <span class="star active"></span>   
                                                                            <span class="star half"></span>
                                                                          @elseif ($rev->rate == 2)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                          @elseif ($rev->rate == 2.5)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star half"></span>
                                                                          @elseif ($rev->rate == 3)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                          @elseif ($rev->rate == 3.5)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star half"></span>
                                                                          @elseif ($rev->rate == 4)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                          @elseif ($rev->rate == 4.5)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star half"></span>
                                                                          @elseif ($rev->rate == 5)
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                            <span class="star active"></span>
                                                                        @endif
                                                                        <span> | {{ $rev->comment }}</span>
                                                                        </ul>

                                                                      </div>
                                                                 
                                                                
                                                                <br><br><hr>
                                                              @endforeach 

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </section>
                            <!-- / Product Best Sellers Ends -->
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="light-bg padding-25 top-rated default-box-shadow">
                                <div class="row">
                                    <div class="title-wrap col-md-9">
                                        <h2 class="section-title">
                                            <span>
                                                <span class="funky-font green-tag">Top </span> 
                                                <span class="italic-font">Rated</span>
                                            </span>
                                        </h2>
                                    </div>                                 
                                    <div class="poroduct-pagination col-md-3">
                                        <span class="product-slide gray-background next"> <i class="fa fa-chevron-left"></i> </span>
                                        <span class="product-slide gray-background prev"> <i class="fa fa-chevron-right"></i> </span>
                                    </div>
                                </div>
                                <div class="top-rated-owl-slider"><br><br>
                                    <p style="color: red;">Not Available</p>
                                   
                                </div>
                            </div>
                        </div>                     
                    </div>  
                </section>
                <!-- Single Products Description Ends -->
                <!-- Related Products Start -->
                <section id="product-tabination-1" class="space-bottom-45">
                    <div class="container theme-container">
                        <div class="title-wrap with-border space-25">
                            <h2 class="section-title with-border">
                                <span class="white-bg">
                                    <span class="funky-font blue-tag">Related</span> 
                                    <span class="italic-font">Product</span>
                                </span>
                            </h2>  
                            <h3 class="sub-title">Recently Item You Viewed</h3>
                            <hr class="dash-divider">                       
                        </div>     
                        <div class="light-bg product-tabination">
                            <div class="tabination">
                                <div class="product-tabs" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul role="tablist" class="nav nav-tabs navtab-horizontal">
                                        <li role="presentation" class="active">
                                            <a class="green-background" data-toggle="tab" role="tab"  href="#related-product" aria-expanded="true">Related Products</a>
                                        </li>
                                        <li class="" role="presentation">
                                            <a class="pink-background" data-toggle="tab" role="tab"  href="#recently-viewed" aria-expanded="false">Recently Viewed</a>
                                        </li>                                       
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">                                       
                                        <!-- ====================== Related Products ======================== -->
                                        <div id="related-product" class="tab-pane fade active in" role="tabpanel">
                                            <div class="col-md-12 product-wrap default-box-shadow">
                                                <div class="title-wrap">
                                                    <h2 class="section-title">
                                                        <span>
                                                            <span class="funky-font blue-tag">Best</span> 
                                                            <span class="italic-font">Sellers</span>
                                                        </span>
                                                    </h2>  
                                                    <div class="poroduct-pagination">
                                                        <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                                                        <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                                                    </div>
                                                </div>  
                                                <div class="product-slider owl-carousel owl-theme">
                                                <p style="color: red;">Not Available</p>                                              
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ====================== Recently Viewed ======================== -->
                                        <div id="recently-viewed" class="tab-pane fade" role="tabpanel">
                                            <div class="col-md-12 product-wrap default-box-shadow">
                                                <div class="title-wrap">
                                                    <h2 class="section-title">
                                                        <span>
                                                            <span class="funky-font blue-tag">Latest</span> 
                                                            <span class="italic-font">Items</span>
                                                        </span>
                                                    </h2>  
                                                    <div class="poroduct-pagination">
                                                        <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                                                        <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                                                    </div>
                                                </div>  
                                                <div class="product-slider owl-carousel owl-theme">                                           
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>            
                </section>
                <!-- / Related Products Ends -->
            </article>
            
                        <!-- Popup: Login Register -->
            <div class="modal fade login-register" id="add-review" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">                 
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <div class="modal-content light-bg">   
                        <div class="col-sm-8">
                            <div class="title-wrap">
                                <h2 class="section-title">
                                    <span>
                                        <span class="funky-font blue-tag">Nbinfants&toddler</span> 
                                        <span class="italic-font">Baby & kids Store</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title">Post Review -{{ $productdetail->title }}</h3>
                                <hr class="dash-divider-small">                                
                            </div> 
                            <p>Your review of this product</p>
                        </div>                                             
                        <div class="col-sm-6 col-md-5">
                            <div class="login-wrap">
                               <h3 style="text-transform: capitalize;">{{ $productdetail->title }}</h3>
                                <small style="color: #bbb;">{{ $productdetail->category->title }}</small><br><br>
                                  @include('include.success')
                                  @include('include.warning')
                                  @include('include.error')
                                  <form method="POST" action="">
                                        <div class="form-group">
                                          <label>Rate it</label>
                                          <div class="form-control">
                                            <fieldset class="rating">
                                              <input type="radio" id="star5" name="rate" value="5" />
                                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                              <input type="radio" id="star4half" name="rate" value="4.5" />
                                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                              <input type="radio" id="star4" name="rate" value="4" />
                                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                              <input type="radio" id="star3half" name="rate" value="3.5" />
                                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                              <input type="radio" id="star3" name="rate" value="3" />
                                                <label class="full" for="star3" title="Meh - 3 stars"></label>
                                              <input type="radio" id="star2half" name="rate" value="2.5" />
                                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                              <input type="radio" id="star2" name="rate" value="2" />
                                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                              <input type="radio" id="star1half" name="rate" value="1.5" />
                                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                              <input type="radio" id="star1" name="rate" value="1" />
                                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                              <input type="radio" id="starhalf" name="rate" value="0.5" />
                                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                            </fieldset>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label>Reviews</label>
                                            <textarea class="form-control" name="comment"></textarea>
                                        </div>
                                    <div class="pull-right">
                                      <button class="btn btn-success btn-sm waves-effect waves-light">SEND MY REVIEW</button>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}"> 
                                  </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /Popup: Login Register -->

            <!-- / CONTENT AREA -->
        @endsection