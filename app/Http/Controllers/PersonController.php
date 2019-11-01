<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;

class PersonController extends Controller
{
    
    public function index (Request $request)
    {
        $search = $request->input('name');
        $person = Person::where('first_name', 'LIKE', '%'.$search.'%' )
        ->orWhere('surname','LIKE','%'.$search.'%')
        ->get();
        return $person;
    }

}
