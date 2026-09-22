@extends('template.admin_temp')
@section('judul', 'lihat data guru')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card detail-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Detail Data Guru</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('guru.edit', $data->id) }}"
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
                    <td rowspan="5" width="30%" class="text-center">
                        @if($data->foto)
                            <img
                                src="{{ asset('storage/' . $data->foto) }}"
                                alt="Foto {{ $data->nama_guru }}"
                                class="img-thumbnail"
                                style="width: 180px; height: 220px; object-fit: cover;"
                            >
                        @else
                            <span class="text-muted">
                                Tidak ada foto
                            </span>
                        @endif
                </td>
                    {{-- NIP --}}
                    <th width="20%">NIP</th>
                    <td>{{ $data->nip }}</td>
            </tr>
                <tr>
                    {{-- NAMA --}}
                    <th>Nama Guru</th>
                    <td>{{ $data->nama_guru }}</td>
            </tr>
                <tr>
                    {{-- JENIS KELAMIN --}}
                    <th>Jenis Kelamin</th>
                    <td>
                        {{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </td>
            </tr>
            <tr>
                {{-- NO_HP --}}
                <th>No hp</th>
                <td>
                    {{ $data->no_hp }}
                </td>
        </tr>
        <tr>
            {{-- EMAIL --}}
            <th>Email</th>
            <td>
                {{ $data->email }}
            </td>
        </tr>
            </table>
    </div>
    </div>
</div>
@endsection