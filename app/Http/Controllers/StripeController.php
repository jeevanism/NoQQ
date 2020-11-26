<?php

namespace App\Http\Controllers;

use App\Models\StripePayment;  
use Illuminate\Http\Request;
use Session;
use Stripe;
use Auth;
use DB;
 

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /**
     *  public function __construct()
    {
        $this->middleware('auth'); // if you want user to be logged in to use this function then uncomment this code.
    }
     */
    public function index()
    {
        //
            
         return view('stripepay');

    }

    /**
     * Show the form for  payment view.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageGet()
    {
        //
        return view('home');
    }

    /**
     * Handle the payment POST action
     */

    public function process(Request $request) {
        \Log::info($request->all());
        Stripe::setApiKey("sk_test_51HrUv1KNXI3OiBsi3bASZDARzLxD4ynxuCL2LD11B9hFxAuwSiTuGi0LwUbnUfdKBHkN0S4G5YpXJzOIE1vi9BwD00RSVQYA6D");
         dd($token = $request->stripeToken);
        $stripe = Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'USD',
            'amount' => $request->get('amount')

        ]);
        return $stripe;

    }

    public function managePost(Request $request){
        \Stripe\Stripe::setApiKey("sk_test_51HrUv1KNXI3OiBsi3bASZDARzLxD4ynxuCL2LD11B9hFxAuwSiTuGi0LwUbnUfdKBHkN0S4G5YpXJzOIE1vi9BwD00RSVQYA6D");
        \Stripe\Charge::create([
            "amount" => 100,
            "currency" => "inr",
            "source" => $request->stripeToken,
            "description" => "Subscription Test payment "

       ]);

        Session::flash('success','You successfully subscribed ');
        return back();

    }
    /**
        * Display Stripe Success Page 
        * Retrieve Stripe Customer values
        * @param Stripe return values
        * @return view
        */   
    public function stripeSuccess(Request $request){
       // dd($request);
            $user = Auth::user();
             
            $session_id = $request->input('session_id');
            
              $stripe = new \Stripe\StripeClient(
                    'sk_test_51HrUv1KNXI3OiBsi3bASZDARzLxD4ynxuCL2LD11B9hFxAuwSiTuGi0LwUbnUfdKBHkN0S4G5YpXJzOIE1vi9BwD00RSVQYA6D'
                    );
               $customer_object =  $stripe->checkout->sessions->retrieve(
  $session_id,
  []
);
        $customerID= $customer_object->customer;

         
        $successStripe = DB::table('users')
                ->where('id',$user->id)
                ->update(['status' => 5]); // 5 is the status for PAID members
        return view('stripe-success',[
                    'userName' => $user->name
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function show(Stripe $stripe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function edit(Stripe $stripe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stripe $stripe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stripe $stripe)
    {
        //
    }
}
