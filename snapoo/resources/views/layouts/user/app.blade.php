<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SNAPOO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/assets/img/sanpo.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <!-- CSS here -->
     
    <!-- Memuat Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Konten HTML -->

    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- loader snapoto -->
                    <img src="{{asset('user/assets/img/sanpo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- Header Start -->
    @include('layouts.user.header')
    <!-- Header End -->
    @yield('contents')
    <footer>
        <!-- Footer Start-->
        @include('layouts.user.footer')
        <!-- Footer End-->
    </footer>
    <!-- JS here -->
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('user/./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/popper.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/slick.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/wow.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('user/./assets/js/contact.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/mail-script.js')}}"></script>
    <script src="{{asset('user/./assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('user/./assets/js/plugins.js')}}"></script>
    <script src="{{asset('user/./assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JU3MR4x4K5+dBsx2JDA4NZLaOg5frN1BKcpTi/YOYTC67J+1zCkXwXPMvtnJwZx" crossorigin="anonymous"></script>


    <!-- Memuat jQuery (diperlukan oleh Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Memuat Bootstrap JS Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
