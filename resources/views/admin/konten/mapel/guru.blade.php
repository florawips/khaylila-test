@extends('template.admin_temp')
@section('judul', 'data mapel')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('konten')
<div class="row">
    <div class="col-md-10 mx-auto">
        <h2 class="text-left mt-3 mb-4">Data Guru</h2>
        <h5>Nama Mapel: {{ $data->first()->mapel->nama_mapel }}</h5>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->guru->nip }}</td>
                        <td>{{ $dt->guru->nama_guru }}</td>
                        <td>{{ $dt->guru->jenis_kelamin }}</td>
                        <td>{{ $dt->guru->no_hp }}</td>
                        <td>{{ $dt->guru->email }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10">Belum ada data guru</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
