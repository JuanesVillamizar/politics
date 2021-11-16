<?php

namespace App\Http\Controllers;

use App\Models\Politics_party;
use Illuminate\Http\Request;

class PoliticsPartyController extends Controller
{

    public function getAllPartyPolitics(){
        return json_encode(Politics_party::getAllPartyPolitics());
    }

    public function getPoliticPartyFromId(Request $request){
        return json_encode(Politics_party::getPartyPoliticsFromId($request->id));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, politics_party $politics_party)
    {
        //
    }

    public function destroy(politics_party $politics_party)
    {
        //
    }
}
