<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Jobs\SendMailContact;
use App\Models\Contact;
use Throwable;

class BorisController {

    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }


    public function showBorisContact(){
        return view('Boris');
    }
}
