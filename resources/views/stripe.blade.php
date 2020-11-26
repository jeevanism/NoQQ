    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Subscription Payment Details') }}</div>
                        
                        @if(Session::has('success'))

                             <div class="alert alert-success text-center">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                   <p>{{ Session::get('success') }}</p>
                             </div>

                             @endif
                                <form role="form" action={{ route('strie.payment') }} method="POST" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51HrUv1KNXI3OiBsi1Da88sM6f0TQezQaAnMBJyMUH2PegvpsiY850mBnxZlKH4630I6pAoK9TB1RG47C4OegaqZd000gdfmsMt" 
                                id="stripe-payment"
                                >
                                    @csrf  

                                    <div class="form-group row">
                                        <label for="namecard" class="col-md-4 col-form-label text-md-right">{{ __('Name on card') }}</label>
                                        <input id="namecard" type="text" class="namecard form-control @error('namecard') is-invalid @enderror" name="namecard" value="{{ old('namecard') }}" required autocomplete="namecard" autofocus>



                                    </div>

                                       <div class="form-group row">
                                        <label for="cardnumber" class="col-md-4 col-form-label text-md-right">{{ __('Card Number') }}</label>
                                        <input id="cardnumber" type="text" size="20" class=" cardnumber form-control @error('cardnumber') is-invalid @enderror" name="cardnumber" value="{{ old('cardnumber') }}" required autocomplete="cardnumber" autofocus>



                                    </div>


                                     <div class="form-group row">
                                        <label for="cvc" class="col-md-4 col-form-label text-md-right">{{ __('CVC or CVV') }}</label>
                                        <input id="cvc" type="text" placeholder="E.g: 347" size="5" class="cvc form-control @error('cvc') is-invalid @enderror" name="cvc" value="{{ old('cvc') }}" required autocomplete="cvc" autofocus>



                                    </div>


                                      <div class="form-group row">
                                        <label for="expirymonth" class="col-md-4 col-form-label text-md-right">{{ __('Expiry Month) }}</label>
                                        <input id="expirymonth" type="text" placeholder="MM" size="5" class="expirymonth form-control @error('expirymonth') is-invalid @enderror" name="expirymonth" value="{{ old('expirymonth') }}" required autocomplete="expirymonth" autofocus>



                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="expiryyear" class="col-md-4 col-form-label text-md-right">{{ __('Expiry Year) }}</label>
                                        <input id="expiryyear" type="text" placeholder="MM" size="5" class="expiryyear form-control @error('expiryyear') is-invalid @enderror" name="expiryyear" value="{{ old('expiryyear') }}" required autocomplete="expiryyear" autofocus>



                                    </div>

                                     <div class="form-group row">
                                        <div class="hide error">
                                                        <div class="alert alert-danger">
                                                            Please FIX the errors
                                                        </div>
                                         </div>


                                    </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Pay(₹100)Subscribe') }}
                                </button>
                            </div>
                        </div>

                                </form>


                                
                            </div>
                           



                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        $(function(){
            var $form = $(".validation");
            $('form.validation').bind('submit',function(e) {
                var $form = $(".validation"),
                inputVal = ['input[type=email]','input[type=password]','input[type=text]','input[type=file]','textarea'].join(','),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
         $inputs.each(function(i,el)){
            var $input =$(el);
            if($input.parent().addClass('has-error'));
            $errorStatus.removeClass('hide');
            e.preventDefault;

         }       
            });

            if(!$form.data('data-cc-on-file')){
                e.preventDefault();
                stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number:$('.cardnumber').val(),
                    cvc: $('.cvc').val(),
                    exp_month: $('.expirymonth').val(),
                    exp_year: $('.expiryyear').val()
                },stripeHandleResponse);

            }
        });

        function stripeHandleResponse(status, response){
            if(response.error){
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);

            }
            else {
                var toke = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hideen' name='stripeToken' value=' "+ token +"' /> ");
                $form.get(0).submit();
            }

        }
    </script>
 