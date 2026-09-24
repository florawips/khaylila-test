@extends('template.admin_temp')
@section('judul', 'data guru')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('konten')
<div class="row">
    <div class="col-md-10 mx-auto">
        <h2 class="text-left mt-3 mb-4">Data Mata Pelajaran</h2>
        <h5>Nama Guru: {{ $data->first()->guru->nama_guru }}</h5>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mapel</th>
                        <th>Jumlah Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->mapel->nama_mapel }}</td>
                        <td>{{ $dt->mapel->jumlah_jam }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10">Belum ada data mapel</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
