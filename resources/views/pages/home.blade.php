@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <li>
                First Name: {{ $person -> first_name }}<br>
                Last Name: {{ $person -> last_name }}<br>
                Date of Birth: {{ $person -> date_of_birth }}<br>
                Height: {{ $person -> height }} cm <br>
                <br>
            </li>
        @endforeach
    </ul>

@endsection