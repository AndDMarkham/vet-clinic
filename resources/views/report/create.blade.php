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

<form action="{{  action('ReportsController@store')  }}">
    @csrf

    <div class="form-group">
        <label for="first_name">Date</label>
        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="enter name...">

        <label for="email">Text</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="enter email...">

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection