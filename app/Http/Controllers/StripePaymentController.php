<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use Stripe;

class StripePaymentController extends Controller
{
    public function stripe(){
    	return view('stripe');
    }

    public function stripePost(Request $request){
    	Stripe\Stripe::setApikey(env('STRIPE_SECRET'));
    	Stripe\Charge::create([
    			"amount" => 100 * 100,
    			"currency" => "usd",
    			"source" => $request->stripeToken,
    			"description" => "Test payment from Em"
    		]);

    	Session::flash('success', 'Payment Successful');

    	return back();
    }
}
