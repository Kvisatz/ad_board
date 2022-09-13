<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdvertismentcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $data = [];
    for ($i=1; $i<=30; $i++) {
        $product =      [
                            'category_id' => $i,
                            'advertisment_id' => $i,
                        
                        ];
        $data[] = $product;
    }
    DB::table('category_advertisment')->insertOrIgnore($data);
        
    }
}
