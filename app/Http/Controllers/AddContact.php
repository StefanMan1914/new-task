<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AddContact extends Controller
{
    function addContact(Request $req){

        $contact = new Contact;
        $contact->first_name=$req->first_name; //Adds a contact to database by getting info from form
        $contact->last_name=$req->last_name;
        $contact->email=$req->email;
        $contact->save();
        return redirect('contacts');

    }
}
