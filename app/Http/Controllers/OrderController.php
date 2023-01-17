<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
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
        $orders = Order::all();
      
        return view('orders.index',compact('orders'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkout');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'detail' => 'required',
            'total' => 'required',
            'account_name' => 'required',
            'account_phone' => 'required',
            'account_address' => 'required',
        ]);
      
        Order::create($request->all());
       
        return redirect()->back()->with('success', 'Order created successfully.'); 
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show',compact('order'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit',compact('order'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'detail' => 'required',
            'total' => 'required',
            'account_name' => 'required',
            'account_phone' => 'required',
            'account_address' => 'required',
        ]);
      
        $order->update($request->all());
      
        return redirect()->route('orders.index')
                        ->with('success','Order updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
       
        return redirect()->route('orders.index')
                        ->with('success','Order deleted successfully');
    }
}