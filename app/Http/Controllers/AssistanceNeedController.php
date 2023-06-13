<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistance_need;
use App\Models\Disaster;

class AssistanceNeedController extends Controller
{
    public function getNeeds(){
        $needs = Assistance_need::with('disaster.barangay','disaster.event')->get();
        $disaster = Disaster::with('barangay', 'event')->get();
        return response()->json([
            'need' => $needs,
            'disaster' => $disaster
        ]);

    }

    public function addNeeds(Request $request){
        $need = new Assistance_need;
        $need->disasterId = $request->disasterId;
        $need->quantity = $request->quantity;
        $need->unit = $request->unit;
        $need->amount = $request->amount;
        $need->save();
    }

    public function deleteNeeds(Request $request){
        $need = Assistance_need::where('id', $request->id)->first();
        $need->delete();
    }
}
