<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendMailContact;
use App\Models\Contact;
use Throwable;

class MatthieuController {

    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }


    public function showContactForm(){
        return view('matthieu');
    }
    

    public function formContactMail(ContactRequest $request){
        try {
            $contact = $this->contact->createContact($request);
            $contact->save();
            dispatch(new SendMailContact($contact));
            return back()->with(['success' => 'Merci ! Notre équipe fait tout son possible pour vous répondre au plus vite.']);
        } catch (Throwable $e) {
            report($e);
            return back()->with(['error' => 'Erreur ! Il y a eu une erreur lors de l\'envoi de vos informations. Veuillez réessayer ultérieurement.']);
        }

    }
}
