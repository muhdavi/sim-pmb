<x-guest-layout>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pendaftaran</h2>
                    <ol>
                        <li><a href="{{ route('frontend.index') }}">Beranda</a></li>
                        <li>Pendaftar</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">

                        <form action="/store/{{ $sekolah->id }}-{{ Str::slug($sekolah->sekolah) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <h4>Data Sekolah</h4>
                            <hr/>
                            <div class="form-group row">
                                <label for="nama_sekolah" class="col-sm-2 col-form-label text-right">Nama Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="form-control">{{ $sekolah->sekolah }} ({{ $sekolah->npsn }})</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kepala_sekolah" class="col-sm-2 col-form-label text-right">Kepala Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="form-control">{{ $sekolah->kepala->nama }}</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_sekolah" class="col-sm-2 col-form-label text-right">Alamat Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="form-control">{{ $sekolah->alamat }}</div>
                                </div>
                            </div>

                            <h4>Data Orang Tua</h4>
                            <hr/>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nik_ayah" id="nik_ayah" placeholder="NIK Ayah" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nik_ibu" id="nik_ibu" placeholder="NIK Ibu" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat_wali" rows="2" placeholder="Alamat Orang Tua" data-rule="required" data-msg="Harus diisi"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <select class="custom-select" required>
                                        <option value="-1">Pilih Kecamatan</option>
                                        @foreach($kecamatans as $kecamatan)
                                            <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select name="kelurahan_wali" class="custom-select" required>
                                        <option value="-1">Pilih Desa/Gampong</option>
                                        @foreach($kelurahans as $kelurahan)
                                            <option value="{{ $kelurahan->id }}">{{ $kelurahan->kelurahan }}</option>
                                        @endforeach
                                    </select>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <h4>Data Murid</h4>
                            <hr/>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nisn" id="nisn" placeholder="Nomor Induk Siswa Nasional" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="murid" id="murid" placeholder="Nama Murid" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah Sebelumnya" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nomor_hp" id="nomor_hp" placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <select name="agama_id" class="custom-select" required>
                                        <option value="-1">Pilih Agama</option>
                                        @foreach($agamas as $agama)
                                            <option value="{{ $agama->id }}">{{ $agama->agama }}</option>
                                        @endforeach
                                    </select>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Pilih Pas Foto...</label>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label text-left">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="jk_lakilaki" value="1" name="jenis_kelamin" class="custom-control-input">
                                        <label class="custom-control-label" for="jk_lakilaki">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="jk_perempuan" value="0" name="jenis_kelamin" class="custom-control-input">
                                        <label class="custom-control-label" for="jk_perempuan">Perempuan</label>
                                    </div>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="alamat_murid" rows="2" placeholder="Alamat Orang Tua" data-rule="required" data-msg="Harus diisi"></textarea>
                                <div class="validate"></div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <select class="custom-select" required>
                                        <option value="-1">Pilih Kecamatan</option>
                                        @foreach($kecamatans as $kecamatan)
                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select name="kelurahan_murid" class="custom-select" required>
                                        <option value="-1">Pilih Desa/Gampong</option>
                                        @foreach($kelurahans as $kelurahan)
                                            <option value="{{ $kelurahan->id }}">{{ $kelurahan->kelurahan }}</option>
                                        @endforeach
                                    </select>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn-lg btn-success">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
</x-guest-layout>
