<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class DeleteContact extends Controller
{
    function deleteContact($id){
        $data=Contact::find($id);  //gets id from the selected contact and deletes it from database
        $data->delete();
        return redirect('contacts');
    }
}
