<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Bendahara User',
                'email' => 'bendahara@bendahara.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Ustad User',
                'email' => 'ustad@ustad.com',
                'type' => 3,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Santri User',
                'email' => 'santri@santri.com',
                'type' => 4,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Amil User',
                'email' => 'amil@amil.com',
                'type' => 5,
                'password' => bcrypt('123456'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
