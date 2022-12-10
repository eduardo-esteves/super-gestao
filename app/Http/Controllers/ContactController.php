<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContact;

class ContactController extends Controller
{
    public function index() {
        $reason_contact = [
            ''  => 'Qual o motivo do contato?',
            '1' =>  'Dúvida',
            '2' =>  'Elogio',
            '3' =>  'Reclamação',
        ];

        return view('site.contact', [
            'reason_contact' => $reason_contact
        ]);
    }

    public function saveContact(Request $request) {
        //dd($request->post());

        $request->validate([
            'name'      => 'min:3|max:100',
            'phone'     => 'required',
            'email'     => 'email',
            'message'   => 'required',
            'reason_contact' => 'required|max:2000',
        ],
        [
            'name.min'                  => 'Nome deve ter no minímo de 3 caracteres',
            'name.max'                  => 'Nome deve ter no máximo de 100 caracteres',
            'phone.required'            => 'Informe o telefone ',
            'email.email'               => 'Informe um email válido',
            'message.required'          => 'Mensagem é obrigatório',
            'reason_contact.required'   => 'Informe o motivo do contato',
            'reason_contact.max'        => 'Motivo do contato deve ter no máximo 2000 caracteres'
        ]);

        $contact            = new SiteContact();
        $contact->name      = $request->input('name');
        $contact->phone     = $request->input('phone');
        $contact->email     = $request->input('email');
        $contact->message   = $request->input('message');
        $contact->reason_contact = $request->input('reason_contact');

        $contact->save();
        return redirect()->route('site.index');
    }
}
