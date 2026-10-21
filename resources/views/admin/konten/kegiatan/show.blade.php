@extends('template.admin_temp')
@section('judul', 'lihat data kegiatan')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card detail-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Detail Data Kegiatan</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('kegiatan.edit', $data->id) }}"
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
                    <td rowspan="2" width="30%" class="text-center align-middle">
                        @if($data->foto)
                            <img
                                src="{{ asset($data->foto->path) }}"
                                alt="Foto {{ $data->nama_kegiatan }}"
                                class="img-thumbnail"
                                style="width: 180px; height: 220px; object-fit: cover;"
                            >
                        @else
                            <span class="text-muted">
                                Tidak ada foto
                            </span>
                        @endif
                    </td>
                    {{-- NAMA KEGIATAN --}}
                    <th width="20%">Nama Kegiatan</th>
                    <td>{{ $data->nama_kegiatan }}</td>
                </tr>
                <tr>
                    {{-- DESKRIPSI --}}
                    <th>Deskripsi</th>
                    <td>{!! nl2br(e($data->deskripsi)) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection