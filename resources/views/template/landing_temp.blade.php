{{-- Mulai Header --}}
@include('landing.layout.header')
{{-- Akhir Header --}}
{{-- Mulai Navbar --}}
@include('landing.layout.navbar')
{{-- Akhir Navbar --}}
{{-- Awal Konten --}}
@yield('konten')
{{-- Akhir Konten --}}
{{-- Awal Footer --}}
@include('landing.layout.footer')
{{-- Akhir Footer --}}
{{-- Awal JS --}}
@include('landing.layout.js')
{{-- Akhir JS --}}