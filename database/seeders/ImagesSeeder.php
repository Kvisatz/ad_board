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
        for ($i=1; $i<=60; $i++) {
            $product =      [
                                
                                'name' => 'заглушка.jpg',
                                'advertisment_id' => $i
                            
                            ];
            $data[] = $product;
        }
        DB::table('images')->insertOrIgnore($data);

        DB::table('images')->insertOrIgnore([
            [
                'name' => 'квадроцикл.webp',
                'advertisment_id' => 62
            ],
            [
                'name' => 'haval.webp',
                'advertisment_id' => 63
            ],
            [
                'name' => 'nissan.webp',
                'advertisment_id' => 64
            ],
            [
                'name' => 'снегоход.webp',
                'advertisment_id' => 65
            ],
            [
                'name' => 'диск.webp',
                'advertisment_id' => 66
            ],
        ]);


        
    }
}
