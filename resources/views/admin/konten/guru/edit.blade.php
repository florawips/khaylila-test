@extends('template.admin_temp')
@section('judul','Edit Data Guru')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
        <div class="card form-card">
            <div class="card-header">
                <h4>Ubah Data Guru</h4>
                <a href="{{ url()->previous() }}" class="btn-kembali">kembali</a>
        </div>
        <div class="card-body">
                <form action="{{ route('guru.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                        <input
                            type="hidden"
                            name="nip"
                            id="nis"
                            value="{{ old('nip', $data->nip) }}"
                        >

               
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
                            value="{{ old('nama_guru',$data->nama_guru) }}"
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
                        <option value="">-- Pilih --</option>
                        <option value="L" {{ old('jenis_kelamin',$data->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin',$data->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>

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
                            value="{{ old('no_hp',$data->no_hp) }}"
                        >
                         @error('no_hp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
                         <div class="mb-3">
                        <label for="email" class="form-label">
                            Email
                        </label>
                        <input
                            type="text"
                            name="email"
                            id="email"
                            class="form-control"
                            autocomplete="off"
                          value="{{ old('email',$data->email) }}"
                        >
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