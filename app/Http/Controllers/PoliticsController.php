<?php

namespace App\Http\Controllers;

use App\Models\Politics;
use Illuminate\Http\Request;

class PoliticsController extends Controller
{

    public function getAllPolitics(){
        return json_encode(Politics::getAllPolitics());
    }

    public function getPoliticFromId(Request $request){
        return json_encode(Politics::getPoliticFromId($request->id));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, politics $politics)
    {
        //
    }

    public function destroy(politics $politics)
    {
        //
    }
}
