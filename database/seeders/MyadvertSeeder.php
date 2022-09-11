<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MyadvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_advertisment')->insertOrIgnore([
                                                            [
                                                                'user_id' => 1,
                                                                'advertisment_id' => 5,
                                                            ],
                                                            [
                                                                'user_id' => 1,
                                                                'advertisment_id' => 7,
                                                            ],
                                                            [
                                                                'user_id' => 2,
                                                                'advertisment_id' => 8,
                                                            ],
                                                            [
                                                                'user_id' => 2,
                                                                'advertisment_id' => 1,
                                                            ],
                                                            
                                                        ]);
    }
}
