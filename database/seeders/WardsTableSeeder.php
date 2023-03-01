<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Ward;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 20 wards 
        //factory(App\User::class, 1)->create();
        Ward::factory()->count(20)->create();
    }
}