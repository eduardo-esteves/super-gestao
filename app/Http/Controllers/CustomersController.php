<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Contracts\Foundation\Application | \Illuminate\View\View
    {
        $customers = Customer::paginate(10);

        return view('app.customers.index', [
            'customers' => $customers,
            'request'   => $request->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): \Illuminate\Contracts\Foundation\Application | \Illuminate\View\View
    {
        return view('app.customers.create', [
            'customers' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):  \Illuminate\Contracts\Foundation\Application |
        \Illuminate\Http\RedirectResponse
    {
        //dd($request->all());
        $rules = [
            'name'              => 'min:10|max:100',
            'ocupation'         => 'min:5|max:100',
            'age'               => 'integer',
            'gender'            => 'size:1',
            'married'           => 'boolean',
        ];

        $msg = [
            'name.min'          => 'Deve have ao menos 3 caracteres',
            'name.max'          => 'Máximo de 100 caracteres',
            'ocupation.min'     => 'Minímo de 100 caracteres',
            'age.integer'       => 'Digite um valor inteiro',
            'gender.size'       => 'Informe F ou M',
            'married.boolean'   => 'Escolha uma entre as opções',
        ];

        $request->validate($rules, $msg);

        Customer::create($request->all());

        return redirect()->route('customers.index');
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
