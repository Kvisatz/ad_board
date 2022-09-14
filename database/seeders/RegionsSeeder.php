<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insertOrIgnore([
                                                [
                                                    'id' => 1,
                                                    'name' => 'Россия',
                                                ],
                                                [
                                                    'id' => 2,
                                                    'name' => 'Украина',
                                                ],
                                                [
                                                    'id' => 3,
                                                    'name' => 'Белоруссия',
                                                ],
                                                [
                                                    'id' => 4,
                                                    'name' => 'Грузия',
                                                ],
                                                [
                                                    'id' => 5,
                                                    'name' => 'Туркмения',
                                                ],
                                                [
                                                    'id' => 6,
                                                    'name' => 'Узбекистан',
                                                ],
                                                [
                                                    'id' => 7,
                                                    'name' => 'Таджикистан',
                                                ],
                                                [
                                                    'id' => 8,
                                                    'name' => 'Молдавия',
                                                ],
                                                [
                                                    'id' => 9,
                                                    'name' => 'Киргизия',
                                                ],
                                                [
                                                    'id' => 10,
                                                    'name' => 'Казахстан',
                                                ],
                                                [
                                                    'id' => 11,
                                                    'name' => 'Армения',
                                                ],
                                                [
                                                    'id' => 12,
                                                    'name' => 'Азербайджан',
                                                ],
                                                
                                            ]);
    }
}
