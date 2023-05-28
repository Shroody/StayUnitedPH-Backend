<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapShelter;
class MapShelterController extends Controller
{
    public function addShelter(Request $request){
        $event = new MapShelter;
        $event->Name = $request->Name;
        $event->map_id = $request->id;
        $event->Capacity = $request->Capacity;
        $event->save();
    }
}
