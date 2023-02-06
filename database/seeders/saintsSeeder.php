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

        // vecchio modo
        // $saint = new Saint();

        // $saint->name = "name";
        // $saint->birth_place = "birth_place";
        // // da controllare come si inseriscono le date
        // $saint->blessing_date = 2020 / 12 / 12;
        // $saint->miracles_number = 3;


        // $saint->save();



        //AUTOMATIC FAKE DATA

        $saint = Saint::factory()->count(10)->create();

        $saint[0]->save();
    }
}
