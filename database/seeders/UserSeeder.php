<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [ 'name'=> 'test',
            'email'=> 'test@tests.com',
            'password' => hash::make('123456')
        ],
        [ 'name'=> 'chaxo',
        'email'=> 'charlesuwaje02@gmail.com',
        'password' => hash::make('12345')
    ],
        ]);
    }
}
