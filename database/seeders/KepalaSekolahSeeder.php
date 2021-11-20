<?php

namespace Database\Seeders;

use App\Models\Kepala;
use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class KepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kepala1 = new Kepala;
        $kepala1->nip = '197009221998011001';
        $kepala1->nama = 'AHMAD ZAKKI YAMANI, S.Ag., MA';
        $kepala1->nomor_hp = '085360037778';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101915';
        $sekolah1->foto = '10101915.jpg';
        $sekolah1->sekolah = 'SMPN 1 SIMPANG ULIM';
        $sekolah1->alamat = 'Jln. Banda Aceh Medan KM. 340 Simpang Ulim, Gampong Blang, Kec. Simpang Ulim, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197012301998011001';
        $kepala1->nama = 'SYARKAWI, S.Pd.';
        $kepala1->nomor_hp = '085288525345';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110450';
        $sekolah1->foto = '10110450.jpg';
        $sekolah1->sekolah = 'SMPN 2 SIMPANG ULIM';
        $sekolah1->alamat = 'Jln. Banda Aceh - Medan Desa Matang Kumbang Kec. Simpang Ulim';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '198302032007011002';
        $kepala1->nama = 'ISLAHUDDIN, S.Pd.I';
        $kepala1->nomor_hp = '085262967966';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101930';
        $sekolah1->foto = '10101930.jpg';
        $sekolah1->sekolah = 'SMPN 1 PANTEE BIDARI';
        $sekolah1->alamat = 'Jln. Pendidikan - Lhok Nibong Kec. Pante Bidari';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197701102003121005';
        $kepala1->nama = 'HASAN BASRI, S.Pd';
        $kepala1->nomor_hp = '085297679776';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110459';
        $sekolah1->foto = '10110459.jpg';
        $sekolah1->sekolah = 'SMPN 2 PANTEE BIDARI';
        $sekolah1->alamat = 'Jln. Banda Aceh - Medan Km. 331 Desa Putoh Sa Kec. Pantee Bidari';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196412062005041001';
        $kepala1->nama = 'Drs. FADHIL';
        $kepala1->nomor_hp = '081360258968';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110548';
        $sekolah1->foto = '10110548.jpg';
        $sekolah1->sekolah = 'SMPN 3 PANTEE BIDARI';
        $sekolah1->alamat = 'Jln. Teupin Batee - Pasi Tinggi Desa Alue Ie Mirah';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196511022005041001';
        $kepala1->nama = 'MARZUKI, S.Pd';
        $kepala1->nomor_hp = '085260063630';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10112851';
        $sekolah1->foto = '10112851.jpg';
        $sekolah1->sekolah = 'SMPN 4 PANTEE BIDARI';
        $sekolah1->alamat = 'Jln. Exxon Mobil Sejudo Desa Kec. Pante Bidari';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196501101998031003';
        $kepala1->nama = 'Drs. ABDUL AZIZ';
        $kepala1->nomor_hp = '085260054794';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69788603';
        $sekolah1->foto = '69788603.jpg';
        $sekolah1->sekolah = 'SMPN 5 PANTEE BIDARI';
        $sekolah1->alamat = 'Jln. Teupin Batee - Blang Seunong Kec. Pante Bidari';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196212311985121007';
        $kepala1->nama = 'Drs. ZAINI';
        $kepala1->nomor_hp = '081362643232';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101922';
        $sekolah1->foto = '10101922.jpg';
        $sekolah1->sekolah = 'SMPN 1 MADAT';
        $sekolah1->alamat = 'Jln. Pang Purek  Kec. Madat';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196703162000082001';
        $kepala1->nama = 'KHADIJAH, S.Pd. MM';
        $kepala1->nomor_hp = '085261555032';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110382';
        $sekolah1->foto = '10110382.jpg';
        $sekolah1->sekolah = 'SMPN 2 MADAT';
        $sekolah1->alamat = 'Jln. Lueng Sa Km. 4 No.1 Gampong Blang Awe Kec. Madat';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196503061990031005';
        $kepala1->nama = 'MUZAKKIR, S.Pd';
        $kepala1->nomor_hp = '085260009282';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111452';
        $sekolah1->foto = '10111452.jpg';
        $sekolah1->sekolah = 'SMPN 3 MADAT';
        $sekolah1->alamat = 'Jln. Tanjung Minjei - Mns Asan Km.8';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197004132000121001';
        $kepala1->nama = 'SOFYAN, S.Pd, M.Pd';
        $kepala1->nomor_hp = '082397531141';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69814192';
        $sekolah1->foto = '69814192.jpg';
        $sekolah1->sekolah = 'SMPN SATU ATAP SDN KUALA SIMPANG ULIM';
        $sekolah1->alamat = 'Jln. Kuala Simpang Ulim Desa Kuala Kec. Simpang Ulim';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 7;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196510051988031007';
        $kepala1->nama = 'NASWAR, S.Pd, M.Pd';
        $kepala1->nomor_hp = '085261975744';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101893';
        $sekolah1->foto = '10101893.jpg';
        $sekolah1->sekolah = 'SMPN 1 JULOK';
        $sekolah1->alamat = 'JLN MEDAN - BANDA ACEH, Blang Paoh Satu, Kec. Julok, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196906202008011001';
        $kepala1->nama = 'NURDIN, S.Pd.I';
        $kepala1->nomor_hp = '081360159796';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101923';
        $sekolah1->foto = '10101923.jpg';
        $sekolah1->sekolah = 'SMPN 2 JULOK';
        $sekolah1->alamat = 'Jl. Medan - Banda Aceh, Alue Cek Doy, Kec. Julok, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197611252003122004';
        $kepala1->nama = 'HASMAH ZAHARA, S.Pd, M.M';
        $kepala1->nomor_hp = '081361656616';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110439';
        $sekolah1->foto = '10110439.jpg';
        $sekolah1->sekolah = 'SMPN 3 JULOK';
        $sekolah1->alamat = 'Alue Meuh, Blang Gleum, Kec. Julok, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197205102006041003';
        $kepala1->nama = 'MUSLEM, S.Pd';
        $kepala1->nomor_hp = '085277167965';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10113615';
        $sekolah1->foto = '10113615.jpg';
        $sekolah1->sekolah = 'SMPN 4 JULOK';
        $sekolah1->alamat = 'Simpang Tiga , Simpang Lhee, Kec. Julok, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196312311984032012';
        $kepala1->nama = 'SURIATI, S.Pd';
        $kepala1->nomor_hp = '085270466020';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69788598';
        $sekolah1->foto = '69788598.jpg';
        $sekolah1->sekolah = 'SMPN 5 JULOK';
        $sekolah1->alamat = 'JL. ALUE IE MIRAH, Buket Panyang, Kec. Julok, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197107021998011001';
        $kepala1->nama = 'SULAIMAN, S.Pd';
        $kepala1->nomor_hp = '085296240986';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110545';
        $sekolah1->foto = '10110545.jpg';
        $sekolah1->sekolah = 'SMPN 1 INDRA MAKMU';
        $sekolah1->alamat = 'JL. OLINDO, Alue Ie Mirah, Kec. Indra Makmur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '198004022002122005';
        $kepala1->nama = 'LENNYZA, S.Pd';
        $kepala1->nomor_hp = '081377193399';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101918';
        $sekolah1->foto = '10101918.jpg';
        $sekolah1->sekolah = 'SMPN 2 INDRA MAKMU';
        $sekolah1->alamat = 'Afdeling II, Perk Julok Rayeuk Utara, Kec. Indra Makmur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197805042008011003';
        $kepala1->nama = 'BAHTIAR, S.Pd.I, M.Pd.I';
        $kepala1->nomor_hp = '082361485511';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10112959';
        $sekolah1->foto = '10112959.jpg';
        $sekolah1->sekolah = 'SMPN 3 INDRA MAKMU';
        $sekolah1->alamat = 'Jalan Alue Ie Mirah Dusun BPM Desa Bandar Baro Kecamatan Indra Makmu, Bandar Baro, Kec. Indra Makmur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 6;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197908202003121006';
        $kepala1->nama = 'MUSTAFA KAMAL, S.Pd';
        $kepala1->nomor_hp = '085260017658';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110422';
        $sekolah1->foto = '10110422.jpg';
        $sekolah1->sekolah = 'SMPN 1 DARUL IKHSAN';
        $sekolah1->alamat = 'Keude Dua, Keude Dua, Kec. Darul Ihsan, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197907162005041001';
        $kepala1->nama = 'SUHAIMI, S.Pd';
        $kepala1->nomor_hp = '085360907611';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10113437';
        $sekolah1->foto = '10113437.jpg';
        $sekolah1->sekolah = 'SMPN 2 DARUL IKHSAN';
        $sekolah1->alamat = 'Jl. Idi-Keude Dua , Seuneubok Teungoh (Kd Ii), Kec. Darul Ihsan, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197401042005042002';
        $kepala1->nama = 'HAMIDAH ROKAYANA, S.Pd, M.M';
        $kepala1->nomor_hp = '085260115827';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101892';
        $sekolah1->foto = '10101892.jpg';
        $sekolah1->sekolah = 'SMPN 1 IDI';
        $sekolah1->alamat = 'Jl. Peutua Husen, Kampung Jawa, Kec. Idi Rayeuk, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197004201995122001';
        $kepala1->nama = 'SRI SUSILAWATI, S.Pd, M.Pd';
        $kepala1->nomor_hp = '085262766018';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101932';
        $sekolah1->foto = '10101932.jpg';
        $sekolah1->sekolah = 'SMPN 2 IDI';
        $sekolah1->alamat = 'Jln.Banda Aceh - Medan Km.365, Gampong Jalan, Kec. Idi Rayeuk, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197312312007011446';
        $kepala1->nama = 'SAMSUL BAHRI, S.Pd';
        $kepala1->nomor_hp = '085359090866';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101917';
        $sekolah1->foto = '10101917.jpg';
        $sekolah1->sekolah = 'SMPN 3 IDI';
        $sekolah1->alamat = 'JLN. GUREB DUSUN PENDIDIKAN, Sam Pai Mah, Kec. Idi Rayeuk, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197808312005041001';
        $kepala1->nama = 'HASTAMI, S.Pd, M.Pd';
        $kepala1->nomor_hp = '085260016261';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110424';
        $sekolah1->foto = '10110424.jpg';
        $sekolah1->sekolah = 'SMPN 1 PEUDAWA';
        $sekolah1->alamat = 'Jl. Medan B. Aceh Langsa Km. 382 Peudawa, Kampung Keude, Kec. Peudawa, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196812311994121002';
        $kepala1->nama = 'RUSLI, S.Pd';
        $kepala1->nomor_hp = '085262569227';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110421';
        $sekolah1->foto = '10110421.jpg';
        $sekolah1->sekolah = 'SMPN 1 IDI TUNONG';
        $sekolah1->alamat = 'Desa Buket Teukuh, Buket Teukuh, Kec. Idi Tunong, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196605181994121001';
        $kepala1->nama = 'AMBIA, S.Pd';
        $kepala1->nomor_hp = '085342004894';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69726332';
        $sekolah1->foto = '69726332.jpg';
        $sekolah1->sekolah = 'SMPN 2 IDI TUNONG';
        $sekolah1->alamat = 'Jalan Asamera, Paya Awe, Kec. Idi Tunong, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197908062003121003';
        $kepala1->nama = 'MUHAMMAD SYUID AR, S.Pd, M.M';
        $kepala1->nomor_hp = '085260512012';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110438';
        $sekolah1->foto = '10110438.jpg';
        $sekolah1->sekolah = 'SMPN 1 IDI TIMUR';
        $sekolah1->alamat = 'Jl. Peudawa Puntong , Seuneubok Kuyun, Kec. Idi Timur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196801131991032002';
        $kepala1->nama = 'HAFIZAH, S.Pd';
        $kepala1->nomor_hp = '085296861940';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69849581';
        $sekolah1->foto = '69849581.jpg';
        $sekolah1->sekolah = 'SMPN 2 IDI TIMUR';
        $sekolah1->alamat = 'Jl. T. Panglima Prang Adam, Matang Bungong, Kec. Idi Timur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196410282007011006';
        $kepala1->nama = 'Drs. WIJIYANTO';
        $kepala1->nomor_hp = '082275732995';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69963922';
        $sekolah1->foto = '69963922.jpg';
        $sekolah1->sekolah = 'SMPN TERPADU TANOH ANOE IDI';
        $sekolah1->alamat = 'Lr. Mansyur Desa Tanoh Anoe Barat, Tanoh Anou, Kec. Idi Rayeuk, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 5;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196912312005041003';
        $kepala1->nama = 'Drs. NURDIN, M.A';
        $kepala1->nomor_hp = '081361416984';
        $kepala1->gpr_id = 12;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101891';
        $sekolah1->foto = '10101891.jpg';
        $sekolah1->sekolah = 'SMPN 1 DARUL AMAN';
        $sekolah1->alamat = 'Darul Aman, Seuneubok Aceh, Kec. Darul Aman, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196212021984121001';
        $kepala1->nama = 'M. ALI, S.Pd';
        $kepala1->nomor_hp = '085262623202';
        $kepala1->gpr_id = 14;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110437';
        $sekolah1->foto = '10110437.jpg';
        $sekolah1->sekolah = 'SMPN 2 DARUL AMAN';
        $sekolah1->alamat = 'Jln. Alue Lhok, Kapai Baro, Kec. Darul Aman, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196810271995121001';
        $kepala1->nama = 'SYAIFUL JAMAL, S.Pd';
        $kepala1->nomor_hp = '081377135887';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111339';
        $sekolah1->foto = '10111339.jpg';
        $sekolah1->sekolah = 'SMPN 3 DARUL AMAN';
        $sekolah1->alamat = 'Seuneubok Simpang , Buket Rumia, Kec. Darul Aman, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196806131998011001';
        $kepala1->nama = 'Drs. EDI IRSYAD';
        $kepala1->nomor_hp = '085260713117';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110420';
        $sekolah1->foto = '10110420.jpg';
        $sekolah1->sekolah = 'SMPN 1 BANDA ALAM';
        $sekolah1->alamat = 'Jalan Keude Geureubak, Panton Rayeuk M, Kec. Banda Alam, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196709191994122001';
        $kepala1->nama = 'SITI ZALIHA. S.Pd';
        $kepala1->nomor_hp = '082366528830';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69964315';
        $sekolah1->foto = '69964315.jpg';
        $sekolah1->sekolah = 'SMPN 2 BANDA ALAM';
        $sekolah1->alamat = 'JL. KEUDE GEUREUBAK - JAMBO REUHAT, Blang Rambong, Kec. Banda Alam, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196707151988011001';
        $kepala1->nama = 'MANSYUR, S.Pd (plt)';
        $kepala1->nomor_hp = '08113378549';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101898';
        $sekolah1->foto = '10101898.jpg';
        $sekolah1->sekolah = 'SMPN 1 NURUSSALAM';
        $sekolah1->alamat = 'Jalan Kantor desa Keude Bagok, Keude Bagok, Kec. Nurussalam, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197201211998011001';
        $kepala1->nama = 'AZHARI, S.Pd';
        $kepala1->nomor_hp = '081373534282';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111325';
        $sekolah1->foto = '10111325.jpg';
        $sekolah1->sekolah = 'SMPN 2 NURUSSALAM';
        $sekolah1->alamat = 'Jl. Ulee Ateung Bagok, Kampung Mesjid, Kec. Nurussalam, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196605221993031007';
        $kepala1->nama = 'MUHAMMAD YAHYA, S.Pd';
        $kepala1->nomor_hp = '085262562517';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101938';
        $sekolah1->foto = '10101938.jpg';
        $sekolah1->sekolah = 'SMPN 1 DARUL FALAH';
        $sekolah1->alamat = 'Jalan Ulee Gajah Keude Blang, Keude Blang, Kec. Darul Falah, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 4;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197312312007011020';
        $kepala1->nama = 'WAZEN, S.Ag';
        $kepala1->nomor_hp = '085275919450';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101912';
        $sekolah1->foto = '10101912.jpg';
        $sekolah1->sekolah = 'SMPN 1 PEUREULAK';
        $sekolah1->alamat = 'Jalan Pegadaian No. 10, Leuge, Kec. Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197908102009041005';
        $kepala1->nama = 'FAISAL, S.Pd (PLT)';
        $kepala1->nomor_hp = '085262808182';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101927';
        $sekolah1->foto = '10101927.jpg';
        $sekolah1->sekolah = 'SMPN 2 PEUREULAK';
        $sekolah1->alamat = 'Jalan Paya Meuligou Peureulak, Paya Meuligo, Kec. Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196809241999031002';
        $kepala1->nama = 'SUARDI, S.Pd';
        $kepala1->nomor_hp = '081360142221';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110427';
        $sekolah1->foto = '10110427.jpg';
        $sekolah1->sekolah = 'SMPN 3 PEUREULAK';
        $sekolah1->alamat = 'Jl Kuala Beukah , Blang Balok, Kec. Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196506041995011001';
        $kepala1->nama = 'ABD. HANAN, S.Pd';
        $kepala1->nomor_hp = '085261190622';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10113379';
        $sekolah1->foto = '10113379.jpg';
        $sekolah1->sekolah = 'SMPN 4 PEUREULAK';
        $sekolah1->alamat = 'Jalan Medan-B.Aceh, Cot Geulumpang, Kec. Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196904011995121001';
        $kepala1->nama = 'SULAIMAN, S.Pd';
        $kepala1->nomor_hp = '085261619299';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69829176';
        $sekolah1->foto = '69829176.jpg';
        $sekolah1->sekolah = 'SMPN 5 PEUREULAK';
        $sekolah1->alamat = 'JL. MONISA KM. 2, Blang Batee, Kec. Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197610152005041001';
        $kepala1->nama = 'HAMBALI, S.Ag';
        $kepala1->nomor_hp = '085270547054';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110557';
        $sekolah1->foto = '10110557.jpg';
        $sekolah1->sekolah = 'SMPN 1 PEUREULAK BARAT';
        $sekolah1->alamat = 'Jalan Banda Aceh-Medan Km 387, Alue Bu Tuha, Kec. Peureulak Barat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '198109232006042006';
        $kepala1->nama = 'SITI HAJIJAH, S.Pd';
        $kepala1->nomor_hp = '082363000081';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110431';
        $sekolah1->foto = '10110431.jpg';
        $sekolah1->sekolah = 'SMPN 2 PEUREULAK BARAT';
        $sekolah1->alamat = 'Jalan Medan Banda Aceh No.391, Beusa Seberang, Kec. Peureulak Barat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197111052005041001';
        $kepala1->nama = 'MULYADI, S.Pd (plt)';
        $kepala1->nomor_hp = '085270233160';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110432';
        $sekolah1->foto = '10110432.jpg';
        $sekolah1->sekolah = 'SMPN 1 PEUREULAK TIMUR';
        $sekolah1->alamat = 'Jln. Raya B. Aceh-Medan, Seumatang Keude, Kec. Peureulak Timur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196601041999031003';
        $kepala1->nama = 'HAMDANI, S.Pd (plt)';
        $kepala1->nomor_hp = '082166337072';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69899680';
        $sekolah1->foto = '69899680.jpg';
        $sekolah1->sekolah = 'SMPN 2 PEUREULAK TIMUR';
        $sekolah1->alamat = 'JL. TUALANG PATENG, Babah Krueng, Kec. Peureulak Timur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = null;
        $kepala1->nama = 'MUHAMMAD JUANIS, LC';
        $kepala1->nomor_hp = '085261377505';
        $kepala1->gpr_id = null;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10113410';
        $sekolah1->foto = '10113410.jpg';
        $sekolah1->sekolah = 'SMPS PLUS AMAL';
        $sekolah1->alamat = 'JL. BANDA ACEH - MEDAN, Beusa Seberang, Kec. Peureulak Barat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = null;
        $kepala1->nama = 'MUHAMMAD DAR, S.Pd.I, MA';
        $kepala1->nomor_hp = '085262886360';
        $kepala1->gpr_id = null;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110440';
        $sekolah1->foto = '10110440.jpg';
        $sekolah1->sekolah = 'SMPS PT. PPP BLANG SIMPO';
        $sekolah1->alamat = 'PT PPP BLANG SIMPO, Babah Krueng, Kec. Peureulak Timur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = null;
        $kepala1->nama = 'MUHAMMAD NASIR. S.Ud';
        $kepala1->nomor_hp = '081265404829';
        $kepala1->gpr_id = null;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69973954';
        $sekolah1->foto = '69973954.jpg';
        $sekolah1->sekolah = 'SMP AL MAARIF ALUE LHOK';
        $sekolah1->alamat = 'GAMPONG SEUNEUBOK TEUNGOH KEC. PEUREULAK TIMUR, Seuneubok Teungoh, Kec. Peureulak Timur, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 2;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197402182003121005';
        $kepala1->nama = 'ISKANDAR, S.Pd';
        $kepala1->nomor_hp = '085277180441';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101913';
        $sekolah1->foto = '10101913.jpg';
        $sekolah1->sekolah = 'SMPN 1 RANTO PEUREULAK';
        $sekolah1->alamat = 'Desa Pasir Putih, Pasir Putih, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197311272007011004';
        $kepala1->nama = 'MOHD. RIZAL, S.Pd.I';
        $kepala1->nomor_hp = '085296551221';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110539';
        $sekolah1->foto = '10110539.jpg';
        $sekolah1->sekolah = 'SMPN 2 RANTO PEUREULAK';
        $sekolah1->alamat = 'Jalan Tanjung Tani, Seumaly, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196701071988011001';
        $kepala1->nama = 'AIYUB, S.Pd';
        $kepala1->nomor_hp = '085260035757';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110538';
        $sekolah1->foto = '10110538.jpg';
        $sekolah1->sekolah = 'SMPN 3 RANTO PEUREULAK';
        $sekolah1->alamat = 'Jalan Kampung Beusa-peunaron, Alue Geunteng, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196906152000121001';
        $kepala1->nama = 'SURYADI, S.Pd';
        $kepala1->nomor_hp = '085262423266';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110430';
        $sekolah1->foto = '10110430.jpg';
        $sekolah1->sekolah = 'SMPN 4 RANTO PEUREULAK';
        $sekolah1->alamat = 'Jl. Sarah Wp Simpang Sarah Kayu, Seumanah Jaya, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197606082007011003';
        $kepala1->nama = 'MUSTAFA, SPd.I';
        $kepala1->nomor_hp = '085262651466';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111451';
        $sekolah1->foto = '10111451.jpg';
        $sekolah1->sekolah = 'SMPN 5 RANTO PEUREULAK';
        $sekolah1->alamat = 'DUSUN TANJUNG TANI, Paya Palas, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '198211062005041001';
        $kepala1->nama = 'RASYIDIN, S.Pd';
        $kepala1->nomor_hp = '085275112513';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10113650';
        $sekolah1->foto = '10113650.jpg';
        $sekolah1->sekolah = 'SMPN 6 RANTO PEUREULAK';
        $sekolah1->alamat = 'Jalan Darussalam, Buket Pala Bsp, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197808152007011003';
        $kepala1->nama = 'MUHAMMAD JAFAR, S.Pd.I';
        $kepala1->nomor_hp = '085206483349';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '70011109';
        $sekolah1->foto = '70011109.jpg';
        $sekolah1->sekolah = 'SMPN 7 RANTO PEUREULAK';
        $sekolah1->alamat = 'DESA SEUMANAH JAYA, Seumanah Jaya, Kec. Ranto Peureulak, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196702261997022001';
        $kepala1->nama = 'Dra. BERSIH Br TARIGAN';
        $kepala1->nomor_hp = '082370258021';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101928';
        $sekolah1->foto = '10101928.jpg';
        $sekolah1->sekolah = 'SMPN 1 PEUNARON';
        $sekolah1->alamat = 'Jln. Pendidikan No. 3, Bukit Tiga, Kec. Peunaron, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197404062005041002';
        $kepala1->nama = 'IBRAHIM WIN ARIGA, S,Pd';
        $kepala1->nomor_hp = '085312912222';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69952081';
        $sekolah1->foto = '69952081.jpg';
        $sekolah1->sekolah = 'SMPN 2 PEUNARON';
        $sekolah1->alamat = 'JL. DK. II. TRANS UPT III , Peunaron Baru, Kec. Peunaron, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '198108082006041005';
        $kepala1->nama = 'AGUS TRIONO, S.Pd';
        $kepala1->nomor_hp = '082272673084';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101926';
        $sekolah1->foto = '10101926.jpg';
        $sekolah1->sekolah = 'SMPN 1 LOKOP';
        $sekolah1->alamat = 'Serbajadi, Nalon, Kec. Serba Jadi, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197802062003121003';
        $kepala1->nama = 'ISWAHYUDI, S.Pd';
        $kepala1->nomor_hp = '081361245530';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69788597';
        $sekolah1->foto = '69788597.jpg';
        $sekolah1->sekolah = 'SMPN 2 LOKOP';
        $sekolah1->alamat = 'Jln Peunaron-Lokop, Loot, Kec. Serba Jadi, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;
        $sekolah1->koordinator_wilayah_id = 3;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197203102002121003';
        $kepala1->nama = 'SURIADI, S.Pd';
        $kepala1->nomor_hp = '082360771973';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111337';
        $sekolah1->foto = '10111337.jpg';
        $sekolah1->sekolah = 'SMPN 1 SIMPANG JERNIH';
        $sekolah1->alamat = 'Jalan Buntol Gayo, Desa Simpang Jernih, Kec. Simpang Jernih Kode Pos 24464, Simpang Jernih, Kec. Simpang Jernih, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;
        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196604011997021001';
        $kepala1->nama = 'Drs. M. NASIR';
        $kepala1->nomor_hp = '081374352555';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10112898';
        $sekolah1->foto = '10112898.jpg';
        $sekolah1->sekolah = 'SMPN 2 SIMPANG JERNIH';
        $sekolah1->alamat = 'Melidi, Melidi, Kec. Simpang Jernih, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;
        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196906061995121001';
        $kepala1->nama = 'JUNIARDI, SPd';
        $kepala1->nomor_hp = '085297330852';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10113436';
        $sekolah1->foto = '10113436.jpg';
        $sekolah1->sekolah = 'SMPN 3 SIMPANG JERNIH';
        $sekolah1->alamat = 'Rantau Panjang , Rantau Panjang, Kec. Simpang Jernih, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;
        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196809191994121003';
        $kepala1->nama = 'IKHSAN, S.Pd';
        $kepala1->nomor_hp = '085275155525';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101858';
        $sekolah1->foto = '10101858.jpg';
        $sekolah1->sekolah = 'SMPN 1 SUNGAI RAYA';
        $sekolah1->alamat = 'Jalan Langsa-idi Km. 26, Labuhan Keude, Kec. Sungai Raya, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197105022002122002';
        $kepala1->nama = 'SYARIFAH NURAINI, S.Pd, M.M';
        $kepala1->nomor_hp = '085270943070';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69788599';
        $sekolah1->foto = '69788599.jpg';
        $sekolah1->sekolah = 'SMPN 2 SUNGAI RAYA';
        $sekolah1->alamat = 'JL. GAJAH MEUNTAH KM. 2,6, Seuneubok Pase, Kec. Sungai Raya, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196912051993032003';
        $kepala1->nama = 'ROSLINA, S.Pd';
        $kepala1->nomor_hp = '085262471949';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101914';
        $sekolah1->foto = '10101914.jpg';
        $sekolah1->sekolah = 'SMPN 1 RANTAU SELAMAT';
        $sekolah1->alamat = 'Bayeun, Gampong Bayeun, Kec. Rantau Selamat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196404041997031003';
        $kepala1->nama = 'MUHAMMAD NASIR, S.Pd, M.Pd';
        $kepala1->nomor_hp = '082364845665';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111450';
        $sekolah1->foto = '10111450.jpg';
        $sekolah1->sekolah = 'SMPN 2 RANTAU SELAMAT';
        $sekolah1->alamat = 'Jl Desa Alue Kaol, Alue Kaol, Kec. Rantau Selamat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197102162007012003';
        $kepala1->nama = 'ARMIATI, S.Pd (PLT)';
        $kepala1->nomor_hp = '081264572718';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69896122';
        $sekolah1->foto = '69896122.jpg';
        $sekolah1->sekolah = 'SMPN 3 RANTAU SELAMAT';
        $sekolah1->alamat = 'Jl. Medan-Banda Aceh Km.22,5 Dusun Bukit Kuta, Alue Kumba, Kec. Rantau Selamat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197005252006042006';
        $kepala1->nama = 'MARDIANI. S. E';
        $kepala1->nomor_hp = '085373112235';
        $kepala1->gpr_id = 13;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69964055';
        $sekolah1->foto = '69964055.jpg';
        $sekolah1->sekolah = 'SMPN 4 RANTAU SELAMAT';
        $sekolah1->alamat = 'JL. TEUPIN GAPEUH, Rantau Panjang, Kec. Rantau Selamat, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197003012000121003';
        $kepala1->nama = 'ZAINUDDIN, S.Pd';
        $kepala1->nomor_hp = '081269654794';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101889';
        $sekolah1->foto = '10101889.jpg';
        $sekolah1->sekolah = 'SMPN 1 BIREM BAYEUN';
        $sekolah1->alamat = 'Jln. Medan - Banda Aceh KM.427, Paya Peulawi, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196312312007011048';
        $kepala1->nama = 'M. NASIR, S.Pd';
        $kepala1->nomor_hp = '085262627333';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110558';
        $sekolah1->foto = '10110558.jpg';
        $sekolah1->sekolah = 'SMPN 2 BIREM BAYEUN';
        $sekolah1->alamat = 'Jln. Medan-Banda Aceh Km.426, Paya Bili I, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197409272000082001';
        $kepala1->nama = 'NUR JUBAIDAH, S.Pd';
        $kepala1->nomor_hp = '085270747301';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110435';
        $sekolah1->foto = '10110435.jpg';
        $sekolah1->sekolah = 'SMPN 3 BIREM BAYEUN';
        $sekolah1->alamat = 'Jl. Air Terjun, Benteng, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '196511022005041001';
        $kepala1->nama = 'MARZUKI, S.Pd';
        $kepala1->nomor_hp = '082230240506';
        $kepala1->gpr_id = 12;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110436';
        $sekolah1->foto = '10110436.jpg';
        $sekolah1->sekolah = 'SMPN 4 BIREM BAYEUN';
        $sekolah1->alamat = 'Jl. Utama - Dusun Damai, Alue Sentang, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197107151999032002';
        $kepala1->nama = 'SRI AMINAH, S.Pd, M.S';
        $kepala1->nomor_hp = '085276642828';
        $kepala1->gpr_id = 14;
        $kepala1->save();

        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10110767';
        $sekolah1->foto = '10110767.jpg';
        $sekolah1->sekolah = 'SMPN 5 BIREM BAYEUN';
        $sekolah1->alamat = 'Jln.Birem-Alue Teh,Gampong Alue Teh , Alue Teh, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197201021998011001';
        $kepala1->nama = 'ZAILANI, S.Pd';
        $kepala1->nomor_hp = '085262999045';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10101838';
        $sekolah1->foto = '10101838.jpg';
        $sekolah1->sekolah = 'SMPN 6 BIREM BAYEUN';
        $sekolah1->alamat = 'Jln. Paya Ketenggara - Samarinda, Buket Tiga, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = '197012022007012001';
        $kepala1->nama = 'Dra. RIYATI (plt)';
        $kepala1->nomor_hp = '081361705664';
        $kepala1->gpr_id = 13;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69814185';
        $sekolah1->foto = '69814185.jpg';
        $sekolah1->sekolah = 'SMPN 7 BIREM BAYEUN';
        $sekolah1->alamat = 'JL. DESA JAMBO LABU, Jambur Labu, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = null;
        $kepala1->nama = 'ZULKIFLI. S.Pd.I';
        $kepala1->nomor_hp = '081269966042';
        $kepala1->gpr_id = null;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '10111914';
        $sekolah1->foto = '10111914.jpg';
        $sekolah1->sekolah = 'SMPS MERDEKA';
        $sekolah1->alamat = 'Tampur Paloh , Tampor Paloh, Kec. Simpang Jernih, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = null;
        $kepala1->nama = 'MUHAMMAD FAISHAL, S.Pd';
        $kepala1->nomor_hp = '081269964423';
        $kepala1->gpr_id = null;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '69971805';
        $sekolah1->foto = '69971805.jpg';
        $sekolah1->sekolah = 'SMPS PLUS ASHABUL HUDA AL ASYI';
        $sekolah1->alamat = 'Jl. Medan - Banda Aceh Dusun Sepakat, Labuhan Keude, Kec. Sungai Raya, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();

        $kepala1 = new Kepala;
        $kepala1->nip = null;
        $kepala1->nama = 'SALMAN NURDIN, LC. MA';
        $kepala1->nomor_hp = '081260001232';
        $kepala1->gpr_id = null;
        $kepala1->save();
        $sekolah1 = new Sekolah;
        $sekolah1->npsn = '70010733';
        $sekolah1->foto = '70010733.jpg';
        $sekolah1->sekolah = 'SMP Islam Terpadu Yayasan Dar Faqih Qurani';
        $sekolah1->alamat = 'Jalan medan - Banda Aceh Gampong Keude Birem, Keude Birem, Kec. Birem Bayeun, Kab. Aceh Timur Prov. Aceh';
        $sekolah1->kepala_id = $kepala1->id;

        $sekolah1->koordinator_wilayah_id = 1;
        $sekolah1->save();
    }
}
