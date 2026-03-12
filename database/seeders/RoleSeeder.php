<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
        ])->givePermissionTo(Permission::all());
        $roles = ['ciudadano'=> ['api']];
        foreach($roles as $role => $permissions){
            Role::create([
                'name'=> $role,
            ])->givePermissionTo($permissions);
        }
    }
}
