<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(50)->state([
            'created_at' => fn () => now()->subMinutes(rand(0, 59)),
        ])->create();
    }
}
