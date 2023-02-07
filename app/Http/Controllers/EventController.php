<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function list(){
        return view('events.list');
    }
    /**
     * Lista de Eventos - IADR
     */
    public function eventSearch($name=''){
        $data = 'Staff::first()';
        // return view('directory.search',[
        //     'data'  => $data
        // ]);
        return view('events.search');
    }
}
