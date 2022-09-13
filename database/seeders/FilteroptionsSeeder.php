<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FilteroptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filter_options')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Мазда',
                'filter_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Тойота',
                'filter_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Седан',
                'filter_id' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Хэчбэк',
                'filter_id' => 2,
            ],
            [
                'id' => 5,
                'name' => 'Автомат',
                'filter_id' => 3,
            ],
            [
                'id' => 6,
                'name' => 'Механика',
                'filter_id' => 3,
            ],
            [
                'id' => 7,
                'name' => 'Светлый',
                'filter_id' => 4,
            ],
            [
                'id' => 8,
                'name' => 'Темный',
                'filter_id' => 4,
            ],
            [
                'id' => 9,
                'name' => 'Фото',
                'filter_id' => 5,
            ],
            [
                'id' => 10,
                'name' => 'Прайс',
                'filter_id' => 5,
            ],
            [
                'id' => 11,
                'name' => 'Бензин',
                'filter_id' => 5,
            ],
            [
                'id' => 12,
                'name' => 'Дизель',
                'filter_id' => 5,
            ],
            [
                'id' => 13,
                'name' => 'Круиз контроль',
                'filter_id' => 6,
            ],
            [
                'id' => 14,
                'name' => 'Усилитель руля',
                'filter_id' => 6,
            ],
            [
                'id' => 15,
                'name' => 'Возможен',
                'filter_id' => 7,
            ],
            [
                'id' => 16,
                'name' => 'Не интересует',
                'filter_id' => 7,
            ],
            [
                'id' => 17,
                'name' => '1999',
                'filter_id' => 8,
            ],
            [
                'id' => 18,
                'name' => '2000',
                'filter_id' => 8,
            ],
            [
                'id' => 19,
                'name' => 'Кожа',
                'filter_id' => 10,
            ],
            [
                'id' => 20,
                'name' => 'Велюр',
                'filter_id' => 10,
            ],
            
        ]);
    }
}
