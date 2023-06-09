<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = [
            [
                'name' => 'faruq',
                'username' => 'faruq321',
                'password' => bcrypt('faruq12345'),

            ],
            [
                'name' => 'Admin',
                'username' => 'admin321',
                'password' => bcrypt('admin12345'),

            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
