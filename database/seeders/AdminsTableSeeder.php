<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Admin::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
        ]);
    }
}
