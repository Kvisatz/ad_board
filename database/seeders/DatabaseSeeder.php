<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            CategorySeeder::class,
            FilterSeeder::class,
            CategoryfilterSeeder::class,
            FilteroptionsSeeder::class,
            AdvertSeeder::class,
            FavoritesSeeder::class,
            // MyadvertSeeder::class,
            // AdvertismentcategorySeeder::class,
            // AdvertismentImageSeeder::class,
            ImagesSeeder::class,
            AdvertismentfilterSeeder::class,
            AdvertismentfilteroptionsSeeder::class,
            RegionsSeeder::class,
        ]);

    }
}
