<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller {
    public function index() {
        $contacts = Contact::all();
        return view('contacts.list', compact('contacts'));
    }

    public function create() {
        return view('contacts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'country' => $request->get('country')
        ]);

        $contact->save();
        return redirect('/contacts')->with('success', 'Contato salvo!');
    }

    public function edit($id) {
        $contact = Contact::find($id);
        return view ('contacts.edit', compact('contact'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = Contact::find($id);

        $contact->first_name = $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->phone_number = $request->get('phone_number');
        $contact->city = $request->get('city');
        $contact->state = $request->get('state');
        $contact->country = $request->get('country');

        $contact->save();

        return redirect('/contacts')->with('success', 'Contato atualizado!');
    }

    public function destroy($id) {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contato apagado!');
    }
}
