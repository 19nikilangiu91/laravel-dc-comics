<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo Il model "Person"

use App\Models\Person;

class MainController extends Controller
{

    public function home()
    {
        $people = Person::all();

        return view('pages.home', compact('people'));
    }

    public function personDelete(Person $people)
    {
        $people->delete();

        return redirect()->route('home');
    }
}