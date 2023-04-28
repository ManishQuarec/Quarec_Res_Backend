<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           =>'Vijay Pratap',
            'last_name'      =>'singh',
            'email'          =>'vijay@gmail.com',
            'password'       =>Hash::make(12345678),
            'is_admin'       =>1,
            'status'         =>1,
            'role'           => 1,
            'created_at'     => now(),
            'updated_at'     => now(),
        ]);

        // $role = Role::create(['name' => 'is_Admin']);
     
        // $permissions = Permission::pluck('id','id')->all();
   
        // $role->syncPermissions($permissions);
     
        // $user->assignRole([$role->id]);
    }
}
