<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KoorwilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('koordinator_wilayahs')->insert([
            ['koordinator_wilayah' => 'KORWIL RANTAU SELAMAT'],
            ['koordinator_wilayah' => 'KORWIL PEUREULAK'],
            ['koordinator_wilayah' => 'KORWIL RANTO PEUREULAK'],
            ['koordinator_wilayah' => 'KORWIL DARUL AMAN'],
            ['koordinator_wilayah' => 'KORWIL IDI'],
            ['koordinator_wilayah' => 'KORWIL JULOK'],
            ['koordinator_wilayah' => 'KORWIL SIMPANG ULIM'],
        ]);
    }
}
