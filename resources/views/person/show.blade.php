@extends('layout')

@section('content')

<h1>Create Person/Customer</h1>

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

<form action="{{  action('PersonController@store')  }}">
    @csrf

    <div class="form-group">
        <label for="first_name">Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="enter name...">

        <label for="surname">Surname</label>
        <input type="text" class="form-control" name="surname" id="surname" placeholder="enter surname...">

        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="enter address...">

        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone...">

        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="enter email...">

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection
