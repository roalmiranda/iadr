<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventDetail;

class EventController extends Controller
{
    public function list(){
        return view('events.list');
    }
    /**
     * Lista de Eventos - IADR
     */
    public function eventSearch($id = null, $name = ''){
        $data = Event::select('events.*')
                        ->with('area')
                        ->where('event_id', $id)
                        ->where('state', 1)
                        ->first();
        $data_detail = EventDetail::where('event_id', $id)
                        ->where('state', 1)
                        ->get();
        return view('events.search',[
            'data'         =>  $data,
            'data_detail'  =>  $data_detail
        ]);
    }
}
