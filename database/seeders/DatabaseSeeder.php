<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    // Richiamo il PersonSeeder appena creato.
    public function run()
    {
        $this->call([
            PersonSeeder::class,
        ]);

    }
}