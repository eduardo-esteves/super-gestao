<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $cod_error = $request->input('error');

        if ($cod_error == 1) {
            $error = "Usuário ou senha não existe";
        }else if ($cod_error == 2) {
            $error = "Erro de autenticação";
        }else {
            $error = [];
        }

        return view('site.login', [
            'title' => 'Login',
            'error' => $error,
        ]);
    }

    public function signIn( Request $request)
    {
        $validate = [
            'user'          => 'email',
            'password'      => 'min:8|max:100',
        ];

        $messageInfo = [
            'user.email'    => 'Informe um email válido',
            'password.min'  => 'Deve haver no minimo 8 caracteres',
        ];

        $request->validate($validate, $messageInfo);

        $email      = $request->input('user');
        $password   = $request->input('password');

        $user = new User();

        $data = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if( !isset($data->email) ) {
            return redirect()->route('site.login', ['error' => 1]);
        }

        session_start();

        $_SESSION['name']   = $data->name;
        $_SESSION['email']  = $data->email;

        return redirect()->route('app.clients');
    }
}

