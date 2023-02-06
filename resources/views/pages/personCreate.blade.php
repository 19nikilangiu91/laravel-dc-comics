@extends('layouts.main-layout')

@section('content')
    
    <h1>Create a New Person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="firstName">First Name</label>
        <input type="text" name="first_name">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="last_name">
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="date_of_birth">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="Create a New Person">
    </form>

@endsection