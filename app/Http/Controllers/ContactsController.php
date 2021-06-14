<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    function showContacts(){
        $data = Contact::all();  //gets all contacts from database and sends it to view as json
        return view('contacts', ['contact'=>$data]);    
    }
}
