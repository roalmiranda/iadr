<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
	/**
	 * Se almacena toda la información
	 * URL : contacto-mensaje
	 * Method: POST
	 */
	public function store(Request $request){
		$contact          = new Contact;
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return response()->json([
        	'message'	=>'Registro creado exitosamente.'
        ], 200);
	}
}
