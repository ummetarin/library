<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;



class StripePaymentController extends Controller


{

    public function stripe()
    {
        return view('stripe');  // Return the Stripe payment view
    }

    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create([
            'amount' => 1000, // Amount in cents
            'currency' => 'usd',
            'description' => 'Test payment',
            'source' => $request->stripeToken,
        ]);

        // Store transaction in your database or process it further

        return back()->with('success', 'Payment successful!');
    }
}
