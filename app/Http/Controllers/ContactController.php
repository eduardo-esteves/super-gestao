<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        var_dump($_GET);
        return view('site.contact');
    }
}
