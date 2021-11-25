<x-app-layout>
    <div class="flex flex-col capitalize mt-4 text-3xl">
        <span class="font-semibold">hello, {{ Auth::user()->name }}</span>
    </div>
    <div class="flex">
        <div class="mr-6 w-full mt-8 flex-shrink-0 flex flex-col bg-white dark:bg-gray-600 rounded-lg">
            <!-- Card list container -->
            <h3 class="flex items-center px-8 my-3 text-lg font-semibold capitalize dark:text-gray-300">
                <!-- Header -->
                <span>Update Akun</span>
            </h3>
            <div>
                <!-- List -->
                <div class="-my-4 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 py-4 rounded-bl-lg rounded-br-lg">
                        <form action="#" method="">
                            <div class="flex flex-row gap-5">
                                <div class="flex-1 w-1/2 bg-white">
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="email">Username</label>
                                        <input class="border-gray-300 py-2 px-3 text-grey-300" type="email" disabled value="{{ $user->email }}">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">Nama</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="flex-1 w-1/2 bg-white">
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="password">Password Lama</label>
                                        <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="password">Password Baru</label>
                                        <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="password">Ketik Ulang Password Baru</label>
                                        <input class="border py-2 px-3 text-grey-800" type="password" name="password" id="password">
                                    </div>
                                </div>
                            </div>
                            <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->user()->as == 'sekolah')
    <div class="flex">
        <div class="mr-6 w-full mt-8 flex-shrink-0 flex flex-col bg-white dark:bg-gray-600 rounded-lg">
            <!-- Card list container -->
            <h3 class="flex items-center px-8 my-3 text-lg font-semibold capitalize dark:text-gray-300">
                <!-- Header -->
                <span>Update Profil</span>
            </h3>
            <div>
                <!-- List -->
                <div class="-my-4 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 py-4 rounded-bl-lg rounded-br-lg">
                        <form action="#" method="">
                            <div class="flex flex-row gap-5">
                                <div class="flex-1 w-1/2 bg-white">
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">NIP Kepala Sekolah</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" value="{{ $sekolah->kepala->nip }}">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Pangkat/Golongan/Ruang</label>
                                        <select class="border py-2 px-3 text-grey-800">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>Tidak Terakreditasi</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">NPSN</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" value="{{ $sekolah->npsn }}">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Nama Sekolah</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{ $sekolah->sekolah }}">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Akreditasi</label>
                                        <select class="border py-2 px-3 text-grey-800">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>Tidak Terakreditasi</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Koordinator Wilayah</label>
                                        <select class="border py-2 px-3 text-grey-800">
                                            @foreach($koorwils as $koorwil)
                                                <option>{{ $koorwil->koordinator_wilayah }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Kecamatan</label>
                                        <select class="border py-2 px-3 text-grey-800">
                                            @foreach($kecamatans as $kecamatan)
                                            <option>{{ $kecamatan->kecamatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="Select">Desa/Gampong</label>
                                        <select class="border py-2 px-3 text-grey-800">
                                            @foreach($kelurahans as $kelurahan)
                                                <option>{{ $kelurahan->kelurahan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="textarea">Alamat Sekolah</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{ $sekolah->alamat }}">
                                    </div>

                                </div>
                                <div class="flex-1 w-1/2 bg-white">
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Nama Kepala Sekolah</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{ $sekolah->kepala->nama }}">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">No. Handphone</label>
                                        <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{ $sekolah->kepala->nomor_hp }}">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="File">Foto</label>
                                        <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file">
                                    </div>
                                    <div class="flex flex-col mb-4">
                                        <label class="mb-2 font-bold text-lg text-gray-900" for="password">Foto Sekolah</label>
                                        <div class="border-4 border-gray-700">
                                            <img src="{{ URL::to('assets/img/clients', $sekolah->foto) }}" class="img-fluid h-auto" alt="Foto Sekolah">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="block bg-green-400 hover:bg-green-600 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
