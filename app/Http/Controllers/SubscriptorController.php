<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriptor;

class SubscriptorController extends Controller
{
	/**
	 * Se almacena toda la información
	 * URL : subscriptor
	 * Method: POST
	 */
	public function store(Request $request){
		$find = Subscriptor::where('email', $request->email)->first();

        if(empty($find)){
            $subscriptor          = new Subscriptor;
            $subscriptor->email   = $request->email;
            $subscriptor->save();
        }
        return response()->json([
        	'message'	=>'Registrado exitosamente.'
        ], 200);
	}
}
