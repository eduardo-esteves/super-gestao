<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(string $user, string $password) {
        return view('site.contato', [
            'user'      => $user,
            'password'  => $password,
        ]);
    }
}
