<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\MeasuredUnit;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
    {
        $products = Product::paginate(2);

        return view('app.products.index', [
            'products' => $products,
            'request'   => $request->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
    {
        $measured_units = MeasuredUnit::all();
        return view('app.products.create', compact('measured_units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):  \Illuminate\Contracts\Foundation\Application|
    \Illuminate\View\View|\Illuminate\Http\RedirectResponse
    {
        $rules = [
            'name'              => 'min:3|max:100',
            'description'       => 'min:3|max:100',
            'pounds'            => 'integer',
            'measured_unit_id'  => 'exists:measured_units,id',
        ];

        $msg = [
            'name.min'          => 'Deve have ao menos 3 caracteres',
            'name.max'          => 'Máximo de 100 caracteres',
            'description.min'   => 'Minímo de 100 caracteres',
            'pounds.integer'    => 'Digite um valor inteiro',
            'measured_unit_id.exists' => 'A unidade de medida não existe',
        ];

        $request->validate($rules, $msg);

        Product::create($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product): \Illuminate\Contracts\Foundation\Application |
    \Illuminate\View\View
    {
        return view('app.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
