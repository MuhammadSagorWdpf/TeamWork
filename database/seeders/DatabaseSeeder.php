<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CMS;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //User::factory(1)->create();

        User::factory()->create([
            
            'email' => 'doctor@gmail.com',
            'password' => 12345678,
        ]);

        //CMS::factory(1)->create();
    }
}
