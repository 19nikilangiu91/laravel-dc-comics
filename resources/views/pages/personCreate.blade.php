@extends('layouts.main-layout')

@section('head')
    <title>Person Create</title>

@section('content')
    
    <h1>Create a New Person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="firstName">First Name</label>
        <input class="name" type="text" name="first_name">
        <br>
        <label for="lastName">Last Name</label>
        <input class="surname" type="text" name="last_name">
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input class="birth" type="date" name="date_of_birth">
        <br>
        <label for="height">Height</label>
        <input class="height" type="number" name="height">
        <br>
        <input class="button" type="submit" value="Create a New Person">
    </form>

@endsection