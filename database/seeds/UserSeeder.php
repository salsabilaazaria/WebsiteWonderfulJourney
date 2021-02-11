<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@binus.ac.id',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'phone' => '08765437765'
        ]);
     

        $user = User::create([
            'name' => 'Salsa User',
            'email' => 'user@binus.ac.id',
            'password' => bcrypt('12345678'),
            'role' => 'user',
            'phone' => '081123456312'
        ]);

        $user1 = User::create([
            'name' => 'salsa',
            'email' => 'salsa@binus.ac.id',
            'password' => bcrypt('12345678'),
            'role' => 'user',
            'phone' => '081123456312'
        ]);
       
    }
}
