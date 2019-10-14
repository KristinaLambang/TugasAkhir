<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="" ref="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Master Data
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('guruwalas.index') }}">Data Guru Wali Kelas</a>
                                <a class="dropdown-item" href="{{ route('gurumapel.index') }}">Data Guru Mata Pelajaran</a>
                                <a class="dropdown-item" href="{{ route('siswa.index') }}">Data Siswa</a>
                                <a class="dropdown-item" href="{{ route('mapel.index') }}">Data Mapel</a>
                                <a class="dropdown-item" href="{{ route('jadwal.index') }}">Data Jadwal</a>
                                <a class="dropdown-item" href="{{ route('kelas.index') }}">Data Kelas</a>
                                <a class="dropdown-item" href="{{ route('laporan.index') }}">Laporan</a>
                                <a class="dropdown-item" href="{{ route('laporanleger.index') }}">Laporan Leger</a>
                                <a class="dropdown-item" href="{{ route('laporanraport.index') }}">Laporan Raport</a>
                                <a class="dropdown-item" href="{{ route('nilaiextrakurikuler.index') }}">Nilai Extrakurikuler</a>
                                <a class="dropdown-item" href="{{ route('nilaisikap.index') }}">Nilai Sikap</a>
                                <a class="dropdown-item" href="{{ route('laporanabsensi.index') }}">Absensi</a>
                                <a class="dropdown-item" href="{{ route('tahunajaran.index') }}">Tahun Ajaran</a>
                                <a class="dropdown-item" href="{{ route('datanilai.index') }}">Data Nilai</a>
                            </div>
                        </li>
                        <a href="" class="nav-link Toggle" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                Tahun Ajaran
                        </a>
                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
