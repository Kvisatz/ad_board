<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i=0; $i<=60; $i++) {
            $product = [
                            'title' => Str::random(10),
                            'price' => 1000,
                            'description' => Str::random(40),
                            'category_id' => 1
                        ];
            $data[] = $product;
        }
        DB::table('advertisment')->insertOrIgnore($data);

        $data = [];
        for ($i=0; $i<=10; $i++) {
            $product = [
                            'title' => Str::random(10),
                            'price' => 1000,
                            'description' => Str::random(40),
                            'vip' => true,
                            'category_id' => 2

                        ];
            $data[] = $product;
        }
        DB::table('advertisment')->insertOrIgnore($data);
    }
}
