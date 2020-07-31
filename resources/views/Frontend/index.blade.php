@extends('Layout.master')    
@section('title')
Home Page || Nbinfants&toddlers
@endsection

@section('content')


    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div class='baby'>
                <div class='head'>
                    <div class='eye'></div>
                    <div class='cheek'></div>
                    <div class='horn'></div>
                </div>
                <div class='back'>
                    <div class='tail'></div>
                    <div class='hand'></div>
                    <div class='feet'></div>
                    <div class='ass'></div>
                </div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->


        <main class="wrapper"> 
            
            @include('Layout.header')
            <!-- CONTENT AREA -->

            <!-- Main Slider Start -->
            <section id="main-slider" class="carousel slide main-slider style-1 light-bg" >   
                <div class="carousel-inner slider">
                    <div class="item">  
                        <img src="assets/img/slider/babygirl_slide-1.png" alt="...">
                        <div class="theme-container container">
                            <div class="caption-text text-right-side style-4">
                                <div class="title-wrap">
                                    <h2 class="section-title">
                                        <span >
                                            <span class="funky-font blue-tag">Online </span> 
                                            <span class="italic-font">& In-Store </span>
                                        </span>
                                    </h2>
                                    <h3 class="sub-title"> Kids Collection</h3>
                                </div>
                                <hr class="dash-divider">
                                <div class="discount-wrap">
                                    <h2 class="discount pink-color">Entire Kids Purchase Save Up to $50</h2>
                                    <ul class="discount-list">
                                        <li>Use Code 2233 to shop online. Click for in-store </li>                                       
                                    </ul>

                                </div>
                                <div class="slider-link">                                 
                                    <a class="pink-btn btn" href="#"> Shop Now! <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>  
                        </div>
                    </div>                       
                    
                    <div class="item active">  
                        <img src="assets/img/slider/slide-1.png" alt=" ">                       
                        <div class="theme-container container">                            
                            <div class="caption-text">
                                <div class="title-wrap">
                                    <h2 class="section-title">
                                        <span >
                                            <span class="funky-font blue-tag">Online </span> 
                                            <span class="italic-font">Shopping Store </span>
                                        </span>
                                    </h2>
                                </div>
                                <div class="discount-wrap">
                                    <h2 class="discount pink-color">Flat <span> 20% </span> off</h2>
                                    <ul class="discount-list">
                                        <li> <a href="#">Apparel</a> </li>
                                        <li> <a href="#">Toys</a> </li>
                                        <li> <a href="#">Baby Gear</a> </li>
                                        <li> <a href="#">More</a> </li>
                                    </ul>
                                    <hr class="dash-divider">
                                </div>
                                <div class="slider-link">
                                    <a class="blue-btn btn" href="#"> <i class="fa  fa-th-large"></i> Discover </a>
                                    <a class="pink-btn btn" href="#"> Shop Now! <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>                        
                        </div>
                    </div>          
                </div>
                <!--Carousel Slide Button Start-->
                <div class="slider-pagination">                        
                    <a class="left carousel-control slider-btn" href="#main-slider" data-slide="prev">
                        <i class="fa fa-angle-left" style="font-size:20px; color: #000;"></i>
                    </a>
                    <a class="right carousel-control slider-btn" href="#main-slider" data-slide="next">
                        <i class="fa fa-angle-right" style="font-size:20px; color: #000;"></i>
                    </a>
                </div>            
            </section>
            <!-- / Main Slider Ends -->   

            <!-- Personalize Results Start -->
            <section id="personalize-result" class="space-bottom-35">
                <div class="container theme-container">
                    <div class="bg-with-mask result-wrap blue-box-shadow">
                        <span class="blue-color-mask color-mask-radius"></span>
                        <div class="result-box">
                            <div class="col-md-4 col-sm-12 personalize">                                
                                <div class="img-bg">
                                    <img src="assets/img/pattern/result-img.png" alt=" ">
                                </div>
                                <span>Enter your Child's details to personalize results:</span>                            
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <form class="personalize-form">
                                    <div class="row">
                                        <div class="form-group col-sm-4">                                     
                                            <label class="sr-only">Enter Child Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Child Name">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control datetimepicker" name="datetimepicker" placeholder ="Date Of Birth" />
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            </div>
                                        </div>


                                        <div class="radio-btn form-group col-sm-4">
                                            <label class="radio-btn-inline"><input type="radio" name="optradio"> <span>Girls</span> </label>
                                            <label class="radio-btn-inline"><input type="radio" name="optradio"> <span> Boys</span> </label>
                                            <button type="submit" class="submit-btn btn">Submit</button>
                                        </div>                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Personalize Results Ends -->

            <!-- Category Start -->
            <section id="category" class="space-35">
                <div class="container theme-container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 category-wrap">
                            <div class="pink-border light-bg" >                              
                                <div class="category-content col-md-6 no-padding">
                                    <div class="title-wrap">
                                        <h2 class="section-title">
                                            <span>
                                                <span class="funky-font pink-tag">Child </span> 
                                                <span class="italic-font">Collections</span>
                                            </span>
                                        </h2>
                                        <h3 class="sub-title-small">Up to 80% Off</h3>
                                    </div>
                                    <hr class="dash-divider">
                                    <h4 class="baby-years pink-color">4 - 5 Years</h4>
                                    <div class="category-shop">
                                        <a href="#" class="pink-btn-small btn"> Shop </a>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 category-wrap">
                            <div class="green-border light-bg" >                                
                                <div class="category-content col-md-6 no-padding">
                                    <div class="category-new">
                                        <div class="green-new-tag new-tag">
                                            <a href="#" class="funky-font">New</a>
                                        </div>
                                    </div>
                                    <div class="title-wrap">
                                        <h2 class="section-title">
                                            <span>
                                                <span class="funky-font green-tag">Kids </span> 
                                                <span class="italic-font">Collections</span>
                                            </span>
                                        </h2>
                                        <h3 class="sub-title-small">Up to 20% Off</h3>
                                    </div>
                                    <hr class="dash-divider">
                                    <h4 class="baby-years green-color">2 - 3 Years</h4>
                                    <div class="category-shop">
                                        <a href="#" class="green-btn-small btn"> Shop </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 category-wrap">
                            <div class="blue-border light-bg">
                                <div class="category-content col-md-6 no-padding">
                                    <div class="title-wrap">
                                        <h2 class="section-title">
                                            <span>
                                                <span class="funky-font blue-tag">Infants </span> 
                                                <span class="italic-font">Collections</span>
                                            </span>
                                        </h2>
                                        <h3 class="sub-title-small">Up to 40% Off</h3>
                                    </div>
                                    <hr class="dash-divider">
                                    <h4 class="baby-years blue-color">0 - 1 Year</h4>
                                    <div class="category-shop">
                                        <a href="#" class="blue-btn-small btn"> Shop </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Category Ends -->

           <!-- Product Most Popular Start -->
            <section id="product-tabination-1" class="space-bottom-45">
                <div class="container theme-container">
                    <div class="light-bg product-tabination">
                        <div class="tabination">
                            <div class="product-tabs" role="tabpanel">
                                <!-- Nav tabs -->
                                <ul role="tablist" class="nav nav-tabs navtab-horizontal">
                                    <li role="presentation" class="active">
                                        <a class="green-background" data-toggle="tab" role="tab"  href="#most-popular" aria-expanded="true">Most Popular</a>
                                    </li>  
                                    <li class="float-right" role="presentation">
                                        <a class="title-link" href="#"> See More <i class="fa fa-caret-right"></i> </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- =============================== Most Popular ============================= -->
                                    <div id="most-popular" class="tab-pane fade active in" role="tabpanel">
                                        <div class="col-md-12 product-wrap default-box-shadow">
                                            <div class="title-wrap">
                                                <h2 class="section-title">
                                                    <span>
                                                        <span class="funky-font blue-tag">Most</span> 
                                                        <span class="italic-font">Popular</span>
                                                    </span>
                                                </h2>  
                                                <div class="poroduct-pagination">
                                                    <span class="product-slide blue-background next"> <i class="fa fa-chevron-left"></i> </span>
                                                    <span class="product-slide blue-background prev"> <i class="fa fa-chevron-right"></i> </span>
                                                </div>
                                            </div>  
                                            
                                            <div class="product-slider owl-carousel owl-theme"> 
                                                @foreach($product as $prod)                                   
                                                    <div class="item">
                                                        <div class="product-details">
                                                            <div class="product-media">                                                            
                                                                <span class="hover-image white-bg">
                                                                    <img src="../upload/images/{{ $prod->image->first()->source }}" alt="{{ $prod->title }}" alt="">
                                                                </span>
                                                                <img src="upload/images/{{ $prod->image->first()->source }}" alt=" ">
                                                                <div class="product-new">
                                                                    <div class="golden-new-tag new-tag">
                                                                        <a class="funky-font" href="#">New</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-overlay">
                                                                    <a class="addcart blue-background fa fa-shopping-cart" href="#"></a>                                                                
                                                                    <a class="likeitem green-background fa fa-heart" href="#"></a>
                                                                    <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="rating">
                                                                @if ($prod->review->count() > 0)
                                                                      
                                                                    @if ($prod->review->avg('rate') < 1)                                                            
                                                                        <span class="star half"></span>
                                                                    @elseif ($prod->review->avg('rate') == 1)
                                                                        <span class="star active"></span>
                                                                    @elseif ($prod->review->avg('rate') < 2)
                                                                        <span class="star active"></span>
                                                                        <span class="star half"></span>
                                                                    @elseif ($prod->review->avg('rate') == 2)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                    @elseif ($prod->review->avg('rate') < 3)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star half"></span>
                                                                    @elseif ($prod->review->avg('rate') == 3)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                    @elseif ($prod->review->avg('rate') < 4)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star half"></span>
                                                                    @elseif ($prod->review->avg('rate') == 4)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                    @elseif ($prod->review->avg('rate') < 5)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star half"></span>
                                                                    @elseif ($prod->review->avg('rate') == 5)
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                        <span class="star active"></span>
                                                                     @elseif ($prod->review->count() == 0)
                                                                     
                                                                      No Review
                                                                @endif
                                                                
                                                                @endif
                                                                </div>
                                                                <div class="product-name">
                                                                    <p>
                                                                        <a href="{{ route('productdetail',$prod->slug) }}">{{ $prod->title }}</a><br>
                                                                        <small>{{ $prod->category->title }}</small>
                                                                    </p>
                                                                </div>
                                                                <div class="product-price">
                                                                    <h4 class="pink-btn-small"> ${{ number_format($prod->price, 0, '.', ', ') }} </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </section>
            <!-- / Product Most Popular Ends -->


            <!-- Filter & All Fashion 2 Start -->
            <section id="all-fashion-2" class="space-35">
                <div class="container theme-container">
                    <div class="title-wrap with-border">
                        <h2 class="section-title with-border">
                            <span class="white-bg">
                                <span class="funky-font blue-tag">Kids</span> 
                                <span class="italic-font">Fashion</span>
                            </span>
                        </h2>  
                        <h3 class="sub-title">Turn your Li'l Boy into a Rockstar</h3>
                        <hr class="dash-divider">                       
                    </div>     
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6 fashion-bg-2">
                                    <div class="fashion-wrap light-bg">
                                        <div class="box-container height-250">
                                            <div class="box-img-wrap img-right">
                                                <img src="assets/img/fashion/fashion-5.png" alt=" ">
                                            </div>
                                            <div class="col-md-7 pull-left">                                    
                                                <div class="title-wrap">
                                                    <h2 class="section-title">
                                                        <span>
                                                            <span class="funky-font pink-tag">Gift </span> 
                                                            <span class="italic-font">Voucher</span>
                                                        </span>
                                                    </h2> 
                                                    <h3 class="sub-title-small">Free Gift offers</h3>
                                                    <hr class="dash-divider-small">
                                                    <h3 class="sub-title-small">More Then <span class="bold-font-block pink-color"> $200 </span> Shopping</h3>                                            
                                                </div>                                                                        
                                            </div>
                                            <div class="fashion-icon">
                                                <img src="assets/img/fashion/icon-4.png" alt=" ">
                                            </div> 
                                        </div>
                                    </div>                                 
                                </div> 
                                <div class="col-md-12 col-sm-6 fashion-bg-2">
                                    <div class="fashion-wrap light-bg">
                                        <div class="box-container">
                                            <div class="box-img-wrap">
                                                <img src="assets/img/fashion/fashion-6.png" alt=" ">
                                            </div>
                                            <div class="col-md-7 pull-right">                                    
                                                <div class="title-wrap">
                                                    <h2 class="section-title">
                                                        <span>
                                                            <span class="funky-font blue-tag">Girls </span> 
                                                            <span class="italic-font">Accessories</span>
                                                        </span>
                                                    </h2>  
                                                    <h3 class="sub-title-small">Stylish Sunglasses</h3>
                                                    <hr class="dash-divider">
                                                    <a class="blue-color title-link" href="#"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                </div>                                           
                                            </div>
                                            <div class="fashion-icon-right">
                                                <img src="assets/img/fashion/icon-5.png" alt=" ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="fashion-wrap">
                                <div class="filter-wrap height-445">
                                    <h2 class="filter-title green-bg-with-shadow">Filter Option</h2>                                    
                                    <form class="filter-form">  
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="Looking to Buy">
                                                <option>Girls</option>
                                                <option>Boys</option>
                                                <option>Unisex</option>
                                            </select>
                                        </div>
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="Child Age">
                                                <option>0 - 6 Months</option>
                                                <option>6 Mths. - 2 Years</option>
                                                <option>3 - 5 Years</option>
                                            </select>
                                        </div>
                                        <div class="form-group selectpicker-wrapper">
                                            <select
                                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                data-toggle="tooltip" title="Category">
                                                <option>Baby Clothes</option>
                                                    <option>Kids Clothes</option>
                                                    <option>Boys Clothes </option>
                                                    <option>Girls Clothes </option>
                                                    <option>Casual</option>
                                                    <option>Ijabs </option>
                                                    <option>Accessories </option>
                                            </select>
                                        </div>
                                        <div class="form-group">                                                  
                                            <button type="submit" class="blue-btn btn">Go</button>
                                        </div>
                                    </form>
                                    <div class="filter-img">
                                        <img src="assets/img/fashion/filter-2.png" alt=" ">
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="circle-box light-bg">
                                <div class="text-center">                                   
                                    <div class="title-wrap">
                                        <h2 class="section-title">
                                            <span>
                                                <span class="funky-font blue-tag">Future </span> 
                                                <span class="italic-font">Your kids on</span>
                                            </span>
                                        </h2>  
                                        <a href="index-2.html" class="logo"><img src="assets/img/logo/logo.png" alt=" "></a>                                        
                                    </div>  
                                    <div  class="text-box">
                                        <p>Suspendisse lobortis vesti eros sit amet ullamcorper. Donec mollis..!!</p>
                                        <a href="#" class="blue-color title-link"> Read More <i class="fa fa-caret-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-img">
                                <img  src="assets/img/fashion/banner-1.png" alt=" ">
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
            <!-- / Filter & All Fashion 2 Ends -->

            <!-- Newsletter Start -->
            <section id="news-letter" class="space-45">
                <div class="bg3-with-mask  space-top-35  news-letter">
                    <span class="black-mask color-mask"></span>
                    <div class="container theme-container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 space-35">
                                <div class="title-wrap space-bottom-45">                                    
                                    <h2 class="section-title">
                                        <span>
                                            <span class="funky-font blue-tag">Newsletter </span> 
                                            <span class="italic-font">Sign Up</span>
                                        </span>
                                    </h2> 
                                </div>
                                <div class="newsletter-form">
                                    <form class="newsletter">                                       
                                        <div class="form-group col-sm-8 no-padding">                                     
                                            <label class="sr-only">Enter Child Name</label>
                                            <input type="text" placeholder="Enter your e-mail" class="form-control">
                                        </div>
                                        <div class="form-group col-sm-3 no-padding">
                                            <button class="blue-btn submit-btn btn" type="submit">Submit</button>
                                        </div>                                        
                                    </form>
                                    <p class="col-sm-9 no-padding">Enter Child Name to Sign up to Our Newsletter.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 space-35">
                                <div class="title-wrap"> 
                                    <h2 class="section-title">
                                        <i class="fa fa-truck green-color"></i>
                                        <span>
                                            <span class="funky-font green-tag">Free </span> 
                                            <span class="italic-font">Shipping</span>
                                        </span>
                                    </h2> 
                                </div>

                                <div class="text-widget">
                                    <p>For standard oders over 100 USD. disse lobortis vestibulum eros sit amet  rper donec mollis.</p>
                                    <a href="#" class="green-color title-link"> Read More <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 space-35">
                                <div class="title-wrap"> 
                                    <h2 class="section-title">
                                        <i class="fa fa-reply pink-color"></i>
                                        <span>
                                            <span class="funky-font pink-tag">free </span> 
                                            <span class="italic-font">Returns</span>
                                        </span>
                                    </h2> 
                                </div>
                                <div class="text-widget">
                                    <p>For standard oders over in 30 dsys. disse lobortis vestibulum eros sit amet  rper donec mollis.</p>
                                    <a href="#" class="pink-color title-link"> Read More <i class="fa fa-caret-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </section>
            <!-- / Newsletter Ends -->

            <!-- Blog Start -->
            <section id="home-blog" class="space-35">
                <div class="light-bg space-35">
                    <div class="container theme-container">
                        <div class="blog-wrap space-top-35">
                            <div class="title-wrap with-border">
                                <h2 class="section-title with-border">
                                    <span class="light-bg">
                                        <span class="funky-font blue-tag">News</span> 
                                        <span class="italic-font">From Blogs</span>
                                    </span>
                                </h2>  
                                <h3 class="sub-title">Latest News About Store</h3>
                                <hr class="dash-divider">                       
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="post-wrap">
                                        <div class="post-media">                                                                                                                                                          
                                            <img src="assets/img/blog/blog-1.jpg" alt=" ">
                                            <div class="blog-new">
                                                <div class="green-new-tag new-tag">
                                                    <a href="#" class="fa  fa-picture-o"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg2-with-mask green-box-shadow">
                                            <span class="green-color-mask color-mask"></span>    
                                            <div class="post-content">
                                                <a href="blog-single.html" class="post-title">Standard Blog Post</a>
                                                <ul class="post-meta">
                                                    <li> <span class="fa fa-user"></span> <a href="#">My Admin</a> </li>
                                                    <li> <span class="fa fa-clock-o"></span> <a href="#">6 Days Ago </a> </li>
                                                    <li> <span class="fa  fa-comment"></span> <a href="#">10</a> </li>
                                                </ul>
                                                <div class="post-detail">
                                                    <p>Phasellus rhoncus quis nunc vitae dapibus. Integer vehicula urna ut nisl ullamcorper.</p>
                                                </div>
                                                <div class="read-more">
                                                    <a class="title-link" href="#"> Read More <i class="fa fa-caret-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div> -->
                            <h3 style="color: red;text-align: center;">404 Error Page</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Blog Ends -->

            

            <!-- Preview Popup -->            
            <div class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">                
             <div class="modal-dialog modal-lg">                     
              <div class="modal-content space-40">                         
                <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close fa fa-times" href="#"></a>                         <!--<button aria-hidden="true" data-dismiss="modal" class="close sb-close-btn" type="button"><i class="fa fa-times"></i></button>-->                     
                <!-- Single Products Start -->                         
                <div class="clearfix"></div>                         
                    <section id="product-fullwidth" class="clearfix">                              
                        <div class="single-product-wrap">                                       
                          <div class="list-category-details">                                                                    
                            <div class="col-md-7 col-sm-7">                                                                           <!-- Main Slider Start -->                                         
                                <section id="main-slider1" class="carousel slide main-slider">                                      
                                  <!--Carousel Slide Button Start-->                                             
                                  <div class="slider-pagination col-md-2 col-sm-3  col-xs-3">                                                                 
                                    <ul class="product-thumbnails">                                                     
                                        <li  data-slide-to="0" data-target="#main-slider1">                                                         
                                          <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb1.png"></a>
                                        </li>                                                     
                                        <li class="active" data-slide-to="1" data-target="#main-slider1">                    
                                          <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb2.png"></a>
                                        </li>                                                     
                                        <li data-slide-to="2" data-target="#main-slider1">        
                                          <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb3.png"></a>
                                        </li>                                                      
                                        <li data-slide-to="3" data-target="#main-slider1">                                             
                                          <a href="#"><img class="img-responsive" alt="img" src="assets/img/product/single-thumb4.png"></a>
                                        </li>                                                  
                                    </ul>                                               
                                  </div>                                                 
                                  <div class="col-md-10 col-sm-9  col-xs-9">                                                 
                                    <div class="carousel-inner product-fullwidth light-bg slider">                           
                                      <div class="item">                                                           
                                        <img src="assets/img/product/single-prod1.png" alt="...">                                        
                                    </div>                                                          
                                    <div class="item active">                                                           
                                        <img src="assets/img/product/single-prod1.png" alt="..."> 
                                    </div>                                                     
                                     <div class="item">                                                           
                                        <img src="assets/img/product/single-prod1.png" alt="...">                 
                                    </div>                                                      
                                    <div class="item">                                                           
                                        <img src="assets/img/product/single-prod1.png" alt="...">   
                                    </div>                                                  
                                  </div>                                             
                              </div>                                          
                            </section>                                         
                            <!-- / Main Slider Ends -->                                                                          
                            </div>                                     
                            <div class="col-md-5 col-sm-5">                                         
                              <div class="product-content">                                             
                                <div class="rating">                                                                
                                    <span class="star active"></span>                                                 
                                    <span class="star active"></span>                                                 
                                    <span class="star active"></span>                                                 
                                    <span class="star half"></span>                                                 
                                    <span class="star"></span>                                                 
                                <div class="product-review">                                                     
                                  <ul>                                                         
                                    <li>03 Review </li>                                                         
                                    <li> | <a href="#"> Add Your Review </a> </li>                                                     
                                  </ul>                                                 
                                </div>                                             
                            </div>                                                                                         
                            <div class="product-name">                                                 
                              <a href="#">Noddy Hooded Sweatshirt Full Sleeves</a>              
                            </div>                                             
                            <div class="product-price">                                                 
                                <h4 class="pink-btn-small price-line"> $50.00 </h4>                                                 
                                <h4 class="blue-btn-small"> $45.00 </h4>                                             
                            </div>                                             
                            <div class="product-availability">                                                 
                              <ul class="stock-detail">                                                     
                                <li>Available:<strong class="green-color"> <i class="fa fa-check-circle"></i> In Stock </strong> | </li>  <li>Product Id:<strong> #201546 </strong> </li>                                                 
                              </ul>                                                 
                              <hr class="fullwidth-divider">                                                                              
                            </div>                                             
                            <div class="product-size">                                                 
                              <form class="product-form">                                                     
                                <div class="row">                                                         
                                  <div class="form-group selectpicker-wrapper">
                                    <label>SIZE</label>                                                             
                                    <select title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden">
                                        <option class="bs-title-option" value="">2 - 4 Years</option>
                                        <option>4 - 6 Years</option>                                                                 
                                        <option>6 - 8 Years</option>                                                                 
                                        <option>8 - 10 Years</option>                                                             
                                    </select>                                                         
                                  </div>                                                         
                                  <div class="form-group selectpicker-wrapper">                                         
                                    <label>QTY</label>                                                             
                                    <select title="Looking to Buy" data-toggle="tooltip" data-width="100%" data-live-search="true" class="selectpicker input-price bs-select-hidden">
                                        <option class="bs-title-option" value="">02</option>
                                        <option>03</option>                                                                 
                                        <option>04</option>                                                                 
                                        <option>05</option>                                                             
                                    </select>                                                         
                                  </div>                                                     
                                </div>                                                 
                              </form>                                                 
                              <div class="widget-colors">                                                     
                                <span>Colors:</span>                                                     
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="brown"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="light"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="dark"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="orange"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="blue"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="yellow"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="green"> <span></span>
                                </label>                                                      
                                <label class="rcheckbox-inline">
                                    <input type="checkbox" value="" id="white"> <span></span>
                                </label>                                                  
                              </div>                                                 
                              <hr class="fullwidth-divider">                                                
                          </div>                                                                                         
                          <div class="add-to-cart">                                                 
                            <a class="blue-btn btn" href="#"> <i class="fa fa-shopping-cart white-color"></i> Add to Cart</a>             <a class="pink-btn btn" href="product-single-fullwidth.html"> Go To Details </a>     
                          </div>                                         
                        </div>                                     
                      </div>                                 
                    </div>                                  
                  </div>                                     
              </section>                         
              <!-- Single Products Ends -->                     
            </div>                 
            </div>             
            </div>             
            <!-- / Preview Popup -->              
           

        </main>
        <!-- /WRAPPER -->
        @endsection