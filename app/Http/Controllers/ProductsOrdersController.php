<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;

class ProductsOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function create(Order $order): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\Contracts\View\View
    {
        $products = Product::all();
        return view('app.products-orders.create', [
            'order'     => $order,
            'products'  => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order): \Illuminate\Contracts\Foundation\Application |
        \Illuminate\Http\Response | \Illuminate\Http\RedirectResponse
    {
        $rules = [
            'order_id'      => 'exists:orders,id',
            'product_id'    => 'exists:products,id',
        ];

        $msg = [
            'order_id.exists'   => 'O pedido informado não existe',
            'product_id.exists' => 'O produto informado não existe',
        ];

        $request->validate($rules, $msg);

        $product_order = new ProductOrder();

        $product_order->create([
            'order_id'      => $order->id,
            'product_id'    => $request->input('product_id'),
        ]);

        return redirect()->route('app.products-orders.create', ['order' => $order->id]);

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
