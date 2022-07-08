<?php

namespace Database\Seeders;

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
        $this->call([
            GprSeeder::class,
            AgamaSeeder::class,
            WilayahSeeder::class,
            KoorwilSeeder::class,
            PekerjaanSeeder::class,
            KepalaSekolahSeeder::class,
        ]);
    }
}
