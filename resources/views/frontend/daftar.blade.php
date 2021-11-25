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

                        <form action="{{ route('frontend.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <h4>Pilih Sekolah</h4>
                            <hr/>
                            <h5>Pilihan 1</h5>
                            <div class="form-group row">
                                <label for="nama_sekolah" class="col-sm-2 col-form-label text-left">Nama Sekolah</label>
                                <input type="hidden" value="{{ $sekolah->id }}" name="pilihan[]">
                                <div class="col-sm-10">
                                    <div class="form-control">{{ $sekolah->sekolah }} ({{ $sekolah->npsn }})</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kepala_sekolah" class="col-sm-2 col-form-label text-left">Kepala Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="form-control">{{ $sekolah->kepala->nama }}</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_sekolah" class="col-sm-2 col-form-label text-left">Alamat Sekolah</label>
                                <div class="col-sm-10">
                                    <div class="form-control h-auto">{{ $sekolah->alamat }}</div>
                                </div>
                            </div>

                            <h5>Pilihan 2</h5>
                            <div class="form-group">
                                <select class="sekolah form-control" name="pilihan[]" required>
                                    <option value="-1">Pilih sekolah kedua</option>
                                    @foreach($sekolahs as $sekolah)
                                        <option value="{{ $sekolah->id }}">{{ $sekolah->npsn }} - {{ $sekolah->sekolah }} - {{ $sekolah->kepala->nama }}</option>
                                    @endforeach
                                </select>
                                @error('pilihan2')
                                <div class="alert alert-danger mt-1" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <h5>Pilihan 3</h5>
                            <div class="form-group">
                                <select class="sekolah form-control" name="pilihan[]" required>
                                    <option value="-1">Pilih sekolah kedua</option>
                                    @foreach($sekolahs as $sekolah)
                                        <option value="{{ $sekolah->id }}">{{ $sekolah->npsn }} - {{ $sekolah->sekolah }} - {{ $sekolah->kepala->nama }}</option>
                                    @endforeach
                                </select>
                                @error('pilihan3')
                                <div class="alert alert-danger mt-1" role="alert">{{ $message }}</div>
                                @enderror
                            </div>

                            <h4>Data Murid</h4>
                            <hr/>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nik" id="nik" required placeholder="Nomor Induk Kependudukan" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="murid" id="murid" required placeholder="Nama Murid" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" required placeholder="Tempat Lahir" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" required placeholder="Tanggal Lahir" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="nisn" id="nisn" required placeholder="Nomor Induk Siswa Nasional" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" type="text" name="sekolah_asal" id="sekolah_asal" required placeholder="Nama Sekolah Sebelumnya" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label text-left">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="jk_lakilaki" value="1" name="jenis_kelamin"required class="custom-control-input">
                                        <label class="custom-control-label" for="jk_lakilaki">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="jk_perempuan" value="0" name="jenis_kelamin" required class="custom-control-input">
                                        <label class="custom-control-label" for="jk_perempuan">Perempuan</label>
                                    </div>
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
                                    @error('agama_id')
                                    <div class="alert alert-danger mt-1" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Pilih Pas Foto Murid...</label>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <select id="kecamatan" class="custom-select" required>
                                        <option value="-1">Pilih Kecamatan</option>
                                        @foreach($kecamatans as $kecamatan)
                                            <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select name="kelurahan" id="kelurahan" class="custom-select" name="kelurahan" required></select>
                                    @error('kelurahan')
                                    <div class="alert alert-danger mt-1" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="alamat" rows="2" required placeholder="Alamat Murid" data-rule="required" data-msg="Harus diisi"></textarea>
                                <div class="validate"></div>
                            </div>

                            <h4>Data Wali</h4>
                            <hr/>
                            <div class="form-row">
                                <div class="col-md-4 form-group">
                                    <input class="form-control" type="text" name="nama" id="nama" required placeholder="Nama" data-rule="minlen:16" data-msg="Minimal isian 16 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input class="form-control" type="email" name="email" id="email" required placeholder="Email" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input class="form-control" type="password" name="password" id="password" required placeholder="Password" data-rule="minlen:4" data-msg="Minimal isian 4 karakter" />
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
    <script>
        $(document).ready(function() {
            $('#kecamatan').on('change', function() {
                var kecamatanID = $(this).val();
                if(kecamatanID) {
                    $.ajax({
                        url: '/getKelurahan/'+kecamatanID,
                        type: "GET",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType: "json",
                        success:function(data)
                        {
                            if(data){
                                $('#kelurahan').empty();
                                $('#kelurahan').append('<option value="-1">Pilih Desa/Gampong</option>');
                                $.each(data, function(key, kelurahan){
                                    $('select[name="kelurahan"]').append('<option value="'+ kelurahan.id +'">' + kelurahan.kelurahan+ '</option>');
                                });
                            }else{
                                $('#kelurahan').empty();
                            }
                        }
                    });
                }else{
                    $('#kelurahan').empty();
                }
            });
            $('.sekolah').select2();
            $('.pekerjaan').select2();
        });
    </script>
</x-guest-layout>

