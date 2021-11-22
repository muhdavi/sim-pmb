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
//            birem bayeun
            ['id' => 1103042004, 'kecamatan_id' => 110304, 'kelurahan' => 'Buket Tiga'],
            ['id' => 1103042005, 'kecamatan_id' => 110304, 'kelurahan' => 'Benteng'],
            ['id' => 1103042006, 'kecamatan_id' => 110304, 'kelurahan' => 'Afeling II Bukit'],
            ['id' => 1103042003, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Drien'],
            ['id' => 1103042002, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Canang'],
            ['id' => 1103042001, 'kecamatan_id' => 110304, 'kelurahan' => 'Jambo Labu'],
            ['id' => 1103042009, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Buloh'],
            ['id' => 1103042008, 'kecamatan_id' => 110304, 'kelurahan' => 'Peutow'],
            ['id' => 1103042007, 'kecamatan_id' => 110304, 'kelurahan' => 'Keumuneng Hulu'],
            ['id' => 1103042010, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Teh'],
            ['id' => 1103042013, 'kecamatan_id' => 110304, 'kelurahan' => 'Paya Tampah'],
            ['id' => 1103042014, 'kecamatan_id' => 110304, 'kelurahan' => 'Paya Bili Dua'],
            ['id' => 1103042011, 'kecamatan_id' => 110304, 'kelurahan' => 'Paya Rambong'],
            ['id' => 1103042012, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Gadeng Sa'],
            ['id' => 1103042022, 'kecamatan_id' => 110304, 'kelurahan' => 'Birem Rayeuk'],
            ['id' => 1103042017, 'kecamatan_id' => 110304, 'kelurahan' => 'Keude Birem'],
            ['id' => 1103042019, 'kecamatan_id' => 110304, 'kelurahan' => 'Aramiyah'],
            ['id' => 1103042015, 'kecamatan_id' => 110304, 'kelurahan' => 'Paya Bili Sa'],
            ['id' => 1103042026, 'kecamatan_id' => 110304, 'kelurahan' => 'Merbou Dua'],
            ['id' => 1103042016, 'kecamatan_id' => 110304, 'kelurahan' => 'Paya Peulawi'],
            ['id' => 1103042018, 'kecamatan_id' => 110304, 'kelurahan' => 'Bayeun'],
            ['id' => 1103042023, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Gadeng'],
            ['id' => 1103042024, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Gadeng Dua'],
            ['id' => 1103042021, 'kecamatan_id' => 110304, 'kelurahan' => 'Buket Seuleumak'],
            ['id' => 1103042020, 'kecamatan_id' => 110304, 'kelurahan' => 'Blang Tualang'],
            ['id' => 1103042025, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Sentang'],
            ['id' => 1103042027, 'kecamatan_id' => 110304, 'kelurahan' => 'Alue Nyamoek'],
//            simpang ulim
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
//            rantau peureulak
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
//            madat
            ['id' => 1103122001, 'kecamatan_id' => 110312, 'kelurahan' => 'Madat'],
            ['id' => 1103122013, 'kecamatan_id' => 110312, 'kelurahan' => 'Paya Demam Peu'],
            ['id' => 1103122018, 'kecamatan_id' => 110312, 'kelurahan' => 'Paya Naden'],
            ['id' => 1103122016, 'kecamatan_id' => 110312, 'kelurahan' => 'Tanjong Ara'],
            ['id' => 1103122019, 'kecamatan_id' => 110312, 'kelurahan' => 'Tanjong Minjei'],
            ['id' => 1103122023, 'kecamatan_id' => 110312, 'kelurahan' => 'Seuneubok Pidie'],
            ['id' => 1103122015, 'kecamatan_id' => 110312, 'kelurahan' => 'Rambong Lop'],
            ['id' => 1103122017, 'kecamatan_id' => 110312, 'kelurahan' => 'Matang Jrok'],
            ['id' => 1103122025, 'kecamatan_id' => 110312, 'kelurahan' => 'Matang Nibong'],
            ['id' => 1103122014, 'kecamatan_id' => 110312, 'kelurahan' => 'Abeuk Geulanteu'],
            ['id' => 1103122002, 'kecamatan_id' => 110312, 'kelurahan' => 'Matang Keupula Sa'],
            ['id' => 1103122005, 'kecamatan_id' => 110312, 'kelurahan' => 'Ulee Ateung'],
            ['id' => 1103122024, 'kecamatan_id' => 110312, 'kelurahan' => 'Blang Andam'],
            ['id' => 1103122022, 'kecamatan_id' => 110312, 'kelurahan' => 'Bintah'],
            ['id' => 1103122021, 'kecamatan_id' => 110312, 'kelurahan' => 'Blang Awe'],
            ['id' => 1103122020, 'kecamatan_id' => 110312, 'kelurahan' => 'Pante Merbo'],
            ['id' => 1103122026, 'kecamatan_id' => 110312, 'kelurahan' => 'Lueng Sa'],
            ['id' => 1103122004, 'kecamatan_id' => 110312, 'kelurahan' => 'Matang Keupula Lhee'],
            ['id' => 1103122003, 'kecamatan_id' => 110312, 'kelurahan' => 'Matang Keupula Dua'],
            ['id' => 1103122006, 'kecamatan_id' => 110312, 'kelurahan' => 'Blang Ubit'],
            ['id' => 1103122012, 'kecamatan_id' => 110312, 'kelurahan' => 'Lueng Peut'],
            ['id' => 1103122011, 'kecamatan_id' => 110312, 'kelurahan' => 'Lueng Dua'],
            ['id' => 1103122007, 'kecamatan_id' => 110312, 'kelurahan' => 'Matang Guru'],
            ['id' => 1103122008, 'kecamatan_id' => 110312, 'kelurahan' => 'Pantee Bayam'],
            ['id' => 1103122010, 'kecamatan_id' => 110312, 'kelurahan' => 'Meunasah Tingkeum'],
            ['id' => 1103122009, 'kecamatan_id' => 110312, 'kelurahan' => 'Meunasah Asan'],
//            sungai raya
            ['id' => 1103192008, 'kecamatan_id' => 110319, 'kelurahan' => 'Gajah Mentah'],
            ['id' => 1103192010, 'kecamatan_id' => 110319, 'kelurahan' => 'Seuneubok Aceh'],
            ['id' => 1103192009, 'kecamatan_id' => 110319, 'kelurahan' => 'Seuneubok Pase'],
            ['id' => 1103192012, 'kecamatan_id' => 110319, 'kelurahan' => 'Sungai Simpang'],
            ['id' => 1103192007, 'kecamatan_id' => 110319, 'kelurahan' => 'Paya Keutapang'],
            ['id' => 1103192006, 'kecamatan_id' => 110319, 'kelurahan' => 'Alue Itam'],
            ['id' => 1103192005, 'kecamatan_id' => 110319, 'kelurahan' => 'Buket Drien'],
            ['id' => 1103192004, 'kecamatan_id' => 110319, 'kelurahan' => 'Buket Seulamat'],
            ['id' => 1103192013, 'kecamatan_id' => 110319, 'kelurahan' => 'Kuala Parek'],
            ['id' => 1103192003, 'kecamatan_id' => 110319, 'kelurahan' => 'Labuhan Keudee'],
            ['id' => 1103192011, 'kecamatan_id' => 110319, 'kelurahan' => 'Krueng Lingka'],
            ['id' => 1103192002, 'kecamatan_id' => 110319, 'kelurahan' => 'Geulumpang Payong'],
            ['id' => 1103192001, 'kecamatan_id' => 110319, 'kelurahan' => 'Alue Rangan'],
        ]);
    }
}
