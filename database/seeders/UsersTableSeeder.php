<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
            'name'=>'Tran Vinh',
            'email'=> 'vinhka999@gmail.com',
            'password'=>Hash::make('password123'),
            'role'=>'admin',
            ],
             [
            'name'=>'Phuong',
            'email'=> 'phuong999@gmail.com',
            'password'=>Hash::make('password123'),
            'role'=>'user',
            ],
            [
            'name'=>'Thuan',
            'email'=> 'thuan999@gmail.com',
            'password'=>Hash::make('password123'),
            'role'=>'user',
            ],
            
        ]);
        
    }
}
