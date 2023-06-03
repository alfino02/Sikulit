<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_user' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'id_role'  => '1',
            ],
            [
                'nama_user' => 'doctor',
                'email' => 'doctor@gmail.com',
                'password' => Hash::make('doctor'),
                'id_role'  => '2',
            ],
            [
                'nama_user' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'id_role'  => '3',
            ],
        ];
        foreach ($data as $value) {
            DB::table('users')->insert([
                'nama_user' => $value['nama_user'],
                'email' => $value['email'],
                'password' => $value['password'],
                'id_role' => $value['id_role'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
