<x-guest-layout>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide -->
                <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/slide-1-sekolah.png') }});"></div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2-sekolah.png') }});"></div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-3-sekolah.png') }});"></div>

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
                        <h3>Tempat penerimaan murid baru berdasarkan peraturan yang berlaku.</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <p>
                            Sistem Informasi Penerimaan Murid Baru (SIMPMB) dibentuk pada 1 Oktober 2020 oleh teamwork terbaik dari dalam   dan   luar   negeri   yang   bertujuan   untuk   memberikan
                            dukungan   pendidikan,   pelatihan pengetahuan dan potensi diri mereka serta membentuk pribadi yang memiliki akhlakul karimah dan juga berpegang teguh pada
                            Al-Quran dan As Sunnah. Gaza Internatioal Foundation juga menjadi  yayasan yang mendukung perjuangan rakyat Palestina.
                        </p>
                        <p>Sistem Informasi Penerimaan Murid Baru (SIMPMB) telah menjalin kerjasama dengan berbagai negara donatur seperti Turki, Palestina, Malaysia dan Indonesia, serta didukung
                            oleh donatur publik berbasis kedermawanan yang berasal dari masyarakat indonesia yang memiliki kepedulian tinggi terhadap permasalahan pendidikan,
                            sosial dan kemanusiaan.
                        </p>
                        <p>Sistem Informasi Penerimaan Murid Baru (SIMPMB) juga telah menjalin kerjasama dengan berbagai instansi pemerintahan, instansi swasta, lembaga pendidikan, universitas,
                            sekolah serta lembaga-lembaga yang bergerak dibidang edukasi dan sosial.
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
                    <p>Sekolah-sekolah yang terdaftar pada SIMPMB</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/clients/smpn-1-simpangulim.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">SMPN 1 SIMPANG ULIM (10101915)</a></h4>
                            <p class="mx-4">Jalan Banda Aceh Medan Km. 340 Simpang Ulim, Gampong Blang, Kec. Simpang Ulim, Kab. Aceh Timur Prov. Aceh</p>
                            <a href="#" class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/clients/smpn-2-simpangulim.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">SMPN 2 SIMPANG ULIM (10110450)</a></h4>
                            <p class="mx-4">Jln. Banda Aceh - Medan, Matang Kumbang, Kec. Simpang Ulim, Kab. Aceh Timur Prov. Aceh</p>
                            <a href="#" class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/clients/disdikbud.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">SMPN SATU ATAP SDN KUALA SIMPANG ULIM (69814192)</a></h4>
                            <p class="mx-4">JL. KUALA SIMPANG ULIM, Kuala Simpang Ulim, Kec. Simpang Ulim, Kab. Aceh Timur Prov. Aceh</p>
                            <a href="#" class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/clients/smpn-1-madat.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">SMPN 1 MADAT (10101922)</a></h4>
                            <p class="mx-4">Jalan Pang Burek - Madat, Madat, Kec. Madat, Kab. Aceh Timur Prov. Aceh</p>
                            <a href="#" class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/clients/smpn-2-madat.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">SMPN 2 MADAT (10110382)</a></h4>
                            <p class="mx-4">Jalan Lueng Sa Km. 4 No. 1 Kode Pos 24458, Blang Awe, Kec. Madat, Kab. Aceh Timur Prov. Aceh</p>
                            <a href="#" class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/clients/smpn-3-madat.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <h4><a href="">SMPN 3 MADAT (10111452)</a></h4>
                            <p class="mx-4">Jl.tanjong minje-Mns Asan Km.8 , Pante Bayam, Kec. Madat, Kab. Aceh Timur Prov. Aceh</p>
                            <a href="#" class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
</x-guest-layout>
