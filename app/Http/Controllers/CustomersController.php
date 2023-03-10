<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\View\View
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
    public function create(): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\View\View
    {
        return view('app.customers.create', [
            'customer' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):  \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
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
     * @param  Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\View\View
    {
        return view('app.customers.show', [
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer): \Illuminate\Contracts\Foundation\Application | \Illuminate\Http\Response |
        \Illuminate\View\View
    {
        return view('app.customers.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer): \Illuminate\Contracts\Foundation\Application |
        \Illuminate\Http\Response | \Illuminate\Http\RedirectResponse
    {
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

        $customer->update($request->all());
        return redirect()->route('customers.show', ['customer' => $customer->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer): \Illuminate\Contracts\Foundation\Application |
        \Illuminate\Http\Response | \Illuminate\Http\RedirectResponse
    {
       $customer->delete();
       return redirect()->route('customers.index');
    }

    public function search()
    {
        return 'Olá search';
    }
}
