<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PetRequest;
use App\Pet;

class PetController extends Controller
{
    public function index()
    {
        $animal = Pet::paginate(10);

        return view('pet.index', compact('animal'));
    }

    public function show($id)
    {
        $animal = Pet::with('person')->with('photo')->where('id', $id)->get();

        return $animal;
        // return view('pet.show', compact('animal'));
    }

    public function create()
    {
        return view('pet.create');
    }

    public function store(PetRequest $request)
    {   
        $pet = Pet::create($request->all());

        return redirect(action('PetController@index'));
    }

}

