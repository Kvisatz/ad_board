<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filters')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Сортировать по полю',
            ],
            [
                'id' => 2,
                'name' => 'Тип кузова',
            ],
            [
                'id' => 3,
                'name' => 'КПП',
            ],
            [
                'id' => 4,
                'name' => 'Цвет салона',
            ],
            [
                'id' => 5,
                'name' => 'Должно присутствовать',
            ],
            [
                'id' => 6,
                'name' => 'Тип двигателя',
            ],
            [
                'id' => 7,
                'name' => 'Опции',
            ],
            [
                'id' => 8,
                'name' => 'Обмен',
            ],
            [
                'id' => 9,
                'name' => 'Год выпуска',
            ],
            [
                'id' => 10,
                'name' => 'Пробег',
            ],
            [
                'id' => 11,
                'name' => 'Материал салона',
            ],
            [
                'id' => 12,
                'name' => 'Цена',
            ],

        ]);
    }
}
