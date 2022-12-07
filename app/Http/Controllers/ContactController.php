<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;

class ContactController extends Controller
{
    public function index() {
        return view('site.contact');
    }

    public function saveContact(Request $request) {
        //dd($request->post());

        $request->validate([
            'name'      => 'required|min:3|max:100',
            'phone'     => 'required',
            'email'     => 'required',
            'message'   => 'required',
            'reason_contact' => 'required',
        ]);

        $contact            = new SiteContact();
        $contact->name      = $request->input('name');
        $contact->phone     = $request->input('phone');
        $contact->email     = $request->input('email');
        $contact->message   = $request->input('message');
        $contact->reason_contact = $request->input('reason_contact');

        $contact->save();
    }
}
