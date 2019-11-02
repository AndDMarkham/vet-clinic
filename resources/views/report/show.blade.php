@extends('layout')

@section('content')

<h1>Report on: {{$report->pet->name}}</h1>

<?php //dd($person) ?>
@foreach ($report as $r)

<div>
    <h4>Name:</h4>{{$r->pet->name}}
        {{-- <h4>Species:</h4>{{$p->pet->species}}
        <h4>Breed:</h4>{{$p->pet->breed}}
        <h4>Weight:</h4>{{$p->pet->weight}}
        <h4>Age:</h4>{{$p->pet->age}} --}}
    
    <h4>Date of appointment: {{$r->date}} </h4>
    <h4>Summary: {{$r->report}} </h4>
</div>

@endforeach


@endsection