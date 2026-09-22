@extends('template.admin_temp')
@section('judul', 'Lihat Data Mapel')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card detail-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Detail Data Mapel</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('mapel.edit', $data->id) }}"
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
                    <th width="30%">Nama Mapel</th>
                    <td>{{ $data->nama_mapel }}</td>
                </tr>
                <tr>
                    <th>Jumlah Jam</th>
                    <td>{{ $data->jumlah_jam }} jam</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection