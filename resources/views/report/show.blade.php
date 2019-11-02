@extends('layout')

@section('content')

<h1>Reports:</h1>

<?php //dd($person) ?>
@foreach ($report as $r)

<div>
    <h4>Name:</h4>{{$r->pet->name}}
    <h4>Date of appointment: {{$r->date}} </h4>
    <h4>Summary: {{$r->report}} </h4>
    <a href = "{{action('ReportsController@create', $r->pet->id)     }}">Create a new report: </a>
</div>

@endforeach


@endsection