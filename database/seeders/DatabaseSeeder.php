<?php

namespace Database\Seeders;
use App\Models\Clients;
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
        Clients::factory(15)->create();
    }
}
