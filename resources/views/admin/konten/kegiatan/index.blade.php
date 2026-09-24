@extends('template.admin_temp')
@section('judul','Data Kegiatan')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="row konten-siswa">
    <div class="col-md-10 mx-auto">
        <h2 class="text-left mt-3 mb-4">Data Kegiatan Siswa</h2>

        <div class="d-flex justify-content-between align-items-center mb-3 toolbar-siswa">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary btn-sm btn-tambah">
                Tambah Kegiatan
            </a>

            <form action="{{ route('kegiatan.index') }}" method="GET" class="d-flex align-items-center">
                <input type="text"
                        name="search"
                        value="{{ $search }}"
                        class="form-control form-control-sm me-2"
                        placeholder="Cari Nama Kegiatan/Deskripsi">
                <button type="submit" class="btn btn-secondary btn-sm me-2">Cari</button>

                <label for="per_page" class="me-2 mb-0 small text-muted">Tampilkan:</label>
                <select name="per_page" id="per_page" onchange="this.form.submit()" class="form-select form-select-sm" style="width: auto;">
                    <option value="1" {{ $perPage == 1 ? 'selected' : '' }}>1</option>
                    <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                    <option value="15" {{ $perPage == 15 ? 'selected' : '' }}>15</option>
                    <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                    <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                    <option value="30" {{ $perPage == 30 ? 'selected' : '' }}>30</option>
                    <option value="35" {{ $perPage == 35 ? 'selected' : '' }}>35</option>
                </select>
            </form>
        </div>

        <div class="table-card">
            <div class="table-responsive">
                <table class="table table-hover align-middle table-siswa">
                    <thead>
                        <tr>
                            <th>Opsi</th>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $kegiatan)
                        <tr>
                            <td class="text-nowrap">
                                <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="badge bg-success text-decoration-none">
                                    <i class="icon-eye-open"></i>
                                </a>
                                <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="badge bg-info text-decoration-none">
                                    <i class="icon-pencil"></i>
                                </a>
                                <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="badge bg-danger border-0"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="icon-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $data->firstItem() + $loop->index }}</td>
                            <td>{{ $kegiatan->siswa->nama_siswa ?? '-' }}</td>
                            <td>{{ $kegiatan->nama_kegiatan }}</td>
                            <td>{{ $kegiatan->deskripsi }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-3 text-muted">Belum ada data kegiatan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
            {{ $data->appends(['per_page' => $perPage])->links() }}
        </div>
    </div>
</div>
@endsection