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

    public function personDelete(Person $person)
    {
        $person->delete();

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

        $person = new Person();

        $person->first_name = $data['first_name'];
        $person->last_name = $data['last_name'];
        $person->date_of_birth = $data['date_of_birth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('home');
    }

    // Bonus 1
    public function personShow(Person $person)
    {

        return view('pages.personShow', compact('person'));
    }
}