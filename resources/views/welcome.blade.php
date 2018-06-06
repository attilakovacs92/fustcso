<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Leonard - Personal Portfolio Template">
        <meta name="keywords" content="leonard, personal, one page, portfolio, html template, html5, html5 template, portfolio template, professional resume, creative portfolio, creative">
        <meta name="author" content="modern_theme">

        <!-- Site Title -->
        <title>Kőrös Szerkezetgyártó Kft.</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/logo-icon.jpg">
        <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon.png">

        <!-- Owl Carousel Css -->
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- Lightbox Css -->
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <!-- Animate Css -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Font-Awesome Css -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Reset Css -->
        <link rel="stylesheet" href="assets/css/reset.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive  Css -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Color Styles Css -->
        <link rel="stylesheet" href="assets/css/colors/color-6.css">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- Start Loading Page -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two" style="left:20px;"></div>
                    <div class="object" id="object_three" style="left:40px;"></div>
                    <div class="object" id="object_four" style="left:60px;"></div>
                    <div class="object" id="object_five" style="left:80px;"></div>
                </div>
            </div>
        </div>
        <!-- End Loading Page -->

        <!-- Header Section Start -->
        <header id="home" class="top-area parallax">
            <!-- Header Area Start -->
            <div class="header-area" >
                <!-- Container Start -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="mainmenu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- Site Logo Start -->
                                    {{--<div class="logo">--}}
                                        {{--<img class="img-responsive" src="img/logo-nav.png"alt="">--}}
                                        {{--</div>--}}
                                </div>
                                <!-- Navbar Start -->
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav">
                                            <li class="active smooth-menu"><a href="#home">{{ trans('navbar.home') }}</a></li>
                                            <li class="smooth-menu"><a href="#about">{{ trans('navbar.about') }}</a></li>
                                            <li class="smooth-menu"><a href="#products">{{ trans('navbar.products') }}</a></li>
                                            <li class="smooth-menu"><a href="#promo">{{ trans('navbar.jobs') }}</a></li>
                                            <li class="smooth-menu"><a href="#contact">{{ trans('navbar.contact') }}</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('navbar.language') }} <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <li class="">
                                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                                {{ $properties['native'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <!-- End of Navbar -->
                            </div>
                        </div>
                    </div>
                </div> <!-- End of Header Text Area -->
            </div> <!-- End of Header Text Area -->

            <!-- Header Text Area Start -->
            <div class="header-text-area text-left">
                <div class="header-text-content">
                    <div class="container">
                        <div class="row">
                            <!-- Header Text -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="header-text" class="header-text text-center">
                                    <h2><b>Kőrös Szerkezetgyártó Kft.</b></h2>
                                    <p>2750 Nagykőrös, Rákóczi 2. tanya</p>
                                    <a href="https://korosszerkezetkft.shoprenter.hu/fustcsovek-88" target="__blank" style="margin-bottom: 25px;"><i class="fa fa-shopping-cart fa-fw"></i> Webshop</a>
                                    <a href="#" data-toggle="modal" data-target="#porfestes" style="margin-bottom: 25px;"><i class="fa fa-paint-brush fa-fw"></i> HOMOK FÚVÁS & PORFESTÉS</a>
                                    <a href="#" data-toggle="modal" data-target="#lezervagas"><i class="fa fa-cut fa-fw"></i> Lézervágás egyedi árajánlatkérés</a>
                                </div>
                            </div> <!-- End of Header Text -->
                        </div> <!-- End of Row -->
                    </div> <!-- End of Container -->
                </div> <!-- End of Header Text Content -->
            </div> <!-- End of Header Text Area -->
        </header>
        <!-- End of Header Section -->
        <div class="modal fade" id="porfestes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">HOMOK FÚVÁS & PORFESTÉS</h4>
                    </div>
                    <div class="modal-body">
                        <h3>HOMOK FÚVÁS</h3> <br>
                        <h5>Lemez felni:</h5>
                        <ul>
                            <li>13” - 16” 3.000,- Ft/db + áfa</li>
                            <li>17" < 3.500,- Ft/db + áfa </li>
                        <ul><br>

                        <h5>Alu felni:</h5>
                        <ul>
                            <li>13” - 16” 3.500,- Ft/db + áfa</li>
                            <li>17” < 4.000,- Ft/db + áfa </li>
                        <ul>
                        <hr>
                        <h3>PORFESTÉS</h3> <br>
                        <h5>Lemez felni:</h5>
                        <ul>
                            <li>13” - 16” 3.000,- Ft/db + áfa</li>
                            <li>17"< 3.500,- Ft/db + áfa </li>
                        <ul><br>
                        <h5>Alu felni:</h5>
                        <ul>
                            <li>13” - 16” 3.500,- Ft/db + áfa</li>
                            <li>17” - 19" 4.000,- Ft/db + áfa </li>
                            <li>20” < 4.500,-  Ft/db + áfa</li>
                        <ul> <br>
                        <h4>Festés igényétől függően lakkozás: 2.000,- Ft/db + áfa</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="lezervagas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">„Lézervágás egyedi árajánlatkérés„</h4>
                    </div>
                    <div class="modal-body">
                       <p>{{ trans('navbar.laser-text') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Content Section Start -->
        <section id="content">
            <!-- About Us Section Start -->
            @include('layouts.about')
            <!-- End of About Us Section -->

            <!-- Fun-facts Section Start -->
            <div id="fun-facts" class="fun-facts text-center parallax">

                @include('layouts.counter')

            </div> <!-- End of Fun Facts Section -->

            <!-- Portfolio Section Start -->
            <div class="portfolio" id="products">

                @include('layouts.products')

            </div>
            <!-- End of Portfolio Section -->

            <!-- Promo Section Start -->
            <div class="promo parallax" id="promo">

                @include('layouts.promo')

            </div>
            <!-- End of Promo Section -->

            <!-- Contact Section Start -->
            <div class="contact" id="contact">

                @include('layouts.contact')

            </div>

            <!-- End of Contact Section -->
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2717.5301390566187!2d19.780095315826713!3d47.069066632947674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDA0JzA4LjYiTiAxOcKwNDYnNTYuMiJF!5e0!3m2!1shu!2shu!4v1507718493933" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- End of Content Section -->

        <!-- Footer Section Start -->
        @include('layouts.footer')
    </body>
</html>
