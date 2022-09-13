<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i=35; $i<=65; $i++) {
            $product =      [
                                
                                'name' => 'заглушка.jpg',
                                'advertisment_id' => $i
                            
                            ];
            $data[] = $product;
        }
        DB::table('images')->insertOrIgnore($data);


        
    }
}
