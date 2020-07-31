@extends('Layout.master1')    
@section('title')
wishlist || Nbinfants&toddlers
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
                                <span class="funky-font blue-tag">Shopping</span> 
                                <span class="italic-font">Wishlist</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> listed products in your Wishlist</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  > <span class="blue-color">Wishlist </span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <!-- Shopping Cart  Start -->
            <section id="shopping-cart" class="shopping-cart-wrap"> 
                <div class="theme-container container">
                    <div class="light-bg default-box-shadow">
                        <form class="cart-form">
                            <table class="product-table">
                                <thead>
                                    <tr>
                                        <th>Img</th>                                
                                        <th>Product Name</th>                                        
                                        <th>QTY</th>
                                        <th>Price</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Auth::user()->wishlist->count() )
                                    @foreach ($wishlists as $wishlist)
                                    <tr>
                                        <td class="image">
                                            <div class="white-bg cart-img">
                                                <a class="media-link" href="#"><img src="../upload/images//{{ $wishlist->product->image->first()->source }}" alt="{{$wishlist->product->title}}" width="50px" height="50px"></a> 
                                            </div>
                                        </td>
                                        <td class="description">
                                            <a href="#">{{$wishlist->product->title}}</a> 
                                            <p>Brand :{{$wishlist->product->brand}}</p>
                                            <p>Type : {{$wishlist->product->type}}</p>
                                            <a href="#" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                                        </td>
                                        <td class="quantity">
                                            <div class="quantity buttons-add-minus">
                                                <input type="button" class="minus" value="-">
                                                <input type="text" class="input-text qty text" title="Qty" value="02" name="cart" >
                                                <input type="button" class="plus" value="+">
                                            </div>
                                        </td>
                                        <td class="total"> <strong> £{{ number_format($wishlist->product->price, 0, '.', ', ') }} </strong> </td> 
                                    </tr>
                                    @endforeach
                                    @endif
                                    
                                    
                                </tbody>                               
                            </table>
                            <div class="continue-shopping">
                                <div class="shp-btn">
                                    <a class="blue-btn btn" href="{{ route('homepage') }}">Continue Shopping<i class="fa fa-caret-right"></i></a>
                                    <a class="green-btn btn" href="#">Proceed To Checkout<i class="fa fa-caret-right"></i></a>
                                </div>
                                <div class="cart-sub-total">
                                    <span>Subtotal:</span>
                                    <strong class="pink-color">$700</strong>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </section>
            <!-- / Shopping Cart  Ends -->

            

            

            <!-- / CONTENT AREA -->        @endsection