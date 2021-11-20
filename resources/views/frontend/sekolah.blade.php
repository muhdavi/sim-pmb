<x-guest-layout>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Daftar Sekolah</h2>
                    <ol>
                        <li><a href="{{ route('frontend.index') }}">Beranda</a></li>
                        <li>Daftar Sekolah</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach($sekolahs as $sekolah)
                        <div class="col-lg-4 col-md-6 mt-4 mt-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="box">
                                @if($sekolah->akreditasi == 'A')
                                    <span class="advanced">Akreditasi A</span>
                                @endif
                                <h3>Sekolah Menengah Pertama</h3>
                                <img src="{{ URL::to('assets/img/clients', $sekolah->foto) }}" class="img-fluid" alt="Foto {{ $sekolah->$sekolah }}">
                                <h4>{{ $sekolah->sekolah }} ({{ $sekolah->npsn }})</h4>
                                <p class="mx-4">{{ $sekolah->alamat }}</p>
                                <div class="btn-wrap">
                                    <a href="/daftar/{{ $sekolah->id }}-{{ Str::slug($sekolah->sekolah) }}" class="btn-buy">Daftar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Pricing Section -->

    </main><!-- End #main -->
</x-guest-layout>
