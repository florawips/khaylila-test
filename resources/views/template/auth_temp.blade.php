    {{-- Mulai Header --}}
    @include('landing.layout.header')
    {{-- Akhir Header --}}

    {{-- Awal Konten --}}
    @yield('konten')
    {{-- Akhir Konten --}}

    {{-- Awal JS --}}
    @include('landing.layout.js')
    {{-- Akhir JS --}}