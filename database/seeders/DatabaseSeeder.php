<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'adminadmin'
        ]);

        Customer::factory()->create([
            'first_name' => 'john',
            'last_name' => 'doe',
            'email' => 'johndoe@example.com',
            'password' => 'password'
        ]);

        $this->call(PetSeeder::class);
    }
}
