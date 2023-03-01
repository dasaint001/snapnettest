<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 1 admin 
        //factory(App\User::class, 1)->create();
        User::factory()->count(1)->create();
    }
}
