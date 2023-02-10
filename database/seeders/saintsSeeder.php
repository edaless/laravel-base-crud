<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il model saint
use App\Models\saint;

class saintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // vecchio modo FUNZIONANTE!!!
        // $saint = new Saint();

        // $saint->name = "name";
        // $saint->birth_place = "birth_place";
        // // le date si inseriscono così:
        // $saint->blessing_date = "2020-12-12";
        // $saint->miracles_number = 3;


        // $saint->save();



        //AUTOMATIC FAKE DATA

        $saint = Saint::factory()->count(100)->create();

        // la mia esperienza è che VUOLE questo "[0]"
        $saint[0]->save();
    }
}
