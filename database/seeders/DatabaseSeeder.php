<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'UserTest',
            'email' => 'pepe@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
    }
}
