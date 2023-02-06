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
        $data = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'date_of_birth' => 'required|date',
            'height' => 'nullable|integer|min:50|max:100'
        ]);

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

    public function personEdit(Person $person)
    {

        return view('pages.personEdit', compact('person'));
    }

    public function personUpdate(Request $request, Person $person)
    {

        $data = $request->validate([
            'first_name' => 'required|string|max:32',
            'last_name' => 'required|string|max:32',
            'date_of_birth' => 'required|date',
            'height' => 'nullable|integer|min:50|max:100'
        ]);

        $person->first_name = $data['first_name'];
        $person->last_name = $data['last_name'];
        $person->date_of_birth = $data['date_of_birth'];
        $person->height = $data['height'];

        $person->save();

        return redirect()->route('home');
    }
}