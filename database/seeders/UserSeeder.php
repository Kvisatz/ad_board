<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$vVMX.9uMiYiLcAukgNFWE.RhK35Blnh6sLmjF/STXDdaWTyWqeU0K', 
                'role_id' => 1, 
            ],
            [
                'name' => 'bob',
                'email' => 'bob@gmail.com',
                'password' => '$2y$10$vVMX.9uMiYiLcAukgNFWE.RhK35Blnh6sLmjF/STXDdaWTyWqeU0K',  
                'role_id' => 2, 

            ],
        ]);
    }
}
