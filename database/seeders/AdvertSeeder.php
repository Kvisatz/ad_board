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
                            'category_id' => 1,
                            'user_id' => 2,
                        ];
            $data[] = $product;
        }
        DB::table('advertisment')->insertOrIgnore($data);

                    
           
        DB::table('advertisment')->insertOrIgnore([
                                                    [
                                                        'title' => 'Квадрик за стотыщ',
                                                        'price' => 100000,
                                                        'description' => 'От сердца отрываюб как родой на нем сижу',
                                                        'vip' => true,
                                                        'category_id' => 15,
                                                        'user_id' => 1,
                                                    ],
                                                    [
                                                        'title' => 'Haval лучшая машина для китайца',
                                                        'price' => 1000000,
                                                        'description' => 'Совсем не езженный, мы русские друг друга не обманываем',
                                                        'vip' => true,
                                                        'category_id' => 9,
                                                        'user_id' => 1,
                                                    ],
                                                    [
                                                        'title' => 'Кажется это ниссан но это неточно',
                                                        'price' => 2500000,
                                                        'description' => 'Плохого про машину сказать не могу я в близи ее не видел',
                                                        'vip' => true,
                                                        'category_id' => 9,
                                                        'user_id' => 1,
                                                    ],
                                                    [
                                                        'title' => 'Снегоход',
                                                        'price' => 150000,
                                                        'description' => 'Припарковал его в магазине одежды',
                                                        'vip' => true,
                                                        'category_id' => 15,
                                                        'user_id' => 1,
                                                    ],
                                                    [
                                                        'title' => 'Супермегаэлитый диск',
                                                        'price' => 500,
                                                        'description' => 'Сам на нем верхом езжу',
                                                        'vip' => true,
                                                        'category_id' => 12,
                                                        'user_id' => 1,
                                                    ],
                                                ]);
    }
}
