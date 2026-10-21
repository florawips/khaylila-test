@extends('template.admin_temp')
@section('judul', 'Edit Data Kegiatan')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container mt-4">
        <div class="card form-card">
            <div class="card-header">
                <h4 class="mb-0">Edit Data Kegiatan</h4>
        </div>
        <div class="card-body">
                <form
                    action="{{ route('kegiatan.update', $data->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    @method('PUT')
                        <input
                            type="hidden"
                            name="siswa_id"
                            id="siswa_id"
                            class="form-control @error('siswa_id') is-invalid @enderror"
                            value="{{ old('siswa_id', $data->siswa_id) }}"
                        >
                        @error('siswa_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    <div class="mb-3">
                        <label for="nama_kegiatan" class="form-label">
                            Nama Kegiatan
                        </label>
                        <input
                            type="text"
                            name="nama_kegiatan"
                            id="nama_kegiatan"
                            class="form-control @error('nama_kegiatan') is-invalid @enderror"
                            value="{{ old('nama_kegiatan', $data->nama_kegiatan) }}"
                            required
                            placeholder="Masukkan nama kegiatan"
                        >
                        @error('nama_kegiatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                    {{-- DESKRIPSI --}}
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            Deskripsi
                        </label>
                        <textarea
                            name="deskripsi"
                            id="deskripsi"
                            rows="5"
                            class="form-control @error('deskripsi') is-invalid @enderror"
                            required
                            placeholder="Masukkan deskripsi kegiatan"
                        >{{ old('deskripsi', $data->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                    {{-- FOTO --}}
                    <div class="mb-3">
                        <label for="foto" class="form-label">
                            Foto Kegiatan
                        </label>
                        <input
                            type="file"
                            name="foto"
                            id="foto"
                            class="form-control @error('foto') is-invalid @enderror"
                            accept="image/jpeg,image/png,image/jpg,image/webp"
                            onchange="previewFoto(event)"
                        >
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        {{-- PREVIEW FOTO BARU --}}
                        <div class="text-center mt-3">
                            <img
                                id="preview"
                                src="#"
                                alt="Preview Foto"
                                style="
                                max-width: 300px;
                                max-height: 300px;
                                display: none;
                                object-fit: cover;
                            "
                                class="img-thumbnail"
                            >
                    </div>
                </div>
                    {{-- BUTTON --}}
                    <div class="d-flex justify-content-end gap-2">
                        <a
                            href="{{ url()->previous() }}"
                            class="btn btn-secondary btn-reset"
                        >
                            Kembali
                        </a>
                        <button
                            type="submit"
                            class="btn btn-primary btn-simpan"
                        >
                            Simpan
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewFoto(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    }
</script>
@endsection