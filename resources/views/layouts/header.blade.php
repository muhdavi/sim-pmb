<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="{{ route('frontend.index') }}" class="logo mr-auto">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"> <a href="{{ route('frontend.index') }}">Beranda</a></li>
                <li class="{{ (request()->segment(1) == 'tentang') ? 'active' : '' }}"><a href="{{ route('frontend.tentang') }}">Tentang Kami</a></li>
                <li class="{{ (request()->segment(1) == 'sekolah') ? 'active' : '' }}"><a href="{{ route('frontend.sekolah') }}">Sekolah</a></li>
                <li class="{{ (request()->segment(1) == 'kontak') ? 'active' : '' }}"><a href="{{ route('frontend.kontak') }}">Kontak</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        <a href="{{ route('login') }}" class="btn btn-success ml-4">LOGIN</a>

        <div class="header-social-links">
            <a href="https://twitter.com/" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        </div>

    </div>
</header><!-- End Header -->
