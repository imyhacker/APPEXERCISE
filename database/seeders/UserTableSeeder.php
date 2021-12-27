<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Arikun',
            'email' => 'arikun@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'role2' => 'admin',
        ]);

        User::create([
            'name' => 'Melia',
            'email' => 'tolongg@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'user',
            'role2' => 'bendahara',
        ]);

    }
}
