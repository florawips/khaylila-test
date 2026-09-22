    {{-- Mulai Header --}}
    @include('admin.layout.header')
    {{-- Akhir Header --}}

    {{-- Mulai Navbar --}}
     @include('admin.layout.navbar')
    {{-- Akhir Navbar --}}

    {{-- Awal Konten --}}
    @yield('konten')
    {{-- Akhir Konten --}}

     {{-- Awal JS --}}
     @include('admin.layout.js')
    {{-- Akhir JS --}}