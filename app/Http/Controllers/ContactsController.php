<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    function showContacts(){
        $data = Contact::all();
        return view('contacts', ['contact'=>$data]);    
    }
}
