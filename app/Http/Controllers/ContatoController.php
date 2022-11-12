<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(string $user, string $password) {
        echo "user: {$user} e password {$password}";
    }
}
