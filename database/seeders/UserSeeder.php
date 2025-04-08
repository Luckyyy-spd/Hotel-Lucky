<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '09123456789',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'phone' => '09123456789',
                'role' => 'customer',
                'password' => bcrypt('cus1pass'),
            ],
            [
                'name' => 'Customer',
                'email' => '09123456789@gmail.com',
                'phone' => '09123456789',
                'role' => 'customer',
                'password' => bcrypt('cus2pass'),
            ],
            [
                'name' => 'Receptionist',
                'email' => 'receptionist@gmail.com',
                'phone' => '09123456789',
                'role' => 'resepsionis',
                'password' => bcrypt('rep1pass'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
