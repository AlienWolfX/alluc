<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Staff;
use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Admin::factory(10)->create();
        Staff::factory(10)->create();
        Client::factory(10)->create();
    }
}
