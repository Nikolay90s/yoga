<?php

namespace App\Myclasses;

use App\Contact;

class  Contacts
{
    public function shoyContacts(){
        $contact = Contact::all();
        return $contact;
    }
}
