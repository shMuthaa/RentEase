<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Moses Mwatha',
                    'email' => 'mosesmwatha@gmail.com',
                    'password' => Hash::make('22222222'),
                    'usertype' => 'Administrator',
                ],
                [
                    'name' => 'Stanley Ngugi',
                    'email' => 'stanley.cns@gmail.com',
                    'password' => Hash::make('11111111'),
                    'usertype' => 'Tenant',
                ],
            ]
        );
    }
}
