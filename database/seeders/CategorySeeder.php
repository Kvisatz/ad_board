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
        DB::table('categories')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Автотранспорт',
                'img'  => 'avto-cat.png',
                'parent_id' => null
            ],
            [
                'id' => 2,
                'name' => 'Недвижимость',
                'img'  => 'nedv-cat.png',
                'parent_id' => null

            ],
            [
                'id' => 3,
                'name' => 'Работа',
                'img'  => 'obr-cat.png',
                'parent_id' => null


            ],
            [
                'id' => 4,
                'name' => 'Личные вещи',
                'img'  => 'od-cat.png',
                'parent_id' => null


            ],
            [
                'id' => 5,
                'name' => 'Мебель, интерьер',
                'img'  => 'meb-cat.png',
                'parent_id' => null


            ],
            [
                'id' => 6,
                'name' => 'Знакомства',
                'img'  => 'snak-cat.png',
                'parent_id' => null


            ],
            [
                'id' => 7,
                'name' => 'Животные',
                'img'  => 'anim-cat.png',
                'parent_id' => null


            ],
            [
                'id' => 8,
                'name' => 'Строй материалы',
                'img'  => 'mat-cat.png',
                'parent_id' => null


            ],
            [
                'id' => 9,
                'name' => 'Продажа авто',
                'img'  => 'заглушка.jpg',
                'parent_id' => 1

            ],
            [
                'id' => 10,
                'name' => 'Покупка авто',
                'img'  => 'заглушка.jpg',
                'parent_id' => 1

            ],
            [
                'id' => 11,
                'name' => 'Автосервис и услуги',
                'img'  => 'заглушка.jpg',
                'parent_id' => 1

            ],
            [
                'id' => 12,
                'name' => 'Автозапчасти и принадлежности',
                'img'  => 'заглушка.jpg',
                'parent_id' => 1

            ],
            [
                'id' => 13,
                'name' => 'Автосалоны',
                'img'  => 'заглушка.jpg',
                'parent_id' => 1

            ],
            [
                'id' => 14,
                'name' => 'Легковые',
                'img'  => 'заглушка.jpg',
                'parent_id' => 9

            ],
            [
                'id' => 15,
                'name' => 'Мототехника и другие средства',
                'img'  => 'заглушка.jpg',
                'parent_id' => 9

            ],
            [
                'id' => 16,
                'name' => 'Коммерческие',
                'img'  => 'заглушка.jpg',
                'parent_id' => 9

            ],
            [
                'id' => 17,
                'name' => 'Гаражи и Стоянки',
                'img'  => 'заглушка.jpg',
                'parent_id' => 2

            ],
            [
                'id' => 18,
                'name' => 'Дачи, Коттеджи',
                'img'  => 'заглушка.jpg',
                'parent_id' => 2

            ],
            [
                'id' => 19,
                'name' => 'Вакансии',
                'img'  => 'заглушка.jpg',
                'parent_id' => 3

            ],
            [
                'id' => 20,
                'name' => 'Образование',
                'img'  => 'заглушка.jpg',
                'parent_id' => 3

            ],
            [
                'id' => 21,
                'name' => 'Для женщин',
                'img'  => 'заглушка.jpg',
                'parent_id' => 4

            ],
            [
                'id' => 22,
                'name' => 'Для мужчин',
                'img'  => 'заглушка.jpg',
                'parent_id' => 4

            ],
            [
                'id' => 23,
                'name' => 'Мебель и интерьер',
                'img'  => 'заглушка.jpg',
                'parent_id' => 5

            ],
            [
                'id' => 24,
                'name' => 'Предметы обихода',
                'img'  => 'заглушка.jpg',
                'parent_id' => 5

            ],
            [
                'id' => 25,
                'name' => 'Девушки',
                'img'  => 'заглушка.jpg',
                'parent_id' => 6

            ],
            [
                'id' => 26,
                'name' => 'Мужчины',
                'img'  => 'заглушка.jpg',
                'parent_id' => 6

            ],
            [
                'id' => 27,
                'name' => 'Кошки',
                'img'  => 'заглушка.jpg',
                'parent_id' => 7

            ],
            [
                'id' => 28,
                'name' => 'Собаки',
                'img'  => 'заглушка.jpg',
                'parent_id' => 7

            ],
            [
                'id' => 29,
                'name' => 'Лаки, Краски',
                'img'  => 'заглушка.jpg',
                'parent_id' => 8

            ],
            [
                'id' => 30,
                'name' => 'Пиломатериалы',
                'img'  => 'заглушка.jpg',
                'parent_id' => 8

            ],
        ]);
    }
}
