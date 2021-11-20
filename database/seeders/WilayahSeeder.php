<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['id' => 11, 'provinsi' => 'Aceh'],
        ]);

        DB::table('kabupatens')->insert([
            ['id' => 1103, 'provinsi_id' => 11, 'kabupaten' => 'Aceh Timur'],
        ]);

        DB::table('kecamatans')->insert([
            ['id' => 110301, 'kabupaten_id' => 1103, 'kecamatan' => 'Darul Aman'],
            ['id' => 110302, 'kabupaten_id' => 1103, 'kecamatan' => 'Julok'],
            ['id' => 110303, 'kabupaten_id' => 1103, 'kecamatan' => 'Idi Rayeuk'],
            ['id' => 110304, 'kabupaten_id' => 1103, 'kecamatan' => 'Birem Bayeun'],
            ['id' => 110305, 'kabupaten_id' => 1103, 'kecamatan' => 'Serbajadi'],
            ['id' => 110306, 'kabupaten_id' => 1103, 'kecamatan' => 'Nurussalam'],
            ['id' => 110307, 'kabupaten_id' => 1103, 'kecamatan' => 'Peureulak'],
            ['id' => 110308, 'kabupaten_id' => 1103, 'kecamatan' => 'Rantau Selamat'],
            ['id' => 110309, 'kabupaten_id' => 1103, 'kecamatan' => 'Simpang Ulim'],
            ['id' => 110310, 'kabupaten_id' => 1103, 'kecamatan' => 'Rantau Peureulak'],
            ['id' => 110311, 'kabupaten_id' => 1103, 'kecamatan' => 'Pante Bidari'],
            ['id' => 110312, 'kabupaten_id' => 1103, 'kecamatan' => 'Madat'],
            ['id' => 110313, 'kabupaten_id' => 1103, 'kecamatan' => 'Indra Makmu'],
            ['id' => 110314, 'kabupaten_id' => 1103, 'kecamatan' => 'Idi Tunong'],
            ['id' => 110315, 'kabupaten_id' => 1103, 'kecamatan' => 'Banda Alam'],
            ['id' => 110316, 'kabupaten_id' => 1103, 'kecamatan' => 'Peudawa'],
            ['id' => 110317, 'kabupaten_id' => 1103, 'kecamatan' => 'Peureulak Timur'],
            ['id' => 110318, 'kabupaten_id' => 1103, 'kecamatan' => 'Peureulak Barat'],
            ['id' => 110319, 'kabupaten_id' => 1103, 'kecamatan' => 'Sungai Raya'],
            ['id' => 110320, 'kabupaten_id' => 1103, 'kecamatan' => 'Simpang Jernih'],
            ['id' => 110321, 'kabupaten_id' => 1103, 'kecamatan' => 'Darul Ihsan'],
            ['id' => 110322, 'kabupaten_id' => 1103, 'kecamatan' => 'Darul Falah'],
            ['id' => 110323, 'kabupaten_id' => 1103, 'kecamatan' => 'Idi Timur'],
            ['id' => 110324, 'kabupaten_id' => 1103, 'kecamatan' => 'Peunaron'],
        ]);

        DB::table('kelurahans')->insert([
            ['id' => 1103092011, 'kecamatan_id' => 110309, 'kelurahan' => 'Matang Weng'],
            ['id' => 1103092012, 'kecamatan_id' => 110309, 'kelurahan' => 'Alue Mulieng'],
            ['id' => 1103092021, 'kecamatan_id' => 110309, 'kelurahan' => 'Pucok Alue Barat'],
            ['id' => 1103092020, 'kecamatan_id' => 110309, 'kelurahan' => 'Pucok Alue Sa'],
            ['id' => 1103092007, 'kecamatan_id' => 110309, 'kelurahan' => 'Matang Kumbang'],
            ['id' => 1103092019, 'kecamatan_id' => 110309, 'kelurahan' => 'Titi Baroh'],
            ['id' => 1103092022, 'kecamatan_id' => 110309, 'kelurahan' => 'Arakundo'],
            ['id' => 1103092004, 'kecamatan_id' => 110309, 'kelurahan' => 'Alue Buloh Dua'],
            ['id' => 1103092006, 'kecamatan_id' => 110309, 'kelurahan' => 'Matang Rayeuk'],
            ['id' => 1103092005, 'kecamatan_id' => 110309, 'kelurahan' => 'Teupin Breuh'],
            ['id' => 1103092008, 'kecamatan_id' => 110309, 'kelurahan' => 'Blang Nie'],
            ['id' => 1103092013, 'kecamatan_id' => 110309, 'kelurahan' => 'Pucok Alue Dua'],
            ['id' => 1103092001, 'kecamatan_id' => 110309, 'kelurahan' => 'Peulalu'],
            ['id' => 1103092003, 'kecamatan_id' => 110309, 'kelurahan' => 'Alue Buloh Sa'],
            ['id' => 1103092016, 'kecamatan_id' => 110309, 'kelurahan' => 'Kuala Simpang Ulim'],
            ['id' => 1103092023, 'kecamatan_id' => 110309, 'kelurahan' => 'Gampong Baro'],
            ['id' => 1103092002, 'kecamatan_id' => 110309, 'kelurahan' => 'Nicah Awe'],
            ['id' => 1103092010, 'kecamatan_id' => 110309, 'kelurahan' => 'Bantayan'],
            ['id' => 1103092015, 'kecamatan_id' => 110309, 'kelurahan' => 'Keude Tuha'],
            ['id' => 1103092014, 'kecamatan_id' => 110309, 'kelurahan' => 'Gampong Blang'],
            ['id' => 1103092017, 'kecamatan_id' => 110309, 'kelurahan' => 'Lampoh Rayeuk'],
            ['id' => 1103092018, 'kecamatan_id' => 110309, 'kelurahan' => 'Teupin Mamplam'],
            ['id' => 1103092024, 'kecamatan_id' => 110309, 'kelurahan' => 'Matang Seupeng'],
            ['id' => 1103102022, 'kecamatan_id' => 110310, 'kelurahan' => 'Beurandang'],
            ['id' => 1103102019, 'kecamatan_id' => 110310, 'kelurahan' => 'Alue Geunteng'],
            ['id' => 1103102018, 'kecamatan_id' => 110310, 'kelurahan' => 'Kliet'],
            ['id' => 1103102017, 'kecamatan_id' => 110310, 'kelurahan' => 'Tampak'],
            ['id' => 1103102016, 'kecamatan_id' => 110310, 'kelurahan' => 'Paya Palas'],
            ['id' => 1103102021, 'kecamatan_id' => 110310, 'kelurahan' => 'Alue Batee'],
            ['id' => 1103102008, 'kecamatan_id' => 110310, 'kelurahan' => 'Bhom Lama'],
            ['id' => 1103102009, 'kecamatan_id' => 110310, 'kelurahan' => 'Pasi Puteh'],
            ['id' => 1103102010, 'kecamatan_id' => 110310, 'kelurahan' => 'Alue Dua'],
            ['id' => 1103102011, 'kecamatan_id' => 110310, 'kelurahan' => 'Buket Pala'],
            ['id' => 1103102015, 'kecamatan_id' => 110310, 'kelurahan' => 'Punti Payong'],
            ['id' => 1103102014, 'kecamatan_id' => 110310, 'kelurahan' => 'Seumali'],
            ['id' => 1103102020, 'kecamatan_id' => 110310, 'kelurahan' => 'Pertamina'],
            ['id' => 1103102005, 'kecamatan_id' => 110310, 'kelurahan' => 'Blang Barom'],
            ['id' => 1103102004, 'kecamatan_id' => 110310, 'kelurahan' => 'Pulo Blang'],
            ['id' => 1103102002, 'kecamatan_id' => 110310, 'kelurahan' => 'Seuneubok Johan'],
            ['id' => 1103102001, 'kecamatan_id' => 110310, 'kelurahan' => 'Paya Unou'],
            ['id' => 1103102003, 'kecamatan_id' => 110310, 'kelurahan' => 'Seuneubok Baro'],
            ['id' => 1103102006, 'kecamatan_id' => 110310, 'kelurahan' => 'Seuneubok Dalam'],
            ['id' => 1103102007, 'kecamatan_id' => 110310, 'kelurahan' => 'Seuleumak Muda'],
            ['id' => 1103102012, 'kecamatan_id' => 110310, 'kelurahan' => 'Mata Ie'],
            ['id' => 1103102013, 'kecamatan_id' => 110310, 'kelurahan' => 'Alue Udep'],
            ['id' => 1103102024, 'kecamatan_id' => 110310, 'kelurahan' => 'Seumanah Jaya'],
        ]);
    }
}
