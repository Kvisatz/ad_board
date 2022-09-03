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
                'description' => 'Актуальная база объявлений о продаже новых и подержанных машин',
                'parent_id' => null,
                'amount' => 9
            ],
            [
                'id' => 2,
                'name' => 'Недвижимость',
                'img'  => 'nedv-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0
            ],
            [
                'id' => 3,
                'name' => 'Работа',
                'img'  => 'obr-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0
            ],
            [
                'id' => 4,
                'name' => 'Личные вещи',
                'img'  => 'od-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0

            ],
            [
                'id' => 5,
                'name' => 'Мебель, интерьер',
                'img'  => 'meb-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0
            ],
            [
                'id' => 6,
                'name' => 'Знакомства',
                'img'  => 'snak-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0


            ],
            [
                'id' => 7,
                'name' => 'Животные',
                'img'  => 'anim-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0
            ],
            [
                'id' => 8,
                'name' => 'Строй материалы',
                'img'  => 'mat-cat.png',
                'description' => null,
                'parent_id' => null,
                'amount' => 0
            ],
            [
                'id' => 9,
                'name' => 'Продажа авто',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 1,
                'amount' => 0
            ],
            [
                'id' => 10,
                'name' => 'Покупка авто',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 1,
                'amount' => 0
            ],
            [
                'id' => 11,
                'name' => 'Автосервис и услуги',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 1,
                'amount' => 0
            ],
            [
                'id' => 12,
                'name' => 'Автозапчасти и принадлежности',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 1,
                'amount' => 0
            ],
            [
                'id' => 13,
                'name' => 'Автосалоны',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 1,
                'amount' => 0
            ],
            [
                'id' => 14,
                'name' => 'Легковые',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 9,
                'amount' => 0

            ],
            [
                'id' => 15,
                'name' => 'Мототехника и другие средства',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 9,
                'amount' => 0


            ],
            [
                'id' => 16,
                'name' => 'Коммерческие',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 9,
                'amount' => 0
            ],
            [
                'id' => 17,
                'name' => 'Гаражи и Стоянки',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 2,
                'amount' => 0


            ],
            [
                'id' => 18,
                'name' => 'Дачи, Коттеджи',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 2,
                'amount' => 0


            ],
            [
                'id' => 19,
                'name' => 'Вакансии',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 3,
                'amount' => 0


            ],
            [
                'id' => 20,
                'name' => 'Образование',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 3,
                'amount' => 0


            ],
            [
                'id' => 21,
                'name' => 'Для женщин',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 4,
                'amount' => 0


            ],
            [
                'id' => 22,
                'name' => 'Для мужчин',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 4,
                'amount' => 0


            ],
            [
                'id' => 23,
                'name' => 'Мебель и интерьер',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 5,
                'amount' => 0


            ],
            [
                'id' => 24,
                'name' => 'Предметы обихода',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 5,
                'amount' => 0


            ],
            [
                'id' => 25,
                'name' => 'Девушки',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 6,
                'amount' => 0


            ],
            [
                'id' => 26,
                'name' => 'Мужчины',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 6,
                'amount' => 0


            ],
            [
                'id' => 27,
                'name' => 'Кошки',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 7,
                'amount' => 0


            ],
            [
                'id' => 28,
                'name' => 'Собаки',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 7,
                'amount' => 0


            ],
            [
                'id' => 29,
                'name' => 'Лаки, Краски',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 8,
                'amount' => 0


            ],
            [
                'id' => 30,
                'name' => 'Пиломатериалы',
                'img'  => 'заглушка.jpg',
                'description' => null,
                'parent_id' => 8,
                'amount' => 0


            ],
        ]);
    }
}
