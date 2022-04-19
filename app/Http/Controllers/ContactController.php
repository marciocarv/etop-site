<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->department = $request->department;
        $contact->message = $request->message;

        if(!$contact->save()){
            return redirect()->route('contato')->with('error', 'Não foi possível enviar a mensagem, tente entrar em contato pelo whatsapp: (63) 98483-5962');
        }

        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso, em breve entraremos em contato para te responder');
    }

    public function contact(){
        $contacts = Contact::all();

        return view('sistema.contact', ['contacts'=>$contacts]);
    }

    public function viewContact($id){
        $contact = Contact::findOrFail($id);

        return view('sistema.viewContact', ['contact'=>$contact]);
    }

    public function delete($id){
        $contact = Contact::findOrFail($id);

        if(!$contact->delete()){
            return redirect()->route('contact')->with('error', 'Não foi possível apagar a mensagem!');
        }

        return redirect()->route('contact')->with('success', 'Mensagem apagada com sucesso!');
    }
}
