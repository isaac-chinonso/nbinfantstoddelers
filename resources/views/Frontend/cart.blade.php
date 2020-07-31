@extends('Layout.master1')    
@section('title')
Basket || Nbinfants&toddlers
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
                                <span class="italic-font">Basket</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> listed products in your Basket</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  > <span class="blue-color">Basket </span> </li>                             
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
                                @if (request()->session()->has('cart'))
                                    
                                @foreach($products->items as $product)
                                    <tr>
                                        <td class="image">
                                            <div class="white-bg cart-img">
                                                <a class="media-link" href="#"><img src="{{ URL::to('product') }}../upload/images//{{ $product['item']['image'] }}"></a> 
                                            </div>
                                        </td>
                                        <td class="description">
                                            <a href="#" style="text-transform: uppercase;">{{ $product['item']['title'] }}</a>
                                            <a href="{{ route('deleteitem',$product['id']) }}" class="remove pink-color"><i class="fa fa-times"></i> Remove </a>
                                        </td>
                                        <td class="quantity">
                                            <div class="quantity buttons-add-minus">
                                                <input type="button" class="minus" value="-">
                                                <input type="text" class="input-text qty text" title="Qty" value="{{ $product['quantity'] }}"><a href="{{ route('reduceitem',$product['item']['id']) }}">
                                                <input type="button" class="plus" value="+">
                                            </div>
                                        </td>
                                        <td class="total"> <strong> £ {{ number_format($product['price'],2) }}</strong> </td> 
                                    </tr>
                                    
                                     @endforeach
                                    @elseif (!request()->session()->has('cart'))
                                    NO ITEM
                                @endif
                                </tbody>  
                                                            
                            </table>
                            <div class="continue-shopping">
                                <div class="shp-btn">
                                    <a class="blue-btn btn" href="{{ route('homepage') }}">Continue Shopping<i class="fa fa-caret-right"></i></a>
                                    <a class="green-btn btn" href="{{ route('checkout',$product['id']) }}">Proceed To Checkout<i class="fa fa-caret-right"></i></a>
                                </div>
                                <div class="cart-sub-total">
                                    <span>Subtotal:</span>
                                    <strong class="pink-color">£ </strong>
                                </div>
                            </div>
                        </form>
                         
                    </div>
                    
                </div>
            </section>
            <!-- / Shopping Cart  Ends -->

            

            

            <!-- / CONTENT AREA -->      
  @endsection