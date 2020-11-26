		    @extends('layouts.app')

		    @section('content')
		    <div class="container">
		        <div class="row justify-content-center">
		            <div class="col-md-8">
		                <div class="card">
		                    <div class="card-header">{{ __('Subscription Payment Details') }}


		                    </div>

		                    @if (Auth::check()) 
    						 <div class="col-md-8">
		                    	<p>Please click the button to below to subscribe our full package. Our one time payment is Rs.100 only.
								<img class="img-fluid" src="/images/susbscr.jpg"/>
		                    	</p>

		                    </div>
		                    <div class="col-md-4">
		                    		<input id="checkout-button" class="btn btn-primary" type="submit" value="Submit">

		                    </div>
								
							@else()
								<div class="col-md-8">
		                    	<p>If you are already a registered member, please click here to <a href="/login">Login</a>
		                    	</p>
		                    	<p>If you are a Guest,Please register as a member  to SUBSCRIBE
								<a href="/register"><input id="checkout-button" class="btn btn-primary" type="submit" value="register"></a>
		                    	</p>

		                    </div>
		                    
							
							
							@endif	

		                    
		                        

													 
												 


	         
		                     
		                </div>
		            </div>
		        </div>
		      </div>


		 


		    @endsection
		 
	    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	  <script src="https://js.stripe.com/v3"></script>
	  <script type="text/javascript">

	  	$(document).ready(function() {


	  		 var stripe = Stripe('pk_test_51HrUv1KNXI3OiBsi1Da88sM6f0TQezQaAnMBJyMUH2PegvpsiY850mBnxZlKH4630I6pAoK9TB1RG47C4OegaqZd000gdfmsMt');

	var checkoutButton = document.querySelector('#checkout-button');
	checkoutButton.addEventListener('click', function () {
	  stripe.redirectToCheckout({
	    lineItems: [{
	      // Define the product and price in the Dashboard first, and use the price
	      // ID in your client-side code.
	      price: 'price_1HrYalKNXI3OiBsiNyVfXTVE',
	      quantity: 1
	    }],
	    mode: 'payment',
	    successUrl: 'http://noqq.local/stripe-success?session_id={CHECKOUT_SESSION_ID}',
	    cancelUrl: 'http://noqq.local/cancel'
	  });
	});


	  	});
	  	
	  
	  </script>
		    