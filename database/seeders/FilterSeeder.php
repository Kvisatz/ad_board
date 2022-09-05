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
                'name' => 'Марка автомобиля',
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
                'name' => 'Тип двигателя',
            ],
            [
                'id' => 6,
                'name' => 'Опции',
            ],
            [
                'id' => 7,
                'name' => 'Обмен',
            ],
            [
                'id' => 8,
                'name' => 'Год выпуска',
            ],
            [
                'id' => 9,
                'name' => 'Пробег',
            ],
            [
                'id' => 10,
                'name' => 'Материал салона',
            ],
            

        ]);
    }
}
