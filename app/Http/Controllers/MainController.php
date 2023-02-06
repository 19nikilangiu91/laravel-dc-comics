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

    public function personCreate()
    {
        return view('pages.personCreate');
    }

    public function personStore(Request $request)
    {
        $data = $request->all();

        // var_dump($data);

        $people = new Person();

        $people->first_name = $data['first_name'];
        $people->last_name = $data['last_name'];
        $people->date_of_birth = $data['date_of_birth'];
        $people->height = $data['height'];

        $people->save();

        return redirect()->route('home');
    }
}