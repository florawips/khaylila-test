@extends('template.admin_temp')
@section('judul', 'Tambah Data siswa')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card form-card">
        <div class="card-header">
            <h4>Tambah Data Siswa</h4>
            <a href="{{ url()->previous() }}" class="btn-kembali">Kembali</a>
    </div>
    <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input
                        type="text"
                        name="nis"
                        id="nis"
                        class="form-control"
                        autocomplete="off"
                        value="{{ old('nis') }}"
                    >
                    @error('nis')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input
                        type="text"
                        name="nisn"
                        id="nisn"
                        class="form-control"
                        autocomplete="off"
                         value="{{ old('nisn') }}"
                    >
                    @error('nisn')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">
                        Nama Siswa
                    </label>
                    <input
                        type="text"
                        name="nama_siswa"
                        id="nama_siswa"
                        class="form-control"
                        autocomplete="off"
                         value="{{ old('nama_siswa') }}"
                    >
                    @error('nama_siswa')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">
                        Jenis Kelamin
                    </label>
                    <select
                        name="jenis_kelamin"
                        id="jenis_kelamin"
                        class="form-select"
                    >
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>

                </select>
                
                @error('jenis_kelamin')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">
                        Tempat Lahir
                    </label>
                    <input
                        type="text"
                        name="tempat_lahir"
                        id="tempat_lahir"
                        class="form-control"
                        autocomplete="off"
                         value="{{ old('tempat_lahir') }}"
                    >
                    @error('tempat_lahir')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">
                        Tanggal Lahir
                    </label>
                    <input
                        type="date"
                        name="tanggal_lahir"
                        id="tanggal_lahir"
                        class="form-control"
                        autocomplete="off"
                         value="{{ old('tanggal_lahir') }}"
                    >
                    @error('tanggal_lahir')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">
                        Alamat
                    </label>
                    <textarea
                        name="alamat"
                        id="alamat"
                        class="form-control"
                        autocomplete="off"
                        rows="3"
                    >{{ old('alamat') }}</textarea>
                    @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">
                        Nomor HP
                    </label>
                    <input
                        type="text"
                        name="no_hp"
                        id="no_hp"
                        class="form-control"
                        autocomplete="off"
                         value="{{ old('no_hp') }}"
                    >
                    @error('no_hp')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
                <div class="d-flex gap-2 justify-content-end">
                    <button type="submit" class="btn btn-primary btn-simpan">
                        Simpan
                    </button>
                       <button type="reset" class="btn btn-secondary btn-reset">
                        Reset
                    </button>
            </div>
        </form>
    </div>
</div>

@endsection