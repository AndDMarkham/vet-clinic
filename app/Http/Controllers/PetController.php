<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {

        return 'hello';
        // $dogs = Pet::limit(10)->get();

        // return $dogs;
    }
}
