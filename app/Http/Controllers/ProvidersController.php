<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProvidersController extends Controller
{
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
    {
        return view('app.providers.index');
    }

    public function add(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View|\Illuminate\Http\RedirectResponse
    {
        $_msg = '';

        if ( $request->input('_token') && empty($request->input('id')) ) {
            $rules = [
                'name' => 'min:3|max:100',
                'email' => 'email',
                'uf'    => 'min:2|max:2',
            ];

            $msg = [
                'name.min'      => 'Deve have ao menos 3 caracteres',
                'name.max'      => 'Máximo de 100 caracteres',
                'email.email'   => 'Digite um email válido',
                'uf.min'        => 'Deve haver no minimo 2 caracteres',
                'uf.max'        => 'Deve haver no máximo 2 caracteres',
            ];

            $request->validate($rules, $msg);

            Provider::create($request->all());

            $_msg = "Cadastro realizado com sucesso!";
        }

        if( !empty($request->input('_token')) && !empty($request->input('id')) ) {
            $provider = Provider::find($request->input('id'));
            $provider->update($request->all());
            $_msg = "Fornecedor ID: {$provider->id} atualizado com sucesso!";

            return redirect()->route('app.providers.edit', [
                'msg'   => $_msg,
                'id'    => $provider->id,
            ]);
        }

        return view('app.providers.add', ['msg' => $_msg]);
    }

    public function list(Request $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
    {
        $name = $request->input('name') ?? 'abcde';

        $providers = Provider::where('name', 'like', '%'. $name .'%')
            ->orwhere('email', $request->input('email'))
            ->orwhere('uf', $request->input('uf'))
            ->get();

        return view('app.providers.list', ['providers' => $providers]);
    }

    public function edit($id, $msg = ''): \Illuminate\Contracts\Foundation\Application|\Illuminate\View\View
    {
        $provider = Provider::find($id);

        return view('app.providers.add', [
            'provider' => $provider,
            'msg'      => $msg,
        ]);
    }
}
