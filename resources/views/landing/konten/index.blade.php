@extends('template.landing_temp')
@section('judul', 'XI PPLG 1')
@section('konten')

<!-- START HOME -->
<section id="home" class="home_bg"
    style="background-image: url('{{ asset('landing/assets/img/bg/home-bg.jpg') }}'); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12 text-center">
                <div class="hero-text">
                    <h2>Welcome to XI PPLG 1</h2>
                    <p>Transforming coffee into code, turning abstract logic into reality. <br>\
                        Satu kompilasi, infinite possibilities. <br> Kami PPLG: Design the logic, code the vision, master the future."</p>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END HOME -->

<!-- START PROPERTY -->
<section class="template_property section-padding">
    <div class="container">
        <div class="section-title text-center wow zoomIn">
            <h2>Latest listing</h2>
            <div></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('landing/assets/img/property/1.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">Lodgeville Road</a></h4>
                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>
                    </div>
                    <div class="single_property_price">
                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('landing/assets/img/property/2.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">Rinehart Road</a></h4>
                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>
                    </div>
                    <div class="single_property_price">
                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('landing/assets/img/property/3.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">Brighton Circle Road</a></h4>
                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>
                    </div>
                    <div class="single_property_price">
                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END PROPERTY -->

<!-- START PROPERTY -->
<section class="template_property section-padding">
    <div class="container">
        <div class="section-title text-center wow zoomIn">
            <h2>Latest for Rent</h2>
            <div></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('landing/assets/img/property/4.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">Lynn Ogden Lane</a></h4>
                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>
                    </div>
                    <div class="single_property_price">
                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('landing/assets/img/property/5.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">2045 B Street</a></h4>
                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>
                    </div>
                    <div class="single_property_price">
                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <div class="single_property">
                    <img src="{{ asset('landing/assets/img/property/6.jpg') }}" class="img-fluid" alt="" />
                    <div class="single_property_description text-center">
                        <span><i class="fa fa-object-group"></i> 900 sq ft</span>
                        <span><i class="fa fa-bed"></i> 4 Badrooms</span>
                        <span><i class="fa fa-star-o"></i> 2 Baths</span>
                    </div>
                    <div class="single_property_content">
                        <h4><a href="#">White Maria Street</a></h4>
                        <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical. </p>
                    </div>
                    <div class="single_property_price">
                        High Meadow Lane Mount Pleasant <span>$ 170,000</span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END PROPERTY -->

<!-- START KEGIATAN -->
<section id="gallery" class="works_area">
    <div class="container">
        <div class="section-title text-center wow zoomIn">
            <h2>Kegiatan</h2>
        </div>
                <!-- Menggunakan tabel Bootstrap dengan border -->
                <table class="table" style="background-color: #fff; margin-bottom: 0;">
                    <tbody>
                        @foreach ($kegiatan as $kt)
                        <tr>
                            <!-- Kolom Kiri untuk Foto (menggabungkan 2 baris ke bawah dengan rowspan) -->
                            <td rowspan="2" class="text-center align-middle" style="width: 30%;">
                                <!-- Ganti src di bawah dengan path gambar Anda -->
                                <img src="{{ asset($kt->foto->path) }}" alt="Foto Kegiatan" class="img-fluid mb-2" height="600px">
                            </td>

                            <!-- Kolom Kanan untuk Isi "Nama Kegiatan" -->
                            <td class="align-middle">
                                {{ $kt->nama_kegiatan }}
                            </td>
                        </tr>
                        <tr>
                            <!-- Kolom Kanan untuk Isi "Deskripsi" -->
                            <td>
                                <p class="mb-0" style="text-align: justify;">
                                    {{ $kt->deskripsi }}
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- END COL -->
</section>
<!-- END KEGIATAN -->

<<!-- START TEAM US -->
<section id="team" class="our_team section-padding">
    <div class="container">
        <div class="section-title text-center wow zoomIn">
            <h2>Best XI PPLG 1</h2>
            <div></div>
        </div>

        <div class="row text-center">
            @foreach ($siswa as $sw)
            <div class="col-lg-3 col-sm-3 col-xs-12">
                <div class="single_team">
                    @if ($sw->foto)
                    <img src="{{ asset($sw->foto->path) }}" class="img-fluid" alt="" />
                    @else
                    <div class="text-muted img-fluid d-flex justify-content-center align-items-center" style="width: 100%; height: 200px;">
                        Tidak ada foto
                    </div>
                    @endif
                    <h3>{{ $sw->nama_siswa }}</h3>
                    <p>{{ $sw->alamat }}</p>
                </div>
            </div><!-- END COL -->
            @endforeach
        </div><!-- END ROW -->
    </div>
</section>
<!-- END TEAM US -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END TEAM US -->

@endsection