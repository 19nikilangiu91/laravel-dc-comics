@extends('layouts.main-layout')

@section('content')
    
    <h1>Edit a Person</h1>
    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="first_name" value={{$person->first_name}}> 
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="last_name" value={{$person->last_name}}>
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="date_of_birth" value={{$person->date_of_birth}}>
        <br>
        <label for="height">Height</label>
        <input type="number" name="height" value={{$person->height}}>
        <br>
        <input type="submit" value="Update a New Person">
    </form>

@endsection