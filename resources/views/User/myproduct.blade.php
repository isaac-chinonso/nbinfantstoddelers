@extends('Layout.master1')    
@section('title')
My Products || Nbinfants&toddlers
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
                                <span class="funky-font blue-tag">Nb </span> 
                                <span class="italic-font">infants&toddlers</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> My Products</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  >   >  <span class="blue-color">myProducts </span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <article  class="container theme-container"> 
                <section class="product-category">
                    <div class="row">
                        <!-- Sidebar Start -->
                    <aside class="col-md-4 col-sm-4 space-bottom-20">                        
                        <div class="blog-sidebar-widget light-bg default-box-shadow">
                            <h4 class="widget-title blue-bg"> <span>  Account  </span> </h4>
                            <div class="blog-widget-content">
                                <ul>
                                    <li  class="accout-item"><a href="#"> Account Information </a></li>
                                    <li  class="accout-item active"><a href="{{ route('myaccount') }}">My Account</a></li> 
                                    <li  class="accout-item"><a href="{{ route('post_product') }}">Post Product</a></li>                                     
                                    <li  class="accout-item"><a href="{{ route('myproduct') }}">Manage Products</a> <strong class="pull-right">( {{ $products }} )</strong></li>
                                    <li  class="accout-item"><a href="#">Order History</a></li>
                                    <li  class="accout-item"><a href="#">Reviews and Ratings</a></li>
                                </ul>
                            </div>
                        </div>                      
                    </aside>
                    <!-- / Sidebar Ends --> 
                        <aside class="col-md-8 col-sm-7">   

                            <!-- Product Category Start -->
                            <section id="product-category" class="space-bottom-45">                
                                <div class="light-bg margin-30 sorter">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="view-as col-md-5 col-sm-4">
                                                <span>View as:</span>
                                                <div class="inline-block">
                                                    <ul class="nav-tabs tabination">
                                                        <li>
                                                            <a data-toggle="tab" href="#grid-view" aria-expanded="true">                                                    
                                                                <i class="fa fa-th-large"></i>
                                                            </a>
                                                        </li>
                                                        <li  class="active">
                                                            <a data-toggle="tab" href="#list-view" aria-expanded="false">
                                                                <i class="fa fa-th-list"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sort-by col-md-7 col-sm-8 no-padding">
                                                <span>Sort By:</span>
                                                <div class="inline-block">
                                                    <form class="filter-form">  
                                                        <div class="form-group selectpicker-wrapper">
                                                            <select
                                                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                                data-toggle="tooltip" title="Best Sellers">
                                                                <option>Most Popular</option>
                                                                <option>Latest Items</option>
                                                                <option>Best Sellers</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="show-as col-md-4 col-sm-4 no-padding text-right">
                                                <span>Show:</span>
                                                <div class="inline-block">
                                                    <form class="filter-form">  
                                                        <div class="form-group selectpicker-wrapper">
                                                            <select
                                                                class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                                data-toggle="tooltip" title="16">
                                                                <option>20</option>
                                                                <option>24</option>
                                                                <option>All</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                        @foreach($product as $prod)
                                            <div class="col-md-4  col-sm-6 clear-box">
                                                <div class="product-details">
                                                    <div class="product-media light-bg">
                                                        <span class="hover-image light-bg">
                                                        <img src="../upload/images/{{ $prod->image->first()->source }}" alt="{{ $prod->title }}">
                                                        </span>
                                                        <img src="../upload/images/{{ $prod->image->first()->source }}" alt="{{ $prod->title }}">
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
                                                            <p> 
                                                                <a href="#">{{ $prod->title }}</a> <br>
                                                                <small>Size: {{ $prod->size }}</small> |
                                                                <small>Type: {{ $prod->type }}</small> | <br>
                                                                <small>Quantity: {{ $prod->quantity }}</small> |
                                                                <small>Brand: {{ $prod->brand }}</small> <br>
                                                                <small>Posted: {{ $prod->created_at->diffForHumans() }}</small>
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
                                    <div id="list-view" class="tab-pane fade  active in" role="tabpanel">
                                    @foreach($product as $prod)
                                        <div class="list-category-details">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="product-media light-bg">
                                                        <span class="hover-image light-bg">
                                                            <img src="../upload/images/{{ $prod->image->first()->source }}" alt="{{ $prod->title }}">
                                                        </span>
                                                        <img src="../upload/images/{{ $prod->image->first()->source }}" alt="{{ $prod->title }}">
                                                        <div class="product-new">
                                                            <div class="blue-new-tag new-tag">
                                                                <a class="funky-font" href="#">New</a>
                                                            </div>
                                                        </div>                                            
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
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
                                                                </ul>
                                                            </div>
                                                        </div>                                            
                                                        <div class="product-name">
                                                            <a href="#">{{ $prod->title }}</a> 
                                                            <small>Size: {{ $prod->size }}</small> |
                                                            <small>Type: {{ $prod->type }}</small> | 
                                                            <small>Quantity: {{ $prod->quantity }}</small> |
                                                            <small>Brand: {{ $prod->brand }}</small><br>
                                                            <small>Posted: {{ $prod->created_at->diffForHumans() }}</small>                                         
                                                        </div>
                                                        <div class="product-price">
                                                            <h4 class="pink-btn-small">${{ number_format($prod->price, 0, '.', ', ') }} </h4>
                                                        </div>
                                                        <div class="product-discription">
                                                            <p>{{ $prod->description }}</p>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <button class="btn btn-success btn-sm">Edit</button>
                                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $prod->id }}">Delete</button>
                                                            
                                                              <!-- sample modal content -->
                                                              <div id="delete{{ $prod->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                      <div class="modal-content">
                                                                          <div class="modal-header">
                                                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                              <h4 class="modal-title" id="myModalLabel">Delete this Product</h4>
                                                                          </div>
                                                                          <div class="modal-body">
                                                                              <h4>Confirm Delete</h4>
                                                                              <p>Are you sure you want to delete <strong>{{ $prod->title }}</strong></p>
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                              <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Close</button>
                                                                              <a href="{{ route('deleteproduct',$prod->id) }}" class="btn btn-danger waves-effect waves-light">Yes</a>
                                                                          </div>
                                                                      </div><!-- /.modal-content -->
                                                                  </div><!-- /.modal-dialog -->
                                                              </div><!-- /.modal -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                         
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="light-bg sorter">
                                    <div class="col-md-6 col-sm-12 show-items">                
                                        <span>Showing Items : {{ $products }}</span>
                                    </div>
                                    
                                </div> 
                                                 
                            </section>
                            <!-- / Product Category Ends -->
                        </aside>    
                    </div>
                </section>
            </article>


            <!-- / CONTENT AREA -->

        @endsection