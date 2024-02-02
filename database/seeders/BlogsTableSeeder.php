<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::all()->each(function ($user) {
            \App\Models\Blog::factory()->count(5)->create([
                'posted_by' => $user->id,
            ]);
        });

        \App\Models\Admin::all()->each(function ($admin) {
            \App\Models\Blog::factory()->count(5)->create([
                'posted_by' => $admin->id,
            ]);
        });
    }
}
