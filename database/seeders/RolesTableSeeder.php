<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'superadmin',
                'description' => 'Super administrator with full control over the application',
            ],
            [
                'name' => 'admin',
                'description' => 'Administrator role with management access',
            ],
            [
                'name' => 'editor',
                'description' => 'Editor role with permissions to modify content',
            ],
            [
                'name' => 'viewer',
                'description' => 'Viewer role with read-only access',
            ],
            [
                'name' => 'moderator',
                'description' => 'Moderator role with permissions to manage user-generated content',
            ],
            // Add more roles as needed
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['name' => $role['name']],
                ['description' => $role['description'], 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
