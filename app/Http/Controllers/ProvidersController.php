<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('app.providers.index');
    }

    public function add(): \Illuminate\View\View
    {
        return view('app.providers.add');
    }

    public function list(): \Illuminate\View\View
    {
        return view('app.providers.list');
    }
}
