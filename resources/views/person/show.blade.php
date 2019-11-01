@extends('layout')

@section('content')

<?php //dd($person) ?>
@foreach ($person as $p)

<div>
    <p>Name:</p>
    <h4>{{$p->first_name}} {{$p->surname}}</h4>
    <p>Address:</p>
    <h4>{{$p->address}}</h4>
    <p>Phone:</p>
    <h4>{{$p->phone}}</h4>
    <p>Email:</p>
    <h4>{{$p->email}}</h4>

    <h4>Pet details:</h4>
    @foreach ($p->pets as $pet)

    <div>
        <h4>Name:</h4>{{$pet->name}}
        <h4>Species:</h4>{{$pet->species}}
        <h4>Breed:</h4>{{$pet->breed}}
        <h4>Weight:</h4>{{$pet->weight}}
        <h4>Age:</h4>{{$pet->age}}
    </div>

    @endforeach

</div>

@endforeach



@endsection
