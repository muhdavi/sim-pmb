<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        {{--        <h1 class="logo mr-auto"><a href="{{ route('home') }}"><span>G</span>IF</a></h1>--}}
        <a href="{{ route('frontend.index') }}" class="logo mr-auto">
            <img src="{{ asset('assets/img/logo-simpmb.jpeg') }}" alt="" class="img-fluid">
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"> <a href="{{ route('frontend.index') }}">Beranda</a></li>
                <li class="{{ (request()->segment(1) == 'tentang') ? 'active' : '' }}"><a href="{{ route('frontend.tentang') }}">Tentang Kami</a></li>
                <li class="{{ (request()->segment(1) == 'sekolah') ? 'active' : '' }}"><a href="{{ route('frontend.sekolah') }}">Daftar Sekolah</a></li>
                <li class="{{ (request()->segment(1) == 'kontak') ? 'active' : '' }}"><a href="{{ route('frontend.kontak') }}">Kontak</a></li>
                <li class="px-2 ml-5 bg-success"><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="https://twitter.com/" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        </div>

    </div>
</header><!-- End Header -->
