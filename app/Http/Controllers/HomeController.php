<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $reason_contact = [
            ''  => 'Qual o motivo do contato?',
            '1' =>  'Dúvida',
            '2' =>  'Elogio',
            '3' =>  'Reclamação',
        ];

        return view('site.index', [
            'reason_contact' => $reason_contact
        ]);
    }
}
