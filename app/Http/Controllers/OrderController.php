<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::get();

        return $orders;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Order::create([
            "OrderDate" => $request->OrderDate,
            "OrderNumber" => $request->OrderNumber,
            "CustomerId" => $request->CustomerId,
            "TotalAmount" => $request->TotalAmount
        ])->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update([
            'OrderDate' => $request->OrderDate,
            'OrderNumber' => $request->OrderNumber,
            'CustomerId' => $request->CustomerId,
            'TotalAmount' => $request->TotalAmount,
        ]);
        return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        if ($order != null) {
            $order->delete();
            return "ok";
        } else {
            return "not ok";
        }
    }

    public function getOrderItems($id)
    {
        $order = Order::find($id);
        return $order->orderItems;
    }
}
