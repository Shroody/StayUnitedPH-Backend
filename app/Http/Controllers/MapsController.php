<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;

class MapsController extends Controller
{
    public function addCoordinates(Request $request){
        $coordinate = new Maps;
        $coordinate->long = $request->y;
        $coordinate->lati = $request->x;
        $coordinate->name = $request->name;
        $coordinate->save();
    }

    public function getCoordinate($name){

        $coordinate = Maps::where('name', $name)->with(['events','shelters'])->first();
        return response()->json($coordinate);
    }


}
