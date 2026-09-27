<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@upsoluctions.com.br',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('P@ssw0rd'),
            ],
            [
                'name' => 'Vendor',
                'username' => 'vendor',
                'email' => 'vendor@upsoluctions.com.br',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('P@ssw0rd'),
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@upsoluctions.com.br',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('P@ssw0rd'),
            ]
        ]);
    }
}
