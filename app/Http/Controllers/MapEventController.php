<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapEvent;

class MapEventController extends Controller
{
    public function addEvent(Request $request){
        $event = new MapEvent;
        $event->date_event = $request->date;
        $event->tittle = $request->title;
        $event->event = $request->event;
        $event->type = $request->type;
        $event->map_id = $request->id;
        $event->save();


    }
}
