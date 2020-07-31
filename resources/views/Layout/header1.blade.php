  <!-- Header -->
            <header class="light-bg">
                <!-- Header top bar starts-->
                <section class="top-bar"> 
                    <div class="bg-with-mask box-shadow">
                        <span class="blue-color-mask color-mask"></span>
                        <div class="container theme-container">           
                            <nav class="navbar navbar-default top-navbar">  
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    
                                    <a class="visible-xs logo" href="{{ route('homepage') }}"> <img src="../assets/img/logo/logo.png" alt="Baby Store"> </a>
                                </div>                           
                                <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >English <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Dutch</a></li>
                                                <li><a href="#">French</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >USD <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">POUND</a></li>
                                                <li><a href="#">USD</a></li>
                                                <li><a href="#">EURO</a></li>                                            
                                            </ul>
                                        </li>
                                    </ul>

                                    <ul class="nav navbar-nav pull-right">
                                        <li class="dropdown">
                                            <a href="{{ route('homepage') }}" role="button" aria-haspopup="true" >Home</a>
                                        </li>                                       
                                        <li><a href="{{ route('contactpage') }}">Contact Us</a></li>
                                        <li class="dropdown">
                                            <a href="{{ route('blogpage') }}" role="button" aria-haspopup="true" >Blog</a>
                                        </li>
                                        <li><a href="#">Track Order</a></li>
                                         @if(!Auth::check())
                                        <li><a href="{{ route('login') }}" data-toggle="modal">Sign Up/Sign In</a></li>
                                        @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >{{ Auth::user()->username }}<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('account') }}">My Account</a></li>
                                                <li><a href="{{ route('post_product') }}">Post Product</a></li>
                                                <li><a href="{{ route ('wishlist') }}">My Saved Items </a></li>
                                                <li><a href="#">Order History</a></li>
                                                <li><a href="{{ route('logout') }}">Logout</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                    </ul>
                                </div>                         
                            </nav>                            
                        </div>                       
                    </div>
                    <!-- <img src="assets/img/pattern/ziz-zag.png" class="blue-zig-zag" alt=".."> -->
                </section>
                <!-- /Header top bar ends -->
                <section class="header-wrapper white-bg  header" style="background-color: #BFBFC9;">
                    <article class="header-middle">
                        <div class="container theme-container ">       
                            <!-- Logo -->
                            <div class="logo hidden-xs col-md-3  col-sm-3">
                                <a href="{{ route('homepage') }}"><img src="../assets/img/logo/logo.png" alt="nbinafnts&toddlers"/></a>
                            </div>
                            <!-- /Logo -->

                            <!-- Header search -->
                            <div class="header-search col-md-6  col-sm-5">                               
                                      <form action="#" class="search-form">
                                            <div class="search-selectpicker form-group selectpicker-wrapper col-sm-4 no-padding">
                                                <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Search In Categories">
                                                    <option>Baby Clothes</option>
                                                    <option>Kids Clothes</option>
                                                    <option>Boys Clothes </option>
                                                    <option>Girls Clothes </option>
                                                    <option>Casual</option>
                                                    <option>Unisex </option>
                                                    <option>Accessories </option>
                                                </select>
                                            </div>
                                            <div class="no-padding col-sm-8 search-cat">
                                                <label>
                                                    <span class="screen-reader-text">Search for:</span>
                                                    <input type="search" title="Search for:" name="s" value="" placeholder="Search for a Category, Brand or Product" class="search-field">
                                                </label>
                                                <input type="submit" value="Search" class="search-submit">
                                            </div>
                                        </form>                               
                            </div>
                            <!-- /Header search -->

                            <!-- Header shopping cart -->
                            <div class="header-cart col-md-3  col-sm-4">
                                <div class="cart-wrapper">
                                    <a href="{{ route('cart') }}" class="btn cart-btn default-btn">
                                        <i class="fa fa-shopping-cart blue-color"></i>
                                        <span style="color: rgba(132, 26, 132, 0.96);"><b> Basket: @if(request()->session()->has('cart')) ({{request()->session()->get('cart')->totalQuantity}} Item) @elseif (!request()->session()->has('cart')) (Your Cart is empty) @endif</b></span> <span class="blue-color"> <strong> </strong> </span>
                                    </a>                                  
                                </div>                            
                                
                            </div>
                            <!-- Header shopping cart -->
                        </div>
                    </article>

                    <article class="header-navigation" style="background-color: orange;">
                        <div class="container theme-container ">       
                            <nav class="navbar navbar-default product-menu"> 
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#product-menu" >
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>                               
                                </div>
                                <div class="collapse navbar-collapse no-padding" id="product-menu">
                                    <ul class="nav navbar-nav">
                                        <li><a href="baby-clothes">Baby Clothes</a></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids Cloth <span class="caret"></span></a>               
                                            <div class="dropdown-menu mega-dropdown-menu">
                                                <div class="">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li><a href="#all" role="tab" data-toggle="tab">All</a></li>
                                                        <li><a href="#girls" role="tab" data-toggle="tab">Girl</a></li>
                                                        <li  class="active"><a href="#boys" role="tab" data-toggle="tab">Boy</a></li>
                                                        <li><a href="#specials" role="tab" data-toggle="tab">New Arrivals</a></li>
                                                    </ul>  
                                                    <!-- Tab panes -->
                                                    <div class="tab-content light-bg">
                                                        <div class="tab-pane fade" id="all">
                                                            <div class="block-bg">                                                            
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Casual Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">0 to 6 months</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 months to 1 year</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">1 to 2 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">4 to 6 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="girls">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Casual Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">0 to 6 months</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 months to 1 year</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">1 to 2 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">4 to 6 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade  active in" id="boys">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Category</h2>                                                                
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">ShirtsT-Shirts</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pajamas</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Party Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Casual Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Night Wear</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Inner Wear</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Age</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">0 to 6 months</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">6 months to 1 year</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">1 to 2 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">2 to 4 years</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">4 to 6 years</a> </li>
                                                                            <li> <a href="#"> <strong> Combo Packs</strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Boys Clothes </strong> </a> </li>
                                                                            <li> <a href="#"> <strong> On Sale- Girls Clothes </strong> </a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6  menu-block">
                                                                    <div class="sub-list">
                                                                        <h2 class="title-2 sub-title-small">Shop by Colors</h2>
                                                                        <ul>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Black</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Blue</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Green</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Red</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Orange</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">Pink</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">White</a> </li>
                                                                            <li> <i class="fa fa-angle-right pink-color"></i> <a href="#">All</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6  menu-block  menu-block-img no-padding">
                                                                    <div class="title-wrap">
                                                                        <h2 class="section-title">
                                                                            <span>
                                                                                <span class="funky-font blue-tag">Sale </span> 
                                                                                <span class="italic-font">Today Deal</span>
                                                                            </span>
                                                                        </h2>                                                                   
                                                                        <h3 class="pink-color">Up To <strong> 30% </strong> Off</h3>      
                                                                        <hr class="dash-divider-small">
                                                                        <a href="#" class="blue-color title-link"> Shop Now <i class="fa fa-caret-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        
                                                        <div class="tab-pane fade" id="specials">
                                                            <div class="block-bg">
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product1.png">
                                                                            <div class="product-new">
                                                                                <div class="blue-new-tag new-tag">
                                                                                    <a href="#" class="funky-font">New</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>
                                                                                
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product2.png">                                                                            
                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>
                                                                                
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product3.png">
                                                                            <div class="product-new">
                                                                                <div class="green-new-tag new-tag">
                                                                                    <a href="#" class="funky-font">New</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>
                                                                                
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="product-details">
                                                                        <div class="product-media">                                                            
                                                                            <span class="hover-image white-bg">
                                                                                <img src="assets/img/product/cat-7.png" alt="">
                                                                            </span>
                                                                            <img alt="product-img" src="assets/img/product/product4.png">

                                                                            <div class="product-overlay">
                                                                                <a href="#" class="addcart blue-background fa fa-shopping-cart"></a>                                                                
                                                                                <a href="#" class="likeitem green-background fa fa-heart"></a>
                                                                                <a class="preview pink-background fa fa-eye" href="#product-preview" data-toggle="modal"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <div class="rating">                                                              
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star active"></span>
                                                                                <span class="star half"></span>
                                                                                <span class="star"></span>
                                                                            </div>
                                                                            <div class="product-name">
                                                                                <p><a href="#">Babyhug Frock Style Top And Leggings</a></p>
                                                                                
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <h4 class="pink-btn-small"> $50.00 </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                  
                                        </li>
                                        <li><a href="ijab">Baby Ijab</a></li>                                      
                                        <li><a href="footwears">Footwear</a></li>
                                        <li><a href="boys">Boys</a></li>
                                        <li><a href="girls">Girls</a></li>
                                        <li><a href="accessories">Baby Gear & Accessories</a></li>
                                        <li><a href="christening">Christening Dresses</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Gifts <span class="caret"></span></a>
                                            <ul class="dropdown-menu ">
                                                <li><a href="#">Gift for Babies </a></li>
                                                <li><a href="#">Gift for Kids</a></li>
                                                <li><a href="#">Toys</a></li>
                                                <li><a href="#">Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Offers</a></li>   
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </article>

                </section> 
            </header>
            <!-- /Header -->