<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'               => 'Super Admin',
                'slug'               => 'super-admin',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Admin',
                'slug'               => 'admin',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Customer',
                'slug'               => 'customer',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ];

        Role::insert($roles);
    }
}
