<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdvertismentfilteroptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisment_filteroptions')->insertOrIgnore([
            [
                'advertisment_id' => 62,
                'filteroptions_id' => 17,
            ],
            [
                'advertisment_id' => 63,
                'filteroptions_id' => 18,
            ],
            [
                'advertisment_id' => 64,
                'filteroptions_id' => 17,
            ],
            [
                'advertisment_id' => 65,
                'filteroptions_id' => 18,
            ],
            [
                'advertisment_id' => 66,
                'filteroptions_id' => 17,
            ],
        ]);
    }
}
