@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <a href="{{ route('person.create') }}">Create a New Person</a>
    <ul>
        @foreach ($people as $person)
        <a href="{{ route('person.show', $person) }}">
            <li>
                First Name: {{ $person -> first_name }}<br>
                Last Name: {{ $person -> last_name }}<br>
                Date of Birth: {{ $person -> date_of_birth }}<br>
                Height: {{ $person -> height }} cm <br>
            </li>
        </a>
        <a href="{{ route('person.edit', $person) }}">
            EDIT
        </a>
        <a href="{{ route('person.delete', $person) }}">X</a>
        @endforeach
    </ul>

@endsection