@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <a href="{{ route('person.create') }}">
        <h2>Create a New Person</h2>
    </a>
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
        <a href="{{ route('person.edit', $person) }}" class="edit">
            EDIT
        </a>
        <a href="{{ route('person.delete', $person) }}" class="delete">X</a>
        <br>
        @endforeach
    </ul>

@endsection