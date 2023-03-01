<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendMailContact;
use App\Models\Contact;
use Throwable;

class ManonController {

    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }


    public function showManonContact(){
        return view('manon');
    }
}
