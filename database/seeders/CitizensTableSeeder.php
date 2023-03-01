<?php

namespace Database\Seeders;

use App\Models\Citizen;
use Illuminate\Database\Seeder;
use App\Models\User;


class CitizensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 20 citizens 
        //factory(App\User::class, 1)->create();
        Citizen::factory()->count(20)->create();
    }
}