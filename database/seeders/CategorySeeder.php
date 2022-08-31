<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Автотранспорт',
                'img'  => 'заглушка.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Недвижимость',
                'img'  => 'заглушка.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Работа',
                'img'  => 'заглушка.jpg'

            ],
            [
                'id' => 4,
                'name' => 'Личные вещи',
                'img'  => 'заглушка.jpg'

            ],
            [
                'id' => 5,
                'name' => 'Мебель, интерьер',
                'img'  => 'заглушка.jpg'

            ],
            [
                'id' => 6,
                'name' => 'Знакомства',
                'img'  => 'заглушка.jpg'

            ],
            [
                'id' => 7,
                'name' => 'Животные',
                'img'  => 'заглушка.jpg'

            ],
            [
                'id' => 8,
                'name' => 'Строй материалы',
                'img'  => 'заглушка.jpg'

            ],
        ]);
    }
}
