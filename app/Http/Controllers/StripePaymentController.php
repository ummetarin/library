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
        return view('stripe');
    }
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            'amount' => 1000, 
            'currency' => 'usd',
            'description' => 'Test payment',
            'source' => $request->stripeToken,
        ]);
        return back()->with('success', 'Payment successful!');
    }
}
