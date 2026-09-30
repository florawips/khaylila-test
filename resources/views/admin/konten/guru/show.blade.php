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
                    <td rowspan="5" width="30%" class="text-center align-middle">
                        @if($data->foto)
                            <img
                                src="{{ asset($data->foto->path) }}"
                                alt="Foto {{ $data->nama_guru }}"
                                class="img-thumbnail"
                                style="width: 180px; height: 220px; object-fit: cover;"
                            >
                        @else
                            <p class="text-muted mb-0">Tidak ada foto</p>
                        @endif
                    
                        <div class="mt-2">
                            <button type="button" class="btn btn-success btn-sm"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Upload
                            </button>
                        </div>
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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Upload Foto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form
            action="{{ route('guru.upload', $data->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('POST')
            <div class="mb-3">

                <label for="foto" class="form-label">
                    Upload Foto
                </label>
                <img id="preview" src="#" alt="Preview Foto Kue" style="max-width: 300px; display: none; margin: 20px auto" />
                <input
                    type="file"
                    name="foto"
                    id="foto"
                    class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp"
                    onchange="previewFoto(event)"
                >
                @error('foto')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection