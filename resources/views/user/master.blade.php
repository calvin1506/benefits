<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <title>Benefits</title>

        <!-- Bootstrap core CSS -->
        {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
        <link href="{{ asset('assets/onix/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{asset('assets/onix/assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/onix/assets/css/templatemo-onix-digital.css')}}">
        <link rel="stylesheet" href="{{asset('assets/onix/assets/css/animated.css')}}">
        <link rel="stylesheet" href="{{asset('assets/onix/assets/css/owl.css')}}">
        {{-- <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
        <link rel="stylesheet" href="assets/css/animated.css">
        <link rel="stylesheet" href="assets/css/owl.css"> --}}

        <link rel="stylesheet" href="{{asset('assets/elegant_font/HTML CSS/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <style>
            .blue-bg{
                /* background-image: -webkit-linear-gradient(180deg, #24E1FF 0%, #237EFD 100%); */
                /* background-image: -webkit-linear-gradient(180deg, #f5b342 0%, #ffc45e 100%); */
                /* background: linear-gradient(180deg, rgba(233,235,239, 0.70) 0%, rgba(233,235,239, 0) 100%) */
                background: linear-gradient(120deg, rgba(170,170,170, 0.70) 0%, rgba(233,235,239, 0) 100%)
            }
            .logo img {
                display: inline-block;
                padding-top: .3125rem;
                padding-bottom: .3125rem;
                margin-right: 1rem;
                font-size: 1.25rem;
                line-height: inherit;
                white-space: nowrap;
            }
            .header-area .navbar li a {
                font-weight: 500;
                font-size: 15px;
                font-family: poppins,sans-serif;
                /* color: #fff; */
                color: orange;
                line-height: normal;
                height: fit-content;
                min-width: 100px;
                text-align: center;
            }
            .header-area .navbar li:hover a, .header-area .navbar li a.active {
                /* color: #ff685f!important; */
                /* color: #fff !important; */
                color: orange !important;
                border-bottom: 1px solid;
            }
            .header-area .navbar li .header-btn-get-started{
                color: #fff !important;
                border-radius: 45px;
                /* padding: 0 28px; */
                padding: 10px;
                line-height: 25px;
                border: 1px solid;
                margin-top: -4px;
                background-color: orange;
                box-shadow: 6px 24px 48px rgb(0 0 0 / 12%);
            }
            .header-area .navbar li .header-btn-get-started:hover{
                /* background: #fff; */
                /* color: #22AFFD !important; */
            }
            .header-area .navbar li .header-btn-get-started:hover a{
                /* background: #fff; */
                /* color: #22AFFD !important; */
                color: #fff !important;
                border-bottom: none;
            }
            .header-area .navbar li .header-btn-get-started:hover{
                box-shadow:6px 16px 12px rgba(0,0,0,.12);
                background-color: #de8a02;
            }
            .header-area .logbaro{
                line-height: 70px;
            }
            .header-area .navbar li:hover > ul li a{
                border: transparent;
            }
            .header-area .navbar li ul li a:hover{
                border: transparent;
            }
            footer .footer-item ul li a, footer .footer-item ul li a:hover{
                /* color: #a6dffe; */
                color: orange;
            }
            footer .footer-item h4{
                color: orange;
            }
            footer .about ul li a {
                background-color: orange !important;
                color: #fff !important;
            }

            @media (max-width: 450px){
                .navbar-collapse{
                    background-color: #fff !important;
                    color: black !important;
                }
                .header-area .navbar li a{
                    color: black !important;
                }
                .navbar-toggler:focus,
                .navbar-toggler:active,
                .navbar-toggler-icon:focus {
                    outline: none;
                    box-shadow: none;
                }
                .header-area .navbar li:hover a, .header-area .navbar li a.active{
                    color: black !important;
                }
            }
            @media (max-width: 861px){
                .navbar-collapse{
                    background-color: #fff !important;
                    color: black !important;
                }
                .header-area .navbar li a{
                    color: black !important;
                }
                .navbar-toggler:focus,
                .navbar-toggler:active,
                .navbar-toggler-icon:focus {
                    outline: none;
                    box-shadow: none;
                }
                .header-area .navbar li:hover a, .header-area .navbar li a.active{
                    color: black !important;
                }
            }
            .mix-back{
                background-color: RGB(212, 207, 207, 0.5);
            }

            h1, h2, h5{
                color: orange;
            }
        </style>

        @yield('header')
        
    </head>

<body>
    @php
        function checkDevice1() {
            if (is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"))) {
                return is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "tablet")) ? 2 : 1 ;
            } else {
                return 0;
            }
        }

        $deviceType1 = checkDevice1();
        if ($deviceType1==0) {
            // dd("DESKTOP");
            $cek_device1 = "desktop";
        } else if ($deviceType1==1) {
            // dd("PHONE OR MOBILE");
            $cek_device1 = "mobile";
        } else {
            // dd("TABLET");
            $cek_device1 = "tablet";
        }
    @endphp
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->

    @include('user.header')
    
    <div class="site-wrapper">
        
        <div class="container" style="padding-top: 80px;padding-left:0;padding-right:0;max-width:100%;margin-top:20px;">
            
            @yield('content')
            
        </div>

        {{-- <img src="{{ asset('img/wa.png') }}" style="width:100px;position:fixed;bottom:10px;right:10px;"> --}}
        {{-- <a href="https://wa.me/6282214317152" target="_blank" style="z-index:9;background-color:#39d150;position:fixed;bottom:10px;right:10px;padding:8px 12px;border-radius:50px;box-shadow: 0 1px 6px 0 rgb(0 0 0 / 6%), 0 2px 32px 0 rgb(0 0 0 / 16%);">
            <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:40px;color:white;"></i>
        </a> --}}
    </div>

    


    <!-- Scripts -->
    <script src="{{ asset('assets/onix/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/onix/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/onix/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/onix/assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/onix/assets/js/imagesloaded.js') }}"></script>
    {{-- <script src="{{ asset('assets/onix/assets/js/custom.js') }}"></script> --}}

    {{-- <script type="text/javascript" src="{{asset('assets/slick/slick/slick.min.js')}}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

    @include('user.footer')

    <script>
        // Acc
        $(document).on("click", ".naccs .menu div", function() {
        var numberIndex = $(this).index();
    
        if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");
    
            $(this).addClass("active");
            $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");
    
            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
            }
        });
    </script>
    @yield('footer')


</body>
</html>