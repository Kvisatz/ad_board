<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
                            'test' => true,
                        ];
            $data[] = $product;
        }
        DB::table('advertisment')->insertOrIgnore($data);

                    
           
        DB::table('advertisment')->insertOrIgnore([
                                                    [
                                                        'id' => 62,
                                                        'title' => 'Квадрик за стотыщ',
                                                        'price' => 100000,
                                                        'description' => 'От сердца отрываюб как родой на нем сижу',
                                                        'category_id' => 15,
                                                        'user_id' => 1,
                                                        'year'=>null,
                                                        'kilometrage'=>null,
                                                        'telephone'=>89301112233,
                                                        'region_id' => 5,
                                                        'transmission'=>null,
                                                        'test' => true,
                                                        'vip'=>true,
                                                        'fresh' => false,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                    ],
                                                    [
                                                        'id' => 63,
                                                        'title' => 'Haval лучшая машина для китайца',
                                                        'price' => 1000000,
                                                        'description' => 'Совсем не езженный, мы русские друг друга не обманываем',
                                                        'category_id' => 9,
                                                        'user_id' => 1,
                                                        'year'=>null,
                                                        'kilometrage'=>null,
                                                        'telephone'=>89301112233,
                                                        'region_id' => 5,
                                                        'transmission'=>null,
                                                        'test' => true,
                                                        'vip'=>true,
                                                        'fresh' => false,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 64,
                                                        'title' => 'Кажется это ниссан но это неточно',
                                                        'price' => 2500000,
                                                        'description' => 'Плохого про машину сказать не могу я в близи ее не видел',
                                                        'category_id' => 9,
                                                        'user_id' => 2,
                                                        'year'=>null,
                                                        'kilometrage'=>null,
                                                        'telephone'=>89301112233,
                                                        'region_id' => 5,
                                                        'transmission'=>null,
                                                        'test' => true,
                                                        'vip'=>true,
                                                        'fresh' => false,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 65,
                                                        'title' => 'Снегоход',
                                                        'price' => 150000,
                                                        'description' => 'Припарковал его в магазине одежды',
                                                        'category_id' => 15,
                                                        'user_id' => 1,
                                                        'year'=>null,
                                                        'kilometrage'=>null,
                                                        'telephone'=>89301112233,
                                                        'region_id' => 5,
                                                        'transmission'=>null,
                                                        'test' => true,
                                                        'vip'=>true,
                                                        'fresh' => false,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 66,
                                                        'title' => 'Супермегаэлитый диск',
                                                        'price' => 500,
                                                        'description' => 'Сам на нем верхом езжу',
                                                        'category_id' => 12,
                                                        'user_id' => 1,
                                                        'year'=>null,
                                                        'kilometrage'=>null,
                                                        'telephone'=>89301112233,
                                                        'region_id' => 5,
                                                        'transmission'=>null,
                                                        'test' => true,
                                                        'vip'=>true,
                                                        'fresh' => false,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 67,
                                                        'title' => '3х колесное нечто',
                                                        'price' => 100,
                                                        'description' => 'Проехать один раз',
                                                        'category_id' => 15,
                                                        'user_id' => 1,
                                                        'year'=>null,
                                                        'kilometrage'=>null,
                                                        'telephone'=>89301112233,
                                                        'region_id' => 5,
                                                        'transmission'=>null,
                                                        'test' => true,
                                                        'vip'=>false,
                                                        'fresh' => true,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        

                                                    ],
                                                    [
                                                        'id' => 68,
                                                        'title' => '2хкомнатная квартира',
                                                        'price' => 12300,
                                                        'description' => 'заезжай живи',
                                                        'category_id' => 2,
                                                        'user_id' => 1,
                                                        'year' =>null,
                                                        'kilometrage' =>null,
                                                        'telephone' =>89301112233,
                                                        'region_id' => 5,
                                                        'transmission' =>null,
                                                        'test' => true,
                                                        'vip' => false,
                                                        'fresh' => true,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 69,
                                                        'title' => 'GSB',
                                                        'price' => 2500,
                                                        'description' => 'Плохого про машину сказать не могу я в близи ее не видел',
                                                        'category_id' => 9,
                                                        'user_id' => 2,
                                                        'year' =>null,
                                                        'kilometrage' =>null,
                                                        'telephone' =>89301112233,
                                                        'region_id' => 5,
                                                        'transmission' =>null,
                                                        'test' => true,
                                                        'vip' => false,
                                                        'fresh' => true,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 70,
                                                        'title' => 'Помещение под салон для продажи авто',
                                                        'price' => 15,
                                                        'description' => 'Просторно светло',
                                                        'category_id' => 2,
                                                        'user_id' => 1,
                                                        'year' =>null,
                                                        'kilometrage' =>null,
                                                        'telephone' =>89301112233,
                                                        'region_id' => 5,
                                                        'transmission' =>null,
                                                        'test' => true,
                                                        'vip' => false,
                                                        'fresh' => true,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                    [
                                                        'id' => 71,
                                                        'title' => 'Гитара',
                                                        'price' => 510,
                                                        'description' => 'Электрогитара',
                                                        'category_id' => 16,
                                                        'user_id' => 1,
                                                        'year' =>null,
                                                        'kilometrage' =>null,
                                                        'telephone' =>89301112233,
                                                        'region_id' => 5,
                                                        'transmission' =>null,
                                                        'test' => true,
                                                        'vip' => false,
                                                        'fresh' => true,
                                                        'created_at' => Carbon::now()->format('Y-m-d'),
                                                        
                                                    ],
                                                ]);
    }
}
