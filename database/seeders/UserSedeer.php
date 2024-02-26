<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUsers = [
            [
                'name'=> 'User',
                'email'=> 'user@gmail.com',
                'password'=> bcrypt('12345'),
                'role'=>'user'

            ],
            [
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> bcrypt('1234567'),
                'role'=>'admin'

            ],
        ];

        foreach($dataUsers as $key => $data){
            User::create($data);
        }
    }
}
