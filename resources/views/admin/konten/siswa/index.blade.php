@extends('template.admin_temp')
@section('judul', 'data siswa')
@section('konten')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="row konten-siswa">
    <div class="col-md-10 mx-auto">
        <h2 class="text-left mt-3 mb-4">Data Siswa</h2>
        <div class="d-flex justify-content-between align-items-center mb-3 toolbar-siswa">
            <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm btn-tambah">
                Tambah Data
            </a>

            <form action="{{ route('siswa.index') }}" method="GET" class="d-flex align-items-center">
                <input type="text"
                        name="search"
                        value="{{ $search }}"
                        class="form-control form-control-sm me-2"
                        placeholder="Cari Nama/NIS/NISN....">

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
                            <th>NIS</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $siswa)
                        <tr>
                            <td class="text-nowrap">
                                <button type="button" class="badge bg-warning text-decoration-none border-0"
                                data-bs-toggle="modal" data-bs-target="#modalUser{{ $siswa->id }}">
                                <i class="icon-user"></i>
                            </button>
                                <a href="{{ route('siswa.edit', $siswa->id) }}" class="badge bg-info text-decoration-none">
                                    <i class="icon-pencil"></i>
                                </a>
                                <form action="{{ route('siswa.delete', $siswa->id) }}" method="POST" class="d-inline">
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
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>
                                @if(strtolower($siswa->jenis_kelamin) == 'laki-laki' || strtolower($siswa->jenis_kelamin) == 'l')
                                    <span class="badge-gender-l">{{ $siswa->jenis_kelamin }}</span>
                                @else
                                    <span class="badge-gender-p">{{ $siswa->jenis_kelamin }}</span>
                                @endif
                            </td>
                            <td>{{ $siswa->tempat_lahir }}</td>
                            <td>{{ $siswa->tanggal_lahir }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->no_hp }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center py-3 text-muted">Belum ada data siswa.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Modal Penerbitan Akun: satu modal per siswa --}}
        @foreach($data as $siswa)
        <div class="modal fade" id="modalUser{{ $siswa->id }}" data-backdrop="static" data-bs-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalUserLabel{{ $siswa->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('auth.registrasi', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalUserLabel{{ $siswa->id }}">Penerbitan Akun</h5>
                            <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3 form-group">
                                <label for="username{{ $siswa->id }}" class="form-label">Username</label>
                                <input type="text"
                                    name="username"
                                    id="username{{ $siswa->id }}"
                                    class="form-control"
                                    autocomplete="off"
                                    value="{{ old('username', $siswa->nis) }}"
                                    readonly>
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 form-group">
                                <label for="password{{ $siswa->id }}" class="form-label">Password</label>
                                <input type="password"
                                    name="password"
                                    id="password{{ $siswa->id }}"
                                    class="form-control"
                                    autocomplete="new-password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">Batal</button>
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

<script>
function previewFoto(event, id) {
    const preview = document.getElementById('preview' + id);
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