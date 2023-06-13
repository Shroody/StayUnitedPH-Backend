<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;
use App\Models\Disaster;

class DisasterController extends Controller
{
    public function getDisasterDetails(){
        $maps = Maps::with('events')->get();
        $disaster = Disaster::with('barangay', 'event')->get();
        return response()->json([
            'maps' => $maps,
            'disaster' => $disaster
        ]);
    }

    public function addDisasterInfo(Request $request){
        $disaster = new Disaster;
        $disaster->barangayId = $request->barangayId;
        $disaster->eventId = $request->disasterId;
        $disaster->affected_families = $request->numFamily;
        $disaster->save();

    }

    public function deleteDisaster(Request $request){
        $disaster = Disaster::where('id', $request->id)->first();
        $disaster->delete();

    }

    public function addParticipants(Request $request){
        $disaster = Disaster::where('id', $request->id)->first();
        $disaster->total_participants = $request->total_participants;
        $disaster->save();
    }

    public function getDisasterInfo(){
        $disaster = Disaster::with('barangay', 'event')->get();
        return response()->json($disaster);
    }


}
