<?php

namespace Database\Seeders;

use App\Models\Kepala;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kepala = new Kepala;
        $kepala->nip = '197009221998011001';
        $kepala->nama = 'AHMAD ZAKKI YAMANI, S.Ag., MA';
        $kepala->nomor_hp = '085360037778';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101915';
        $sekolah->foto = '10101915.jpg';
        $sekolah->sekolah = 'SMPN 1 SIMPANG ULIM';
        $sekolah->alamat = 'Jln. Banda Aceh Medan KM. 340 Simpang Ulim, Gampong Blang, Kec. Simpang Ulim';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();
        $user = new User;
        $user->name = $sekolah->sekolah;
        $user->email = Str::slug($sekolah->sekolah, '.') . '@simpmb.com';
        $user->password = Hash::make('simpmb2021');
        $user->sekolah_id = $sekolah->id;
        $user->as = 'sekolah';
        $user->save();

        $kepala = new Kepala;
        $kepala->nip = '197012301998011001';
        $kepala->nama = 'SYARKAWI, S.Pd.';
        $kepala->nomor_hp = '085288525345';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110450';
        $sekolah->foto = '10110450.jpg';
        $sekolah->sekolah = 'SMPN 2 SIMPANG ULIM';
        $sekolah->alamat = 'Jln. Banda Aceh - Medan Desa Matang Kumbang Kec. Simpang Ulim';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();
        $user = new User;
        $user->name = $sekolah->sekolah;
        $user->email = Str::slug($sekolah->sekolah, '.') . '@simpmb.com';
        $user->password = Hash::make('simpmb2021');
        $user->sekolah_id = $sekolah->id;
        $user->as = 'sekolah';
        $user->save();


        $kepala = new Kepala;
        $kepala->nip = '198302032007011002';
        $kepala->nama = 'ISLAHUDDIN, S.Pd.I';
        $kepala->nomor_hp = '085262967966';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101930';
        $sekolah->foto = '10101930.jpg';
        $sekolah->sekolah = 'SMPN 1 PANTEE BIDARI';
        $sekolah->alamat = 'Jln. Pendidikan - Lhok Nibong Kec. Pante Bidari';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197701102003121005';
        $kepala->nama = 'HASAN BASRI, S.Pd';
        $kepala->nomor_hp = '085297679776';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110459';
        $sekolah->foto = '10110459.jpg';
        $sekolah->sekolah = 'SMPN 2 PANTEE BIDARI';
        $sekolah->alamat = 'Jln. Banda Aceh - Medan Km. 331 Desa Putoh Sa Kec. Pantee Bidari';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196412062005041001';
        $kepala->nama = 'Drs. FADHIL';
        $kepala->nomor_hp = '081360258968';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110548';
        $sekolah->foto = '10110548.jpg';
        $sekolah->sekolah = 'SMPN 3 PANTEE BIDARI';
        $sekolah->alamat = 'Jln. Teupin Batee - Pasi Tinggi Desa Alue Ie Mirah';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196511022005041001';
        $kepala->nama = 'MARZUKI, S.Pd';
        $kepala->nomor_hp = '085260063630';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10112851';
        $sekolah->foto = '10112851.jpg';
        $sekolah->sekolah = 'SMPN 4 PANTEE BIDARI';
        $sekolah->alamat = 'Jln. Exxon Mobil Sejudo Desa Kec. Pante Bidari';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196501101998031003';
        $kepala->nama = 'Drs. ABDUL AZIZ';
        $kepala->nomor_hp = '085260054794';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69788603';
        $sekolah->foto = '69788603.jpg';
        $sekolah->sekolah = 'SMPN 5 PANTEE BIDARI';
        $sekolah->alamat = 'Jln. Teupin Batee - Blang Seunong Kec. Pante Bidari';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196212311985121007';
        $kepala->nama = 'Drs. ZAINI';
        $kepala->nomor_hp = '081362643232';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101922';
        $sekolah->foto = '10101922.jpg';
        $sekolah->sekolah = 'SMPN 1 MADAT';
        $sekolah->alamat = 'Jln. Pang Purek  Kec. Madat';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196703162000082001';
        $kepala->nama = 'KHADIJAH, S.Pd. MM';
        $kepala->nomor_hp = '085261555032';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110382';
        $sekolah->foto = '10110382.jpg';
        $sekolah->sekolah = 'SMPN 2 MADAT';
        $sekolah->alamat = 'Jln. Lueng Sa Km. 4 No.1 Gampong Blang Awe Kec. Madat';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196503061990031005';
        $kepala->nama = 'MUZAKKIR, S.Pd';
        $kepala->nomor_hp = '085260009282';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10111452';
        $sekolah->foto = '10111452.jpg';
        $sekolah->sekolah = 'SMPN 3 MADAT';
        $sekolah->alamat = 'Jln. Tanjung Minjei - Mns Asan Km.8';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197004132000121001';
        $kepala->nama = 'SOFYAN, S.Pd, M.Pd';
        $kepala->nomor_hp = '082397531141';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69814192';
        $sekolah->foto = '69814192.jpg';
        $sekolah->sekolah = 'SMPN SATU ATAP SDN KUALA SIMPANG ULIM';
        $sekolah->alamat = 'Jln. Kuala Simpang Ulim Desa Kuala Kec. Simpang Ulim';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 7;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196510051988031007';
        $kepala->nama = 'NASWAR, S.Pd, M.Pd';
        $kepala->nomor_hp = '085261975744';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101893';
        $sekolah->foto = '10101893.jpg';
        $sekolah->sekolah = 'SMPN 1 JULOK';
        $sekolah->alamat = 'JLN MEDAN - BANDA ACEH, Blang Paoh Satu, Kec. Julok';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196906202008011001';
        $kepala->nama = 'NURDIN, S.Pd.I';
        $kepala->nomor_hp = '081360159796';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101923';
        $sekolah->foto = '10101923.jpg';
        $sekolah->sekolah = 'SMPN 2 JULOK';
        $sekolah->alamat = 'Jl. Medan - Banda Aceh, Alue Cek Doy, Kec. Julok';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197611252003122004';
        $kepala->nama = 'HASMAH ZAHARA, S.Pd, M.M';
        $kepala->nomor_hp = '081361656616';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110439';
        $sekolah->foto = '10110439.jpg';
        $sekolah->sekolah = 'SMPN 3 JULOK';
        $sekolah->alamat = 'Alue Meuh, Blang Gleum, Kec. Julok';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197205102006041003';
        $kepala->nama = 'MUSLEM, S.Pd';
        $kepala->nomor_hp = '085277167965';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10113615';
        $sekolah->foto = '10113615.jpg';
        $sekolah->sekolah = 'SMPN 4 JULOK';
        $sekolah->alamat = 'Simpang Tiga , Simpang Lhee, Kec. Julok';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196312311984032012';
        $kepala->nama = 'SURIATI, S.Pd';
        $kepala->nomor_hp = '085270466020';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69788598';
        $sekolah->foto = '69788598.jpg';
        $sekolah->sekolah = 'SMPN 5 JULOK';
        $sekolah->alamat = 'JL. ALUE IE MIRAH, Buket Panyang, Kec. Julok';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197107021998011001';
        $kepala->nama = 'SULAIMAN, S.Pd';
        $kepala->nomor_hp = '085296240986';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110545';
        $sekolah->foto = '10110545.jpg';
        $sekolah->sekolah = 'SMPN 1 INDRA MAKMU';
        $sekolah->alamat = 'JL. OLINDO, Alue Ie Mirah, Kec. Indra Makmur';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '198004022002122005';
        $kepala->nama = 'LENNYZA, S.Pd';
        $kepala->nomor_hp = '081377193399';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101918';
        $sekolah->foto = '10101918.jpg';
        $sekolah->sekolah = 'SMPN 2 INDRA MAKMU';
        $sekolah->alamat = 'Afdeling II, Perk Julok Rayeuk Utara, Kec. Indra Makmur';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197805042008011003';
        $kepala->nama = 'BAHTIAR, S.Pd.I, M.Pd.I';
        $kepala->nomor_hp = '082361485511';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10112959';
        $sekolah->foto = '10112959.jpg';
        $sekolah->sekolah = 'SMPN 3 INDRA MAKMU';
        $sekolah->alamat = 'Jalan Alue Ie Mirah Dusun BPM Desa Bandar Baro Kecamatan Indra Makmu, Bandar Baro, Kec. Indra Makmur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 6;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197908202003121006';
        $kepala->nama = 'MUSTAFA KAMAL, S.Pd';
        $kepala->nomor_hp = '085260017658';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110422';
        $sekolah->foto = '10110422.jpg';
        $sekolah->sekolah = 'SMPN 1 DARUL IKHSAN';
        $sekolah->alamat = 'Keude Dua, Keude Dua, Kec. Darul Ihsan';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197907162005041001';
        $kepala->nama = 'SUHAIMI, S.Pd';
        $kepala->nomor_hp = '085360907611';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10113437';
        $sekolah->foto = '10113437.jpg';
        $sekolah->sekolah = 'SMPN 2 DARUL IKHSAN';
        $sekolah->alamat = 'Jl. Idi-Keude Dua , Seuneubok Teungoh (Kd Ii), Kec. Darul Ihsan';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197401042005042002';
        $kepala->nama = 'HAMIDAH ROKAYANA, S.Pd, M.M';
        $kepala->nomor_hp = '085260115827';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101892';
        $sekolah->foto = '10101892.jpg';
        $sekolah->sekolah = 'SMPN 1 IDI';
        $sekolah->alamat = 'Jl. Peutua Husen, Kampung Jawa, Kec. Idi Rayeuk';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197004201995122001';
        $kepala->nama = 'SRI SUSILAWATI, S.Pd, M.Pd';
        $kepala->nomor_hp = '085262766018';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101932';
        $sekolah->foto = '10101932.jpg';
        $sekolah->sekolah = 'SMPN 2 IDI';
        $sekolah->alamat = 'Jln.Banda Aceh - Medan Km.365, Gampong Jalan, Kec. Idi Rayeuk';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197312312007011446';
        $kepala->nama = 'SAMSUL BAHRI, S.Pd';
        $kepala->nomor_hp = '085359090866';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101917';
        $sekolah->foto = '10101917.jpg';
        $sekolah->sekolah = 'SMPN 3 IDI';
        $sekolah->alamat = 'JLN. GUREB DUSUN PENDIDIKAN, Sam Pai Mah, Kec. Idi Rayeuk';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197808312005041001';
        $kepala->nama = 'HASTAMI, S.Pd, M.Pd';
        $kepala->nomor_hp = '085260016261';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110424';
        $sekolah->foto = '10110424.jpg';
        $sekolah->sekolah = 'SMPN 1 PEUDAWA';
        $sekolah->alamat = 'Jl. Medan B. Aceh Langsa Km. 382 Peudawa, Kampung Keude, Kec. Peudawa';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196812311994121002';
        $kepala->nama = 'RUSLI, S.Pd';
        $kepala->nomor_hp = '085262569227';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110421';
        $sekolah->foto = '10110421.jpg';
        $sekolah->sekolah = 'SMPN 1 IDI TUNONG';
        $sekolah->alamat = 'Desa Buket Teukuh, Buket Teukuh, Kec. Idi Tunong';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196605181994121001';
        $kepala->nama = 'AMBIA, S.Pd';
        $kepala->nomor_hp = '085342004894';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69726332';
        $sekolah->foto = '69726332.jpg';
        $sekolah->sekolah = 'SMPN 2 IDI TUNONG';
        $sekolah->alamat = 'Jalan Asamera, Paya Awe, Kec. Idi Tunong';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197908062003121003';
        $kepala->nama = 'MUHAMMAD SYUID AR, S.Pd, M.M';
        $kepala->nomor_hp = '085260512012';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110438';
        $sekolah->foto = '10110438.jpg';
        $sekolah->sekolah = 'SMPN 1 IDI TIMUR';
        $sekolah->alamat = 'Jl. Peudawa Puntong , Seuneubok Kuyun, Kec. Idi Timur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196801131991032002';
        $kepala->nama = 'HAFIZAH, S.Pd';
        $kepala->nomor_hp = '085296861940';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69849581';
        $sekolah->foto = '69849581.jpg';
        $sekolah->sekolah = 'SMPN 2 IDI TIMUR';
        $sekolah->alamat = 'Jl. T. Panglima Prang Adam, Matang Bungong, Kec. Idi Timur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196410282007011006';
        $kepala->nama = 'Drs. WIJIYANTO';
        $kepala->nomor_hp = '082275732995';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69963922';
        $sekolah->foto = '69963922.jpg';
        $sekolah->sekolah = 'SMPN TERPADU TANOH ANOE IDI';
        $sekolah->alamat = 'Lr. Mansyur Desa Tanoh Anoe Barat, Tanoh Anou, Kec. Idi Rayeuk';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 5;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196912312005041003';
        $kepala->nama = 'Drs. NURDIN, M.A';
        $kepala->nomor_hp = '081361416984';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101891';
        $sekolah->foto = '10101891.jpg';
        $sekolah->sekolah = 'SMPN 1 DARUL AMAN';
        $sekolah->alamat = 'Darul Aman, Seuneubok Aceh, Kec. Darul Aman';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196212021984121001';
        $kepala->nama = 'M. ALI, S.Pd';
        $kepala->nomor_hp = '085262623202';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110437';
        $sekolah->foto = '10110437.jpg';
        $sekolah->sekolah = 'SMPN 2 DARUL AMAN';
        $sekolah->alamat = 'Jln. Alue Lhok, Kapai Baro, Kec. Darul Aman';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196810271995121001';
        $kepala->nama = 'SYAIFUL JAMAL, S.Pd';
        $kepala->nomor_hp = '081377135887';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10111339';
        $sekolah->foto = '10111339.jpg';
        $sekolah->sekolah = 'SMPN 3 DARUL AMAN';
        $sekolah->alamat = 'Seuneubok Simpang , Buket Rumia, Kec. Darul Aman';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196806131998011001';
        $kepala->nama = 'Drs. EDI IRSYAD';
        $kepala->nomor_hp = '085260713117';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110420';
        $sekolah->foto = '10110420.jpg';
        $sekolah->sekolah = 'SMPN 1 BANDA ALAM';
        $sekolah->alamat = 'Jalan Keude Geureubak, Panton Rayeuk M, Kec. Banda Alam';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196709191994122001';
        $kepala->nama = 'SITI ZALIHA. S.Pd';
        $kepala->nomor_hp = '082366528830';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '69964315';
        $sekolah->foto = '69964315.jpg';
        $sekolah->sekolah = 'SMPN 2 BANDA ALAM';
        $sekolah->alamat = 'JL. KEUDE GEUREUBAK - JAMBO REUHAT, Blang Rambong, Kec. Banda Alam';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196707151988011001';
        $kepala->nama = 'MANSYUR, S.Pd (plt)';
        $kepala->nomor_hp = '08113378549';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101898';
        $sekolah->foto = '10101898.jpg';
        $sekolah->sekolah = 'SMPN 1 NURUSSALAM';
        $sekolah->alamat = 'Jalan Kantor desa Keude Bagok, Keude Bagok, Kec. Nurussalam';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197201211998011001';
        $kepala->nama = 'AZHARI, S.Pd';
        $kepala->nomor_hp = '081373534282';
        $kepala->gpr_id = 14;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10111325';
        $sekolah->foto = '10111325.jpg';
        $sekolah->sekolah = 'SMPN 2 NURUSSALAM';
        $sekolah->alamat = 'Jl. Ulee Ateung Bagok, Kampung Mesjid, Kec. Nurussalam';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196605221993031007';
        $kepala->nama = 'MUHAMMAD YAHYA, S.Pd';
        $kepala->nomor_hp = '085262562517';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101938';
        $sekolah->foto = '10101938.jpg';
        $sekolah->sekolah = 'SMPN 1 DARUL FALAH';
        $sekolah->alamat = 'Jalan Ulee Gajah Keude Blang, Keude Blang, Kec. Darul Falah';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 4;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197312312007011020';
        $kepala->nama = 'WAZEN, S.Ag';
        $kepala->nomor_hp = '085275919450';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101912';
        $sekolah->foto = '10101912.jpg';
        $sekolah->sekolah = 'SMPN 1 PEUREULAK';
        $sekolah->alamat = 'Jalan Pegadaian No. 10, Leuge, Kec. Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197908102009041005';
        $kepala->nama = 'FAISAL, S.Pd (PLT)';
        $kepala->nomor_hp = '085262808182';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101927';
        $sekolah->foto = '10101927.jpg';
        $sekolah->sekolah = 'SMPN 2 PEUREULAK';
        $sekolah->alamat = 'Jalan Paya Meuligou Peureulak, Paya Meuligo, Kec. Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196809241999031002';
        $kepala->nama = 'SUARDI, S.Pd';
        $kepala->nomor_hp = '081360142221';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110427';
        $sekolah->foto = '10110427.jpg';
        $sekolah->sekolah = 'SMPN 3 PEUREULAK';
        $sekolah->alamat = 'Jl Kuala Beukah , Blang Balok, Kec. Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196506041995011001';
        $kepala->nama = 'ABD. HANAN, S.Pd';
        $kepala->nomor_hp = '085261190622';
        $kepala->gpr_id = 14;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10113379';
        $sekolah->foto = '10113379.jpg';
        $sekolah->sekolah = 'SMPN 4 PEUREULAK';
        $sekolah->alamat = 'Jalan Medan-B.Aceh, Cot Geulumpang, Kec. Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196904011995121001';
        $kepala->nama = 'SULAIMAN, S.Pd';
        $kepala->nomor_hp = '085261619299';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '69829176';
        $sekolah->foto = '69829176.jpg';
        $sekolah->sekolah = 'SMPN 5 PEUREULAK';
        $sekolah->alamat = 'JL. MONISA KM. 2, Blang Batee, Kec. Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197610152005041001';
        $kepala->nama = 'HAMBALI, S.Ag';
        $kepala->nomor_hp = '085270547054';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110557';
        $sekolah->foto = '10110557.jpg';
        $sekolah->sekolah = 'SMPN 1 PEUREULAK BARAT';
        $sekolah->alamat = 'Jalan Banda Aceh-Medan Km 387, Alue Bu Tuha, Kec. Peureulak Barat';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '198109232006042006';
        $kepala->nama = 'SITI HAJIJAH, S.Pd';
        $kepala->nomor_hp = '082363000081';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110431';
        $sekolah->foto = '10110431.jpg';
        $sekolah->sekolah = 'SMPN 2 PEUREULAK BARAT';
        $sekolah->alamat = 'Jalan Medan Banda Aceh No.391, Beusa Seberang, Kec. Peureulak Barat';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197111052005041001';
        $kepala->nama = 'MULYADI, S.Pd (plt)';
        $kepala->nomor_hp = '085270233160';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110432';
        $sekolah->foto = '10110432.jpg';
        $sekolah->sekolah = 'SMPN 1 PEUREULAK TIMUR';
        $sekolah->alamat = 'Jln. Raya B. Aceh-Medan, Seumatang Keude, Kec. Peureulak Timur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196601041999031003';
        $kepala->nama = 'HAMDANI, S.Pd (plt)';
        $kepala->nomor_hp = '082166337072';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '69899680';
        $sekolah->foto = '69899680.jpg';
        $sekolah->sekolah = 'SMPN 2 PEUREULAK TIMUR';
        $sekolah->alamat = 'JL. TUALANG PATENG, Babah Krueng, Kec. Peureulak Timur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'MUHAMMAD JUANIS, LC';
        $kepala->nomor_hp = '085261377505';
        $kepala->gpr_id = null;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10113410';
        $sekolah->foto = '10113410.jpg';
        $sekolah->sekolah = 'SMPS PLUS AMAL';
        $sekolah->alamat = 'JL. BANDA ACEH - MEDAN, Beusa Seberang, Kec. Peureulak Barat';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'MUHAMMAD DAR, S.Pd.I, MA';
        $kepala->nomor_hp = '085262886360';
        $kepala->gpr_id = null;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110440';
        $sekolah->foto = '10110440.jpg';
        $sekolah->sekolah = 'SMPS PT. PPP BLANG SIMPO';
        $sekolah->alamat = 'PT PPP BLANG SIMPO, Babah Krueng, Kec. Peureulak Timur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'MUHAMMAD NASIR. S.Ud';
        $kepala->nomor_hp = '081265404829';
        $kepala->gpr_id = null;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '69973954';
        $sekolah->foto = '69973954.jpg';
        $sekolah->sekolah = 'SMP AL MAARIF ALUE LHOK';
        $sekolah->alamat = 'GAMPONG SEUNEUBOK TEUNGOH KEC. PEUREULAK TIMUR, Seuneubok Teungoh, Kec. Peureulak Timur';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 2;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197402182003121005';
        $kepala->nama = 'ISKANDAR, S.Pd';
        $kepala->nomor_hp = '085277180441';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101913';
        $sekolah->foto = '10101913.jpg';
        $sekolah->sekolah = 'SMPN 1 RANTO PEUREULAK';
        $sekolah->alamat = 'Desa Pasir Putih, Pasir Putih, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197311272007011004';
        $kepala->nama = 'MOHD. RIZAL, S.Pd.I';
        $kepala->nomor_hp = '085296551221';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110539';
        $sekolah->foto = '10110539.jpg';
        $sekolah->sekolah = 'SMPN 2 RANTO PEUREULAK';
        $sekolah->alamat = 'Jalan Tanjung Tani, Seumaly, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196701071988011001';
        $kepala->nama = 'AIYUB, S.Pd';
        $kepala->nomor_hp = '085260035757';
        $kepala->gpr_id = 14;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110538';
        $sekolah->foto = '10110538.jpg';
        $sekolah->sekolah = 'SMPN 3 RANTO PEUREULAK';
        $sekolah->alamat = 'Jalan Kampung Beusa-peunaron, Alue Geunteng, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196906152000121001';
        $kepala->nama = 'SURYADI, S.Pd';
        $kepala->nomor_hp = '085262423266';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110430';
        $sekolah->foto = '10110430.jpg';
        $sekolah->sekolah = 'SMPN 4 RANTO PEUREULAK';
        $sekolah->alamat = 'Jl. Sarah Wp Simpang Sarah Kayu, Seumanah Jaya, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197606082007011003';
        $kepala->nama = 'MUSTAFA, SPd.I';
        $kepala->nomor_hp = '085262651466';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10111451';
        $sekolah->foto = '10111451.jpg';
        $sekolah->sekolah = 'SMPN 5 RANTO PEUREULAK';
        $sekolah->alamat = 'DUSUN TANJUNG TANI, Paya Palas, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '198211062005041001';
        $kepala->nama = 'RASYIDIN, S.Pd';
        $kepala->nomor_hp = '085275112513';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10113650';
        $sekolah->foto = '10113650.jpg';
        $sekolah->sekolah = 'SMPN 6 RANTO PEUREULAK';
        $sekolah->alamat = 'Jalan Darussalam, Buket Pala Bsp, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197808152007011003';
        $kepala->nama = 'MUHAMMAD JAFAR, S.Pd.I';
        $kepala->nomor_hp = '085206483349';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '70011109';
        $sekolah->foto = '70011109.jpg';
        $sekolah->sekolah = 'SMPN 7 RANTO PEUREULAK';
        $sekolah->alamat = 'DESA SEUMANAH JAYA, Seumanah Jaya, Kec. Ranto Peureulak';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196702261997022001';
        $kepala->nama = 'Dra. BERSIH Br TARIGAN';
        $kepala->nomor_hp = '082370258021';
        $kepala->gpr_id = 14;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101928';
        $sekolah->foto = '10101928.jpg';
        $sekolah->sekolah = 'SMPN 1 PEUNARON';
        $sekolah->alamat = 'Jln. Pendidikan No. 3, Bukit Tiga, Kec. Peunaron';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197404062005041002';
        $kepala->nama = 'IBRAHIM WIN ARIGA, S,Pd';
        $kepala->nomor_hp = '085312912222';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '69952081';
        $sekolah->foto = '69952081.jpg';
        $sekolah->sekolah = 'SMPN 2 PEUNARON';
        $sekolah->alamat = 'JL. DK. II. TRANS UPT III , Peunaron Baru, Kec. Peunaron';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '198108082006041005';
        $kepala->nama = 'AGUS TRIONO, S.Pd';
        $kepala->nomor_hp = '082272673084';
        $kepala->gpr_id = 13;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10101926';
        $sekolah->foto = '10101926.jpg';
        $sekolah->sekolah = 'SMPN 1 LOKOP';
        $sekolah->alamat = 'Serbajadi, Nalon, Kec. Serba Jadi';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197802062003121003';
        $kepala->nama = 'ISWAHYUDI, S.Pd';
        $kepala->nomor_hp = '081361245530';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '69788597';
        $sekolah->foto = '69788597.jpg';
        $sekolah->sekolah = 'SMPN 2 LOKOP';
        $sekolah->alamat = 'Jln Peunaron-Lokop, Loot, Kec. Serba Jadi';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 3;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197203102002121003';
        $kepala->nama = 'SURIADI, S.Pd';
        $kepala->nomor_hp = '082360771973';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10111337';
        $sekolah->foto = '10111337.jpg';
        $sekolah->sekolah = 'SMPN 1 SIMPANG JERNIH';
        $sekolah->alamat = 'Jalan Buntol Gayo, Desa Simpang Jernih, Kec. Simpang Jernih Kode Pos 24464, Simpang Jernih, Kec. Simpang Jernih';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();
        $kepala = new Kepala;
        $kepala->nip = '196604011997021001';
        $kepala->nama = 'Drs. M. NASIR';
        $kepala->nomor_hp = '081374352555';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10112898';
        $sekolah->foto = '10112898.jpg';
        $sekolah->sekolah = 'SMPN 2 SIMPANG JERNIH';
        $sekolah->alamat = 'Melidi, Melidi, Kec. Simpang Jernih';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();
        $kepala = new Kepala;
        $kepala->nip = '196906061995121001';
        $kepala->nama = 'JUNIARDI, SPd';
        $kepala->nomor_hp = '085297330852';
        $kepala->gpr_id = 14;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10113436';
        $sekolah->foto = '10113436.jpg';
        $sekolah->sekolah = 'SMPN 3 SIMPANG JERNIH';
        $sekolah->alamat = 'Rantau Panjang , Rantau Panjang, Kec. Simpang Jernih';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196809191994121003';
        $kepala->nama = 'IKHSAN, S.Pd';
        $kepala->nomor_hp = '085275155525';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101858';
        $sekolah->foto = '10101858.jpg';
        $sekolah->sekolah = 'SMPN 1 SUNGAI RAYA';
        $sekolah->alamat = 'Jalan Langsa-idi Km. 26, Labuhan Keude, Kec. Sungai Raya';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197105022002122002';
        $kepala->nama = 'SYARIFAH NURAINI, S.Pd, M.M';
        $kepala->nomor_hp = '085270943070';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69788599';
        $sekolah->foto = '69788599.jpg';
        $sekolah->sekolah = 'SMPN 2 SUNGAI RAYA';
        $sekolah->alamat = 'JL. GAJAH MEUNTAH KM. 2,6, Seuneubok Pase, Kec. Sungai Raya';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196912051993032003';
        $kepala->nama = 'ROSLINA, S.Pd';
        $kepala->nomor_hp = '085262471949';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101914';
        $sekolah->foto = '10101914.jpg';
        $sekolah->sekolah = 'SMPN 1 RANTAU SELAMAT';
        $sekolah->alamat = 'Bayeun, Gampong Bayeun, Kec. Rantau Selamat';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196404041997031003';
        $kepala->nama = 'MUHAMMAD NASIR, S.Pd, M.Pd';
        $kepala->nomor_hp = '082364845665';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10111450';
        $sekolah->foto = '10111450.jpg';
        $sekolah->sekolah = 'SMPN 2 RANTAU SELAMAT';
        $sekolah->alamat = 'Jl Desa Alue Kaol, Alue Kaol, Kec. Rantau Selamat';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197102162007012003';
        $kepala->nama = 'ARMIATI, S.Pd (PLT)';
        $kepala->nomor_hp = '081264572718';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69896122';
        $sekolah->foto = '69896122.jpg';
        $sekolah->sekolah = 'SMPN 3 RANTAU SELAMAT';
        $sekolah->alamat = 'Jl. Medan-Banda Aceh Km.22,5 Dusun Bukit Kuta, Alue Kumba, Kec. Rantau Selamat';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197005252006042006';
        $kepala->nama = 'MARDIANI. S. E';
        $kepala->nomor_hp = '085373112235';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69964055';
        $sekolah->foto = '69964055.jpg';
        $sekolah->sekolah = 'SMPN 4 RANTAU SELAMAT';
        $sekolah->alamat = 'JL. TEUPIN GAPEUH, Rantau Panjang, Kec. Rantau Selamat';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197003012000121003';
        $kepala->nama = 'ZAINUDDIN, S.Pd';
        $kepala->nomor_hp = '081269654794';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101889';
        $sekolah->foto = '10101889.jpg';
        $sekolah->sekolah = 'SMPN 1 BIREM BAYEUN';
        $sekolah->alamat = 'Jln. Medan - Banda Aceh KM.427, Paya Peulawi, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196312312007011048';
        $kepala->nama = 'M. NASIR, S.Pd';
        $kepala->nomor_hp = '085262627333';
        $kepala->gpr_id = 12;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110558';
        $sekolah->foto = '10110558.jpg';
        $sekolah->sekolah = 'SMPN 2 BIREM BAYEUN';
        $sekolah->alamat = 'Jln. Medan-Banda Aceh Km.426, Paya Bili I, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197409272000082001';
        $kepala->nama = 'NUR JUBAIDAH, S.Pd';
        $kepala->nomor_hp = '085270747301';
        $kepala->gpr_id = 14;
        $kepala->save();

        $sekolah = new Sekolah;
        $sekolah->npsn = '10110435';
        $sekolah->foto = '10110435.jpg';
        $sekolah->sekolah = 'SMPN 3 BIREM BAYEUN';
        $sekolah->alamat = 'Jl. Air Terjun, Benteng, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;

        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '196511022005041001';
        $kepala->nama = 'MARZUKI, S.Pd';
        $kepala->nomor_hp = '082230240506';
        $kepala->gpr_id = 12;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110436';
        $sekolah->foto = '10110436.jpg';
        $sekolah->sekolah = 'SMPN 4 BIREM BAYEUN';
        $sekolah->alamat = 'Jl. Utama - Dusun Damai, Alue Sentang, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197107151999032002';
        $kepala->nama = 'SRI AMINAH, S.Pd, M.S';
        $kepala->nomor_hp = '085276642828';
        $kepala->gpr_id = 14;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10110767';
        $sekolah->foto = '10110767.jpg';
        $sekolah->sekolah = 'SMPN 5 BIREM BAYEUN';
        $sekolah->alamat = 'Jln.Birem-Alue Teh,Gampong Alue Teh , Alue Teh, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197201021998011001';
        $kepala->nama = 'ZAILANI, S.Pd';
        $kepala->nomor_hp = '085262999045';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10101838';
        $sekolah->foto = '10101838.jpg';
        $sekolah->sekolah = 'SMPN 6 BIREM BAYEUN';
        $sekolah->alamat = 'Jln. Paya Ketenggara - Samarinda, Buket Tiga, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = '197012022007012001';
        $kepala->nama = 'Dra. RIYATI (plt)';
        $kepala->nomor_hp = '081361705664';
        $kepala->gpr_id = 13;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69814185';
        $sekolah->foto = '69814185.jpg';
        $sekolah->sekolah = 'SMPN 7 BIREM BAYEUN';
        $sekolah->alamat = 'JL. DESA JAMBO LABU, Jambur Labu, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'ZULKIFLI. S.Pd.I';
        $kepala->nomor_hp = '081269966042';
        $kepala->gpr_id = null;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '10111914';
        $sekolah->foto = '10111914.jpg';
        $sekolah->sekolah = 'SMPS MERDEKA';
        $sekolah->alamat = 'Tampur Paloh , Tampor Paloh, Kec. Simpang Jernih';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'MUHAMMAD FAISHAL, S.Pd';
        $kepala->nomor_hp = '081269964423';
        $kepala->gpr_id = null;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69971805';
        $sekolah->foto = '69971805.jpg';
        $sekolah->sekolah = 'SMPS PLUS ASHABUL HUDA AL ASYI';
        $sekolah->alamat = 'Jl. Medan - Banda Aceh Dusun Sepakat, Labuhan Keude, Kec. Sungai Raya';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'SALMAN NURDIN, LC. MA';
        $kepala->nomor_hp = '081260001232';
        $kepala->gpr_id = null;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '70010733';
        $sekolah->foto = '70010733.jpg';
        $sekolah->sekolah = 'SMP ISLAM TERPADU YAYASAN DAR FAQIH QURANI';
        $sekolah->alamat = 'Jl. Medan - Banda Aceh Gampong Keude Birem, Keude Birem, Kec. Birem Bayeun';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'TgK. UMAR BIN JALAL, S.Pd.I';
        $kepala->nomor_hp = '085261819254';
        $kepala->gpr_id = null;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69814171';
        $sekolah->foto = '69814171.jpg';
        $sekolah->sekolah = 'SMPS PLUS NURUSSAADAH';
        $sekolah->alamat = 'Desa Paya Demam Sa Kec. Pantee Bidari';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();

        $kepala = new Kepala;
        $kepala->nip = null;
        $kepala->nama = 'RATNA DEWI, S.Pd';
        $kepala->nomor_hp = '082269879122';
        $kepala->gpr_id = null;
        $kepala->save();
        $sekolah = new Sekolah;
        $sekolah->npsn = '69964240';
        $sekolah->foto = '69964240.jpg';
        $sekolah->sekolah = 'SMPS TERPADU FATHURRAHMAN';
        $sekolah->alamat = 'Desa Buket Bata Kec. Pante Bidari';
        $sekolah->kepala_id = $kepala->id;
        $sekolah->koordinator_wilayah_id = 1;
        $sekolah->save();
    }
}
