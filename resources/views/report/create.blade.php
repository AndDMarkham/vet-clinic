@extends('layout')

@section('content')

<h1>Create a Report</h1>

{{-- Errors --}}

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- <form action="{{  action('ReportsController@store',$report->id)}}" method="post"> --}}
<form>
    @csrf

    <div class="form-group">
        <label for="date">Date</label>
        <input type="text" class="form-control" name="date" id="date" placeholder="enter date...">

        <label for="text">Text</label>
        <input type="text" class="form-control" name="text" id="text" placeholder="enter summary of appointment...">

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection