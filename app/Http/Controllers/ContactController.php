<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function get($id)
    {
        $shippers = Contact::where('shipper_id',$id)->orderBy('id', 'DESC')->get();

        return $shippers;
    }
}
