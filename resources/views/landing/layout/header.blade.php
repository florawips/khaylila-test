<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tag di atas *harus* berada paling awal di head -->

    <!-- SITE TITLE -->
    <title>@yield('judul')</title>
    <link rel="icon" type="image/png" href="{{ asset('landing/assets/img/logo.png') }}" type="image/x-logo">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/bootstrap/css/bootstrap.min.css') }}">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome & Themify Icons -->
    <link rel="stylesheet" href="{{ asset('landing/assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/fonts/themify-icons.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('landing/assets/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/owlcarousel/css/owl.theme.css') }}">

    <!-- Fonts icons -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/fonts.css') }}">

    <!-- prettyPhoto -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/prettyPhoto.css') }}">

    <!-- Animate & Slick -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/slick.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/responsive.css') }}">

    <!-- HTML5 shim dan Respond.js untuk IE8 -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('styles')
</head>