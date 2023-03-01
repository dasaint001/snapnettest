<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CitizensTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(WardsTableSeeder::class);
        $this->call(LgasTableSeeder::class);
        //$this->call(AdminsTableSeeder::class);
    }
}
