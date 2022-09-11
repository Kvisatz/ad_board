<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FavoritesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insertOrIgnore([
                                                    [
                                                        'user_id' => 1,
                                                        'advertisment_id' => 4,
                                                    ],
                                                    [
                                                        'user_id' => 1,
                                                        'advertisment_id' => 3,
                                                    ],
                                                    [
                                                        'user_id' => 2,
                                                        'advertisment_id' => 7,
                                                    ],
                                                    [
                                                        'user_id' => 2,
                                                        'advertisment_id' => 2,
                                                    ],
                                                    
                                                ]);
    }
}
