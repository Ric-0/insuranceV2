<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendMailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Throwable;

class BaptisteController extends Controller
{
    private Contact $contact;



    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function showContact(){
        return view('Baptiste');
    }


    public function formContact(ContactRequest $request){
        try {
            $contact = $this->contact->createContact($request);
            $contact->save();
            dispatch(new SendMailContact($contact));
            return back()->with(['success' => 'Merci ! Vous allez bientôt recevoir un mail de confirmation concernant la transmission de vos informations.']);
        } catch (Throwable $e) {
            report($e);
            return back()->with(['error' => 'Erreur ! Il y a eu une erreur lors de l\'envoi de vos informations. Veuillez réessayer ultérieurement.']);
        }

    }

}
