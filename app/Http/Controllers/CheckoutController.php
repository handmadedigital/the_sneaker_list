<?php

namespace HMD\Http\Controllers;

use HMD\Commands\AddOrderCommand;
use Illuminate\Http\Request;

use HMD\Http\Requests;
use HMD\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_IPdo7v9gzewwq1xFDuE487n8");

        // Create the charge on Stripe's servers - this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                    "amount" => 1000, // amount in cents, again
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Example charge")
            );

            $this->dispatchFromArray(AddOrderCommand::class, [
                'brand' => Session::get('shoe.request')['brand'],
                'model' => Session::get('shoe.request')['model'],
                'size' => Session::get('shoe.request')['size'],
            ]);
        } catch(\Stripe\Error\Card $e) {
            // The card has been declined
        }

        return redirect()->route('thank.you');
    }

    public function getThankYou()
    {
        return view('thank-you');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
