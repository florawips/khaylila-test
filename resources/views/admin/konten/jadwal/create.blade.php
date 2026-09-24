@extends('template.admin_temp')
@section('judul', 'Tambah Data Jadwal')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card form-card">
        <div class="card-header">
            <h4>Tambah Jadwal Pelajaran</h4>
            <a href="{{ url()->previous() }}" class="btn-kembali">Kembali</a>
        </div>
        <div class="card-body">
            <form action="{{ route('jadwal.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="hari" class="form-label">Hari Pelajaran</label>
                    <select
                        name="hari"
                        id="hari"
                        class="form-select"
                    >
                    <option value="">-- Pilih --</option>
                    <option value="Senin" {{ old('hari') == 'Senin' ? 'selected' : '' }}>Senin</option>
                    <option value="Selasa" {{ old('hari') == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                    <option value="Rabu" {{ old('hari') == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                    <option value="Kamis" {{ old('hari') == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                    <option value="Jumat" {{ old('hari') == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                    <option value="Sabtu" {{ old('hari') == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                    </select>
                    @error('hari')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jam_ke" class="form-label">Jam Ke</label>
                    <input
                        type="number"
                        name="jam_ke"
                        id="jam_ke"
                        class="form-control"
                        autocomplete="off"
                        value="{{ old('jam_ke') }}"
                    >
                    @error('jam_ke')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="guru_id" class="form-label">Nama Guru</label>
                        <select name="guru_id" id="guru_id" class="form-select">
                            <option value="">-- Pilih --</option>
                            @foreach ($data['guru'] as $guru)
                                <option 
                                    value="{{ $guru->id }}"
                                     {{ old('guru_id', $data['data']->mapelGuru->guru_id ?? '')  == $guru->id ? 'selected' : '' }}>
                                    {{ $guru->nama_guru }}
                                </option>
                            @endforeach
                        </select>
                        @error('guru_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="mapel_id" class="form-label">Nama Mapel</label>
                        <select name="mapel_id" id="mapel_id" class="form-select">
                            <option value="">-- Pilih --</option>
                            @foreach ($data['mapel'] as $mapel)
                                <option 
                                value="{{ $mapel->id }}"
                                     {{ old('mapel_id', $data['data']->mapelGuru->mapel_id ?? '')  == $mapel->id ? 'selected' : '' }}>
                                    {{ $mapel->nama_mapel }}
                                </option>
                            @endforeach
                        </select>
                        @error('mapel_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
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