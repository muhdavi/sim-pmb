<x-guest-layout>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide -->
                <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/slide-1.jpg') }});"></div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2.jpg') }});"></div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-3.jpg') }});"></div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><strong>Tentang Kami</strong></h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2>Sistem Informasi Penerimaan Murid Baru (SIMPMB)</h2>
                        <h3>SIMPLE, MUDAH, BEREH</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p class="text-justify">Sistem Informasi Penerimaan Murid Baru (SIMPMB) merupakan aplikasi ringan yang dapat digunakan pada perangkat IT dengan spesifikasi minimal. Perubaan perilaku masyarakat perkotaan terhadap teknologi menuntut adanya pelayanan berbasis digital yang mana setiap informasi dapat diakses secara langsung melalui jaringan internet termasuk transparansi proses yang sedang dilaksanakan.</p>
                        <p class="text-justify">Dengan adanya aplikasi tersebut maka wali murid dapat menyimpan dan mencetak dokumen hasil pendaftaran dalam bentuk digital secara pribadi, begitu juga dengan pihak Sekolah dan Dinas Pendidikan dan Kebudayaan akan mendapatkan file digital dan mempermudah dalam proses monitor serta evauasi proses pelaksanaannya.
                        </p>
                        {{--                        <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2><strong>Daftar Sekolah</strong></h2>
                    <p>Sekolah peserta SIMPMB</p>
                </div>

                <div class="row">
                    @foreach($sekolahs as $sekolah)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <div class="client-logo">
                                    <img src="{{ URL::to('assets/img/clients', $sekolah->foto) }}" class="img-fluid" alt="Foto Sekolah">
                                </div>
                                <h4>{{ $sekolah->sekolah }} ({{ $sekolah->npsn }})</h4>
                                <p class="mx-4">{{ $sekolah->alamat }}</p>
                                <a href="{{ route('frontend.daftar', $sekolah->id) }}" class="btn btn-success mt-4">Daftar</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
</x-guest-layout>
