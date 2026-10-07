@extends('template.admin_temp')
@section('judul', 'data guru')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="row konten-siswa">
    <div class="col-md-10 mx-auto">
        <h2 class="text-left mt-3 mb-4">Data Guru</h2>

        <div class="d-flex justify-content-between align-items-center mb-3 toolbar-siswa">
            <a href="{{ route('guru.create') }}" class="btn btn-primary btn-sm btn-tambah">
                Tambah Data
            </a>

            <form action="{{ route('guru.index') }}" method="GET" class="d-flex align-items-center">
                <input type="text"
                        name="search"
                        value="{{ $search }}"
                        class="form-control form-control-sm me-2"
                        placeholder="Cari Nama/NIP....">

                <label for="per_page" class="me-2 mb-0 small text-muted">Tampilkan:</label>
                <select name="per_page" id="per_page" onchange="this.form.submit()" class="form-select form-select-sm" style="width: auto;">
                    @foreach([5, 10, 15, 20, 25, 30, 35] as $n)
                        <option value="{{ $n }}" {{ $perPage == $n ? 'selected' : '' }}>{{ $n }}</option>
                    @endforeach
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
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Jenis Kelamin</th>
                            <th>No. HP</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $guru)
                        <tr>
                            <td class="text-nowrap">
                                <button type="button" class="badge bg-warning text-decoration-none border-0"
                                    data-bs-toggle="modal" data-bs-target="#modalUser{{ $guru->id }}">
                                    <i class="icon-user"></i>
                                </button>
                                <a href="{{ route('guru.show', $guru->id) }}" class="badge bg-success text-decoration-none">
                                    <i class="icon-eye-open"></i>
                                </a>
                                <a href="{{ route('guru.edit', $guru->id) }}" class="badge bg-info text-decoration-none">
                                    <i class="icon-pencil"></i>
                                </a>
                                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline">
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
                            <td>{{ $guru->nip }}</td>
                            <td>{{ $guru->nama_guru }}</td>
                            <td>
                                @if(strtolower($guru->jenis_kelamin) == 'laki-laki' || strtolower($guru->jenis_kelamin) == 'l')
                                    <span class="badge-gender-l">{{ $guru->jenis_kelamin }}</span>
                                @else
                                    <span class="badge-gender-p">{{ $guru->jenis_kelamin }}</span>
                                @endif
                            </td>
                            <td>{{ $guru->no_hp }}</td>
                            <td>{{ $guru->email }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-3 text-muted">Belum ada data guru.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Modal Penerbitan Akun: satu modal per guru --}}
        @foreach($data as $guru)
        <div class="modal fade" id="modalUser{{ $guru->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalUserLabel{{ $guru->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('auth.registrasi', $guru->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalUserLabel{{ $guru->id }}">Penerbitan Akun</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="username{{ $guru->id }}" class="form-label">Username</label>
                                <input type="text"
                                    name="username"
                                    id="username{{ $guru->id }}"
                                    class="form-control"
                                    autocomplete="off"
                                    value="{{ old('username', $guru->nip) }}"
                                    readonly>
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password{{ $guru->id }}" class="form-label">Password</label>
                                <input type="password"
                                    name="password"
                                    id="password{{ $guru->id }}"
                                    class="form-control"
                                    autocomplete="new-password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Terbitkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        <div class="d-flex justify-content-end mt-3">
            {{ $data->appends(['per_page' => $perPage, 'search' => $search])->links() }}
        </div>
    </div>
</div>

@endsection