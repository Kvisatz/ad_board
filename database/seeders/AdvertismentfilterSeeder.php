<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdvertismentfilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisment_filter')->insertOrIgnore([
                                                            [
                                                                'advertisment_id' => 62,
                                                                'filter_id' => 8,
                                                            ],
                                                            [
                                                                'advertisment_id' => 63,
                                                                'filter_id' => 8,
                                                            ],
                                                            [
                                                                'advertisment_id' => 64,
                                                                'filter_id' => 8,
                                                            ],
                                                            [
                                                                'advertisment_id' => 65,
                                                                'filter_id' => 8,
                                                            ],
                                                            [
                                                                'advertisment_id' => 66,
                                                                'filter_id' => 8,
                                                            ],
                                                        ]);
    }
}
