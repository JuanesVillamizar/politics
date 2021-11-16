<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function getAllPersons(){
        return json_encode(Person::getAllPersons());
    }

    public function getPersonFromId(Request $request){
        return json_encode(Person::getPersonFromId($request->id));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, Person $person)
    {
        //
    }

    public function destroy(Person $person)
    {
        //
    }
}
