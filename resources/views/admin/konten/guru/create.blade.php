@extends('template.admin_temp')
@section('judul', 'Tambah Data Guru')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
    <div class="card form-card">
        <div class="card-header">
            <h4>Tambah Data Guru</h4>
            <a href="{{ url()->previous() }}" class="btn-kembali">Kembali</a>
    </div>
    <div class="card-body">
            <form action="{{ route('guru.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input
                        type="text"
                        name="nip"
                        id="nip"
                        class="form-control"
                        autocomplete="off"
                        value="{{ old('nip') }}"
                    >
                    @error('nip')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
              
                <div class="mb-3">
                    <label for="nama_guru" class="form-label">
                        Nama Guru
                    </label>
                    <input
                        type="text"
                        name="nama_guru"
                        id="nama_guru"
                        class="form-control"
                        autocomplete="off"
                         value="{{ old('nama_guru') }}"
                    >
                    @error('nama_guru')
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
            <div class="mb-3">
                <label for="email" class="form-label">
                    Email
                </label>
                <textarea
                    name="email"
                    id="email"
                    class="form-control"
                    autocomplete="off"
                    rows="3"
                >{{ old('email') }}</textarea>
                @error('email')
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