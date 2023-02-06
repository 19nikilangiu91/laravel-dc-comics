@extends('layouts.main-layout')

@section('content')
    
    <h1>Person</h1>
    <ul>
        <li>
            First Name: {{ $person -> first_name }}<br>
            Last Name: {{ $person  -> last_name }}<br>
            Date of Birth: {{ $person  -> date_of_birth }}<br>
            Height: {{ $person  -> height }} cm <br>
        </li>
    </ul>