<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Account::factory()->create([
            "deviceUID" => "00000000-0004-f4c4-0000-00000000000f",
            "coffee" => 0,
            "downloads" => 10,
            "points" => 50,
            
        ]);

        Account::factory()->create([
            "deviceUID" => "00000000-000f-0d1e-0000-00000000000f",
            "coffee" => 10,
            "downloads" => 0,
            "points" => 150,

        ]);

        Account::factory()->create([
            "deviceUID" => "00000000-001f-e2bf-0000-00000000000f",
            "coffee" => 20,
            "downloads" => 10,
            "points" => 500,

        ]);
    }
}
