<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<nav class="navbar navbar-expand-lg navbar-light navbar-app">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo_skanidaa.png') }}" alt="Logo SMK Negeri 2 Semarang">
        XI PPLG 1
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('siswa.index') }}">Data Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('mapel.index') }}">Data Mapel</a>
          </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('guru.index') }}">Data Guru</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show alert-app" role="alert">
    <strong>Success</strong> {{ (session('success')) }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session('error'))
  <div class="alert alert-danger alert-dismissible fade show alert-app" role="alert">
    <strong>Error!!!!!</strong> {{ (session('error')) }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif