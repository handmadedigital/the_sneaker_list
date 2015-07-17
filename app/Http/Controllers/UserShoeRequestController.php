<?php

namespace HMD\Http\Controllers;

use HMD\Http\Requests\AcceptOrderRequest;
use HMD\Http\Requests\DeclineOrderRequest;
use HMD\User;
use Illuminate\Http\Request;

use HMD\Http\Requests;
use HMD\Order;
use HMD\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class UserShoeRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);

        $orders = $user->orders;

        return view('orders.user', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($order_number)
    {
        $order = Order::where('order_number', '=', $order_number)->first();

        return view('orders.individual.user', $order);
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

    public function postAcceptOrder(AcceptOrderRequest $request)
    {
        $order = Order::find($request->id);

        $order->status = 'accepted';
        $order->save();

        Flash::message('Order accepted');

        return redirect()->back();
    }

    public function postDeclineOrder(DeclineOrderRequest $request)
    {
        $order = Order::find($request->id);

        $order->status = 'declined';
        $order->save();

        Flash::message('Order declined');

        return redirect()->back();
    }
}
