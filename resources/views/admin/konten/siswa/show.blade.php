@extends('template.admin_temp')
@section('judul', 'lihat data siswa')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card detail-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Detail Data Siswa</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('siswa.edit', $data->id) }}"
                class="btn-ubah">
                    Ubah
                </a>

                <a href="{{ url()->previous() }}"
                class="btn-kembali">
                    Kembali
                </a>
            </div>
    </div>
    <div class="card-body">
            <table class="table table-bordered align-middle detail-table">
                <tr>
                    {{-- FOTO --}}
                    <td rowspan="8" width="30%" class="text-center">
                        @if($data->foto)
                            <img
                                src="{{ asset('storage/' . $data->foto) }}"
                                alt="Foto {{ $data->nama_siswa }}"
                                class="img-thumbnail"
                                style="width: 180px; height: 220px; object-fit: cover;"
                            >
                        @else
                            <span class="text-muted">
                                Tidak ada foto
                            </span>
                        @endif
                </td>
                    {{-- NIS --}}
                    <th width="20%">NIS</th>
                    <td>{{ $data->nis }}</td>
            </tr>
                <tr>
                    {{-- NISN --}}
                    <th>NISN</th>
                    <td>{{ $data->nisn }}</td>
            </tr>
                <tr>
                    {{-- NAMA --}}
                    <th>Nama Siswa</th>
                    <td>{{ $data->nama_siswa }}</td>
            </tr>
                <tr>
                    {{-- JENIS KELAMIN --}}
                    <th>Jenis Kelamin</th>
                    <td>
                        {{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </td>
            </tr>
                <tr>
                    {{-- TEMPAT LAHIR --}}
                    <th>Tempat Lahir</th>
                    <td>{{ $data->tempat_lahir }}</td>
            </tr>
                <tr>
                    {{-- TANGGAL LAHIR --}}
                    <th>Tanggal Lahir</th>
                    <td>{{ $data->tanggal_lahir }}</td>
            </tr>
                <tr>
                    {{-- ALAMAT --}}
                    <th>Alamat</th>
                    <td>{{ $data->alamat }}</td>
            </tr>
                <tr>
                    {{-- NO HP --}}
                    <th>No HP</th>
                    <td>{{ $data->no_hp }}</td>
            </tr>
            </table>
    </div>
    </div>
</div>
@endsection