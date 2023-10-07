<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),  
            ],
            [
                'name' => 'Agnes Cherrly',
                'username' => 'agnescherrly',
                'email' => 'agnes@gmail.com',
                'password' => bcrypt('agnes'),  
            ],
        ];
        foreach($userData as $data => $val){
            User::create($val);
        }
    }
}
