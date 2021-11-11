<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use Session;

class StripeController extends Controller
{
    //
    public function handleGet()
    {
        return view('home');
    }

    //Handle the payment with post method
    public function paymentPost(Request $request)
  {
      Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      Stripe\Charge::create ([
          "amount" => 100 * 150,
          "currency" => "myr",
          "source" => $request->stripeToken,
          "description" => "Test payment for carwash"
      ]);
      Session::flash('success', 'Payment successful!');
      return back();
    }
}