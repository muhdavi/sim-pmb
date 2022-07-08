<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GprSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gprs')->insert([
            ['golongan' => 'I', 'ruang' => 'a', 'pangkat' => 'Juru Muda'],
            ['golongan' => 'I', 'ruang' => 'b', 'pangkat' => 'Juru Muda Tingkat I'],
            ['golongan' => 'I', 'ruang' => 'c', 'pangkat' => 'Juru'],
            ['golongan' => 'I', 'ruang' => 'd', 'pangkat' => 'Juru Tingkat I'],
            ['golongan' => 'II', 'ruang' => 'a', 'pangkat' => 'Pengatur Muda'],
            ['golongan' => 'II', 'ruang' => 'b', 'pangkat' => 'Pengatur Muda Tingkat I'],
            ['golongan' => 'II', 'ruang' => 'c', 'pangkat' => 'Pengatur'],
            ['golongan' => 'II', 'ruang' => 'd', 'pangkat' => 'Pengatur Tingkat I'],
            ['golongan' => 'III', 'ruang' => 'a', 'pangkat' => 'Penata Muda'],
            ['golongan' => 'III', 'ruang' => 'b', 'pangkat' => 'Penata Muda Tingkat I'],
            ['golongan' => 'III', 'ruang' => 'c', 'pangkat' => 'Penata'],
            ['golongan' => 'III', 'ruang' => 'd', 'pangkat' => 'Penata Tingkat I'],
            ['golongan' => 'IV', 'ruang' => 'a', 'pangkat' => 'Pembina'],
            ['golongan' => 'IV', 'ruang' => 'b', 'pangkat' => 'Pembina Tingkat I'],
            ['golongan' => 'IV', 'ruang' => 'c', 'pangkat' => 'Pembina Utama Muda'],
            ['golongan' => 'IV', 'ruang' => 'd', 'pangkat' => 'Pembina Utama Madya'],
            ['golongan' => 'IV', 'ruang' => 'e', 'pangkat' => 'Pembina Utama'],
        ]);
    }
}
