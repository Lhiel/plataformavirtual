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
     



     $user = User::create([
            'name' => 'Sergio Lucas Alarcon Mendoza',
            'email' => 'sergio@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        $user->assignRole('Admin');
    

        
   

        $user = User::create([
            'name' => 'Limber Sanchez Mendoza',
            'email' => 'limbersanchezmendoza@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('Admin');

    }
}
