<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il model "Person".
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  Creo un numero di 100 entità casuali all'interno del DB.
    public function run()
    {
        Person::factory()->count(100)->create();
    }
}