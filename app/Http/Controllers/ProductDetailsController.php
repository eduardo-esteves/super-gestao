<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;
use App\Models\MeasuredUnit;

class ProductDetailsController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\View\View
    {
        $measured_units = MeasuredUnit::all();

        return view('app.product-details.create', [
            'measured_units' => $measured_units,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): void
    {
        ProductDetail::create($request->all());
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
     * @param  \App\Models\Product $product_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetail $product_detail): \Illuminate\View\View
    {
        $measured_units = MeasuredUnit::all();

        return view('app.product-details.edit', [
            'product_detail' => $product_detail,
            'measured_units' => $measured_units,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductDetail  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductDetail $product_detail): void
    {
        $product_detail->update($request->all());
        echo 'Atualização efetuada com sucesso!';
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
