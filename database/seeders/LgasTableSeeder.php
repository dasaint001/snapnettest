<?php

namespace Database\Seeders;

use App\Lga;
use Illuminate\Database\Seeder;


class LgasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 20 lgas 
        //factory(App\User::class, 1)->create();
        Lga::factory()->count(20)->create();
    }
}