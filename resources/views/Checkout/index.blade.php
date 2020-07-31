@extends('Layout.master1')    
@section('title')
Checkout || Nbinfants&toddlers
@endsection

@section('extra-css')
<script src="https://js.stripe.com/v3/ "></script>
<style type="text/css">
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  background-color: white;
  padding: 7px 7px;
  border: 1px solid #ccc;
}

.StripeElement--focus {
  /*box-shadow: 0 1px 3px 0 #cfd7df;*/
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
#card-errors{
    color: #fa755a;
}
</style>
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
                                <span class="funky-font blue-tag">Check</span> 
                                <span class="italic-font">Out</span>
                            </span>
                        </h2>
                        <h3 class="sub-title"> listed products in your cart</h3>
                        <hr class="dash-divider">
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li><a href="#">Home</a>  > <span class="blue-color">Checkout</span> </li>                             
                        </ol>
                    </div>  
                </div>
            </section>
            <!-- / Breadcrumbs Ends -->

            <!-- Checkout  Start -->
            <section id="checkout" class="checkout-wrap"> 
                <div class="theme-container container">    
                <h3>Shipping Details</h3>  
                    <div class="cart-collaterals space-40">
                        <div class="row">
                          @if(request()->session()->has('cart'))
                            <div class="col-md-8 col-sm-7">
                              <form action="{{ route('checkoutstore') }}" method="POST" class="form-delivery">
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Address"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group selectpicker-wrapper">
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" title="City" name="city">
                                                <option>City</option>
                                                <option>City</option>
                                                <option>City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input class="form-control" type="text" name="postalcode" placeholder="Postal Code"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Phone Number"></div>
                                    </div> <br><br> 
                                </div>
                                <div class="pull-right">
                                      <button class="btn btn-success btn-sm waves-effect waves-light">Submit</button>
                                </div>
                                 @foreach($products->items as $product)
                                 <input type="hidden" name="product_id[]" value="{{ $product['item']['id'] }}">
                                  @endforeach
                                 <input type="hidden" name="_token" value="{{ Session::token() }}"> 
                            </form>  
                            </div>
                            <div class="col-md-4 col-sm-5">
                                    
                                    Total Cost of Item: {{ $products->totalCost }}

                                    <h3>LIST OF ITEMS</h3>
                                    @foreach($products->items as $product)
                                    NAME: {{ $product['item']['title'] }}<br>
                                    ID: {{ $product['item']['id'] }}<br>
                                    PRICE: {{ $product['price'] }}
                                    @endforeach
                                    @endif
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Checkout  Ends -->

            <!-- / CONTENT AREA -->
      
  @endsection

  @section('extra-js')

        <script>
            (function(){
                // Create a Stripe client.
                var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

                // Create an instance of Elements.
                var elements = stripe.elements();

                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                  base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"robotto", Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '12px',
                    '::placeholder': {
                      color: '#aab7c4'
                    }
                  },
                  invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                  }
                };

                // Create an instance of the card Element.
                var card = elements.create('card', {
                    style: style,
                    hidePostalCode: true
                });

                // Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');

                // Handle real-time validation errors from the card Element.
                card.addEventListener('change', function(event) {
                  var displayError = document.getElementById('card-errors');
                  if (event.error) {
                    displayError.textContent = event.error.message;
                  } else {
                    displayError.textContent = '';
                  }
                });

                // Handle form submission.
                var form = document.getElementById('payment-form');
                form.addEventListener('submit', function(event) {
                  event.preventDefault();


                  var option = {

                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('province').value,
                    address_zip: document.getElementById('postalcode').value
                  }

                  stripe.createToken(card).then(function(result) {
                    if (result.error) {
                      // Inform the user if there was an error.
                      var errorElement = document.getElementById('card-errors');
                      errorElement.textContent = result.error.message;
                    } else {
                      // Send the token to your server.
                      stripeTokenHandler(result.token);
                    }
                  });
                });


                function stripeTokenHandler(token) {
                      // Insert the token ID into the form so it gets submitted to the server
                      var form = document.getElementById('payment-form');
                      var hiddenInput = document.createElement('input');
                      hiddenInput.setAttribute('type', 'hidden');
                      hiddenInput.setAttribute('name', 'stripeToken');
                      hiddenInput.setAttribute('value', token.id);
                      form.appendChild(hiddenInput);

                      // Submit the form
                      form.submit();
                    }
            })();
        </script>
  @endsection


