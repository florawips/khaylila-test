@extends('template.auth_temp')
@section('judul', 'XI PPLG 1 - Login')
@section('konten')
<!-- START LOGIN -->
<section class="login_register section-padding"><section class="login_register min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="login">
                    <h4 class="login_register_title">Selamat Datang</h4>
                    <h5 class="login_register_title">Sistem Informasi Manajemen Kelas</h5>
                    <div class="form-group">
                        <input type="text" id="contact-name" class=" form-control requiredField input-label"
                            placeholder="Username" name="name">
                    </div>
                    <div class="form-group">
                        <input type="password" id="contact-email" class="form-control requiredField input-label"
                            placeholder="Enter Password" name="password">
                    </div>
                    <div class="form-group col-md-25 mb-10">
                        <button class="btn btn-contact-bg" type="submit" name="submit">login</button>
                    </div>
                    <p>Belum punya akun?<a href="#">Daftar</a></p>
                </div>
            </div><!--- END COL -->
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</section>
<!-- END LOGIN -->
