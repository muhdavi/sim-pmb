<x-guest-layout>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Kontak</h2>
                    <ol>
                        <li><a href="{{ route('frontend.index') }}">Beranda</a></li>
                        <li>Kontak</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <div class="map-section">
            <iframe style="border:0; width: 100%; height: 350px;" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJrYAtYS6bNzARqemJjZPGqIo&key=AIzaSyCQjKt3SUkb4qrjleYBJgnd33LyJZhXPkY"></iframe>
        </div>

        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="icofont-google-map"></i>
                                    <h4>Alamat:</h4>
                                    <p>Jl Banda Aceh - Medan KM 340<br>Idi Rayuk Aceh Timur 24452</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@simpmb.com<br>kontak@simpmb.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="icofont-phone"></i>
                                    <h4>No HP:</h4>
                                    <p>+62 853 3580 0853<br>+62 831 7712 4954</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if (session()->has('message'))
                    <div class="mt-3 row justify-content-center" data-aos="fade-up">
                        <div class="col-lg-10 ">
                            <div class="info-wrap alert alert-success">
                                <div class="row">
                                    {{ session('message') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="{{ route('frontend.kontak_store') }}" method="post" role="form">
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" required name="nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" required class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" name="judul" id="judul" placeholder="Judul" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" required name="pesan" rows="5" data-rule="required" data-msg="Pesan..." placeholder="Isi pesan..."></textarea>
                                @error('pesan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-lg btn-success">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
</x-guest-layout>
