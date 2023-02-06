@extends('layouts.main-layout')

@section('head')
    <title>Edit Person</title>

@section('content')
    
    <h1>Edit a Person</h1>
    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf
        <label for="firstName">First Name</label>
        <input class="name" type="text" name="first_name" value={{$person->first_name}}> 
        <br>
        <label for="lastName">Last Name</label>
        <input class="surname" type="text" name="last_name" value={{$person->last_name}}>
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input class="birth" type="date" name="date_of_birth" value={{$person->date_of_birth}}>
        <br>
        <label for="height">Height</label>
        <input class="height" type="number" name="height" value={{$person->height}}>
        <br>
        <input class="button" type="submit" value="Update a New Person">
    </form>

@endsection