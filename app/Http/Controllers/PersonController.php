<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;
use App\Http\Requests\PersonRequest;

class PersonController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->input('name');
        $person = Person::with('pets.photo')
        ->where('first_name', 'LIKE', '%'.$search.'%' )
        ->orWhere('surname','LIKE','%'.$search.'%')
        // ->orWhere('pets', 'LIKE', '%'.$search.'%')
        ->get();
        // return $person;
        return view('home', compact('person'));

        // leftJoin('pets', 'people.id', '=', 'person_id')
    }

    public function show($id)
    {
       $person = Person::with('pets.photo')
       ->where('id', $id)
       ->get();

    //    return $person;
       return view('person.show', compact('person'));
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(PersonRequest $request)
    {
        $person = Person::create($request->all());

        return redirect(action('PersonController@index'));
    }
}
