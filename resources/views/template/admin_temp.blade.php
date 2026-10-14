    {{-- Mulai Header --}}
    @include('admin.layout.header')
    {{-- Akhir Header --}}

    {{-- Mulai Navbar --}}
    @if(session('user')['role'] == 'guru')
        @include('admin.layout.navbar')
    @elseif(session('user')['role'] == 'siswa')
        @include('admin.layout.siswa_navbar')
    @endif
    {{-- Akhir Navbar --}}

    {{-- Awal Konten --}}
    @yield('konten')
    {{-- Akhir Konten --}}

     {{-- Awal JS --}}
     @include('admin.layout.js')
    {{-- Akhir JS --}}
