@extends('template.admin_temp')
@section('judul', 'Edit Data Mapel')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card form-card">
        <div class="card-header">
            <h4>Edit Data Mapel</h4>
            <a href="{{ url()->previous() }}" class="btn-kembali">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('mapel.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_mapel" class="form-label">Nama Mapel</label>
                    <input
                        type="text"
                        name="nama_mapel"
                        id="nama_mapel"
                        class="form-control"
                        autocomplete="off"
                        value="{{ old('nama_mapel', $data->nama_mapel) }}"
                    >
                    @error('nama_mapel')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jumlah_jam" class="form-label">Jumlah Jam</label>
                    <input
                        type="number"
                        name="jumlah_jam"
                        id="jumlah_jam"
                        class="form-control"
                        min="1"
                        autocomplete="off"
                        value="{{ old('jumlah_jam', $data->jumlah_jam) }}"
                    >
                    @error('jumlah_jam')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2 justify-content-end">
                    <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
                    <button type="reset" class="btn btn-secondary btn-reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection