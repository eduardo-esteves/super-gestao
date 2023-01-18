<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\Contracts\View\View
    {
        $orders = Order::paginate(10);
        return view('app.orders.index', [
            'orders'    => $orders,
            'request'   => $request->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\Contracts\View\View
    {
        $customers = Customer::all();

        return view('app.orders.create', [
            'order'     => [],
            'customers' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\Http\RedirectResponse
    {
        $rules = ['customer_id' => 'exists:customers,id'];
        $msg = ['customer_id.exists' => 'O cliente informado não existe'];

        $request->validate($rules, $msg);

        $order = new Order();
        $order->customer_id = $request->input('customer_id');
        $order->save();

        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
