@extends('Layout.master1')    
@section('title')
Pay Now || Nbinfants&toddlers
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
                        <h3 class="sub-title"> Pay Now</h3>
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
                    <div class="cart-collaterals space-20">
                        <div class="row">
                          <div class="col-md-8">
                            <script src="https://js.stripe.com/v3/"></script>
                              <h3>Pay Now</h3>
                              <form action="/charge" method="post" id="payment-form">
                                <div class="form-row">
                                  <label for="card-element">
                                    Credit or debit card
                                  </label><br><br>
                                  <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                  </div>

                                  <!-- Used to display form errors. -->
                                  <div id="card-errors" role="alert"></div>
                                </div><br><br>
                                <div>
                                  <button class="btn btn-primary">Submit Payment</button>
                                </div>
                              </form>
                          </div>

                          <div class="col-md-4">
                            @if(request()->session()->has('cart'))
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

    <script>
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
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '16px',
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
      var card = elements.create('card', {style: style});

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

      // Submit the form with the token ID.
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
    </script>
      
  @endsection


