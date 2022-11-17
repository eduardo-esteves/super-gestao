<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function index() {
        $products = [
            0 => [
                'name'      => 'Prato',
                'maker'     => 'Gall',
                'price'     => 12.4
            ],
            1 => [
                'name'      => 'Chinelo',
                'maker'     => 'Matter',
                'price'     => 32.4
            ],
            2 => [
                'name'      => 'Camisa',
                'maker'     => 'Metteor',
                'price'     => 42.4
            ],
        ];
        return view('site.sobre-nos', compact('products'));
    }
}
