<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProvidersController extends Controller
{
    public function index(): \Illuminate\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        return view('app.providers.index');
    }

    public function add(Request $request): \Illuminate\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        $msg_success = '';

        if ($request->input('_token')) {
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

            $msg_success = "Cadastro realizado com sucesso!";
        }

        return view('app.providers.add', ['msg_success' => $msg_success]);
    }

    public function list(): \Illuminate\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        return view('app.providers.list');
    }
}
