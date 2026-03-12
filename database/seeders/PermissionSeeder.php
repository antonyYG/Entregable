<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persmissions =[
            'access_dasboard',
            'dashboard_users',
            'dasboard_reports',
            'api'
        ];
        foreach ($persmissions as $persmission){
            Permission::create([
                'name'=>$persmission
            ]);
        }
    }
}
