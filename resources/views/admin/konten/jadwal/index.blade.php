@extends('template.admin_temp')
@section('judul','Data Jadwal')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="row konten-siswa">
    <div class="col-md-10 mx-auto">
        <h2 class="text-left mt-3 mb-4">Jadwal Pelajaran</h2>

        <div class="d-flex justify-content-between align-items-center mb-3 toolbar-siswa">
            <a href="{{ route('jadwal.create') }}" class="btn btn-primary btn-sm btn-tambah">
                Tambah Jadwal
            </a>

            <form action="{{ route('jadwal.index') }}" method="GET" class="d-flex align-items-center">
                <input type="text"
                        name="search"
                        value="{{ $search }}"
                        class="form-control form-control-sm me-2"
                        placeholder="Cari Hari/Jam Ke">
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
                            <th>Hari</th>
                            <th>Jam Ke</th>
                            <th>Mapel</th>
                            <th>Guru</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $jadwal)
                        <tr>
                            <td class="text-nowrap">
                                <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="badge bg-info text-decoration-none">
                                    <i class="icon-pencil"></i>
                                </a>
                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="badge bg-danger border-0"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="icon-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jadwal->hari }}</td>
                            <td>{{ $jadwal->jam_ke }}</td>
                            <td>
                                <a href="{{ route('mapel.guru', $jadwal->mapelGuru->mapel->id) }}" class="text-decoration-none">
                                    {{ $jadwal->mapelGuru->mapel->nama_mapel ?? '-' }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('guru.mapel', $jadwal->mapelGuru->guru->id) }}" class="text-decoration-none">
                                    {{ $jadwal->mapelGuru->guru->nama_guru ?? '-' }}
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-3 text-muted">Belum ada data jadwal.</td>
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