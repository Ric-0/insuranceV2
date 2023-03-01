<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Submission;
use Illuminate\Http\Request;

class ThomasController extends Controller
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    
    public function showForm()
    {
        return view('thomas');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function formContact(Request $request)
    {
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
