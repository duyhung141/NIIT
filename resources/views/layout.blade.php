<!DOCTYPE html>
<!-- 
Template Name: A-Future HTML
Version: 1.0.0
Author: Webstrot
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    <!-- font-awesome -->
    <link href="{{asset('css/font-awesome')}}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Animation Css -->
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <!-- Revolution slider Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugin/rs_slider/layers.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugin/rs_slider/navigation.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/plugin/rs_slider/settings.css')}}" />
    <!-- Owl Carousel -->
    <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <!-- Magnific Popup Css -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <!-- Style Css -->
    <link href="{{asset('css/homepage_style_2.css')}}" rel="stylesheet">
    <link href="css/shop.css" rel="stylesheet">
    <!-- Common Style CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <!-- header start -->
    <div class="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <div class="contact_info_wrapper">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope"></i> hello@example.com</a></li>
                                <li class="contact_number_wrapper hidden-xs"><a href="#"><i class="fa fa-phone"></i> +1 814 251 152</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <!-- signin_and_social_icon_wrapper -->
                        <div class="signin_and_social_icon_wrapper">
                            <ul>
                                <li class="social_icon_wrapper hidden-xs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    </ul>
                                </li>
                                <!-- Cart Option -->
                                <li class="dropdown signin_wrapper">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-sign-in"></i> Login / Register
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="signin_dropdown">
                                            <a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
                                            <a href="#" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a>
                                            <h2>or</h2>
                                            <div class="formsix-pos">
                                                <div class="form-group i-email">
                                                    <input type="email" class="form-control" required="" id="emailTen" placeholder="Email Address *">
                                                </div>
                                            </div>
                                            <div class="formsix-e">
                                                <div class="form-group i-password">
                                                    <input type="password" class="form-control" required="" id="namTen-first" placeholder="Password *">
                                                </div>
                                            </div>
                                            <div class="remember_box">
                                                <label class="control control--checkbox">Remember me
                                                    <input type="checkbox">
                                                    <span class="control__indicator"></span>
                                                </label>
                                                <a href="#" class="forget_password">
                                                    Forgot Password
                                                </a>
                                            </div>
                                            <div class="login_wrapper">
                                                <a href="#" class="btn btn-primary login_btn"> Login </a>
                                            </div>
                                            <div class="sign_up_message">
                                                <p>Don’t have an account ? <a href="#"> Sign up </a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- /.Cart Option -->
                            </ul>
                        </div>
                        <!-- /.signin_and_social_icon_wrapper end -->
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <div class="main_menu_wrapper hidden-xs hidden-sm">
            <nav class="navbar mega-menu navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container">
                    <div class="navbar-header hidden-xs hidden-sm">
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="homepage1.html"> Homepage 01</a>
                                    </li>
                                    <li>
                                        <a href="homepage2.html"> Homepage 02</a>
                                    </li>
                                    <li>
                                        <a href="homepage3.html">Homepage 03</a>
                                    </li>
                                    <li>
                                        <a href="homepage4.html">Homepage 04</a>
                                    </li>
                                    <li>
                                        <a href="homepage5.html">Homepage 05</a>
                                    </li>
                                    <li>
                                        <a href="homepage6.html"> Home page 06 (Fashion) </a>
                                    </li>
                                    <li>
                                        <a href="homepage7_electronic.html"> Homepage 07 (Electronic)
                                            <span class="new"> New </span> </a>
                                    </li>
                                    <li>
                                        <a href="homepage8_organic.html"> Homepage 08 (Organic)
                                            <span class="new"> New </span> </a>
                                    </li>
                                    <li>
                                        <a href="homepage9_sport.html"> Homepage 09 (Sport)
                                            <span class="new"> New </span> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            About Us
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="aboutus1.html"> About Style 01</a>
                                            </li>
                                            <li>
                                                <a href="aboutus2.html"> About Style 02 </a>
                                            </li>
                                            <li>
                                                <a href="aboutus3.html"> About Style 03 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Services
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="service_page1.html"> Services 01</a>
                                            </li>
                                            <li>
                                                <a href="service_page2.html"> Services 02 </a>
                                            </li>
                                            <li>
                                                <a href="service_page3.html"> Services 03</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Team
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="team_overlay_style.html"> Overly Style</a>
                                            </li>
                                            <li>
                                                <a href="team_transparent_style.html"> Transparent Style</a>
                                            </li>
                                            <li>
                                                <a href="team_circle_style.html"> Circle Style </a>
                                            </li>
                                            <li>
                                                <a href="team_classic_style.html"> Classic Style </a>
                                            </li>
                                            <li>
                                                <a href="team_creative_style.html"> Creative Style </a>
                                            </li>
                                            <li>
                                                <a href="team_single.html"> Team Single </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Contact Us
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="contact_us1.html"> Contact Us 01</a>
                                            </li>
                                            <li>
                                                <a href="contact_us2.html"> Contact Us 02</a>
                                            </li>
                                            <li>
                                                <a href="contact_us3.html"> Contact Us 03 </a>
                                            </li>
                                            <li>
                                                <a href="contact_us4.html"> Contact Us 04 </a>
                                            </li>
                                            <li>
                                                <a href="contact_us5.html"> Contact Us 05</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Extra Pages
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="404_style1.html"> 404 style 01</a>
                                            </li>
                                            <li>
                                                <a href="404_style2.html"> 404 style 02</a>
                                            </li>
                                            <li>
                                                <a href="404_style3.html"> 404 Animated </a>
                                            </li>
                                            <li>
                                                <a href="404_style4.html"> 404 Full Width</a>
                                            </li>
                                            <li>
                                                <a href="coming_soon_style1.html"> Coming Soon 01</a>
                                            </li>
                                            <li>
                                                <a href="coming_soon_style2.html"> Coming Soon 02</a>
                                            </li>
                                            <li>
                                                <a href="under_construction.html"> Under Construction </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="login_and_register.html">
                                            Login/Register
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Features
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            Headers
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="sliders_basic/basic_slider_8.html" target="_blank"> Default Header</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_1.html" target="_blank"> Transparent Header</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_2.html" target="_blank"> Boxed Header</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_4.html" target="_blank"> Shop Header</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_3.html" target="_blank"> Flat Header</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_5.html" target="_blank"> Center Logo Header</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_6.html" target="_blank"> Dark Header</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Revolution Slider
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="sliders_revolution/creative_freedom_slider.html" target="_blank"> Creative Freedom Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/before_after_slider.html" target="_blank"> Before After Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/coming_soon_slider.html" target="_blank"> Coming Soon Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/xmas_slider.html" target="_blank"> XMas Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/wow_factor_slider.html" target="_blank"> Wow Factor Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/parallax_scene_slider.html" target="_blank"> Parallax Scene Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/sleek_landing_page_slider.html" target="_blank"> Sleek Landing Page Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/particle_effect_slider.html" target="_blank"> Particle Effect Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/youtube_video_slider.html" target="_blank"> YouTube Video Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_revolution/web_product_dark_slider.html" target="_blank"> Web Product Dark Slider</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Basic Sliders
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="sliders_basic/basic_slider_1.html" target="_blank"> Fix Image 01</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_5.html" target="_blank"> Fix Image 02</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_4.html" target="_blank"> Owl Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_8.html" target="_blank"> jQuery Camera Slider </a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_2.html" target="_blank"> Carousel Slider 01 </a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_3.html" target="_blank"> Carousel Slider 02 </a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_6.html" target="_blank"> Carousel Slider 03 </a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_7.html" target="_blank"> Carousel Slider 04 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Page Header
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="shortcode/page_header.html#page_header1_section"> Light Background</a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header2_section"> Dark Background </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header3_section"> Gradient Background </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header4_section"> Reverse Page Header </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header5_section"> Image Background </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header6_section"> Fullwidth Page Header </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header7_section"> Center Page Header</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Footer Styles
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-right">
                                            <li>
                                                <a href="shortcode/footer.html#footer_1_section"> Dark Footer</a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_2_section"> Shop Footer </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_3_section"> Light Footer </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_4_section"> 3 Column Footer </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_5_section"> Full Width </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header">Portfolio Grid</li>
                                                <li>
                                                    <a href="portfolio_grid_1column.html"> I Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_2column.html"> II Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_3column.html"> III Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_4column.html"> IV Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_5column.html"> V Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_6column.html"> VI Column</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_full_width.html"> Full Width</a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_sidebar.html"> Side Bar </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_grid_full_width_nomargin.html"> Full Width no Margin </a>
                                                </li>
                                            </ul>

                                            <ul class="col-sm-4">
                                                <li class="dropdown-header">Portfolio Masonry</li>
                                                <li>
                                                    <a href="portfolio_masonry_3column.html"> III Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_4column.html"> IV Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_nomargin_3column.html"> No Margin III Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_nomargin_4column.html"> No Margin IV Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_nomargin_5column.html"> No Margin V Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_sidebar.html"> Side Bar </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_full_width_nomargin.html"> Full Width no Margin </a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-4">
                                                <li class="dropdown-header">Portfolio Single</li>
                                                <li>
                                                    <a href="portfolio_single_gallery.html"> Gallery Post </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_single_image.html"> Image Post </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_single_slider.html"> Slider Post </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_single_vedio.html"> Video Post </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shortcodes</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Shortcodes 01</li>
                                                <li>
                                                    <a href="shortcode/accordion.html"> Accordion </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/blog.html"> Blog </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/clients.html"> Clients </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/counters.html"> Counters </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/elements.html">Messages Alert </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/elements.html#buttons_section"> Buttons</a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/elements.html#paginations_section"> Paginations</a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/page_header.html"> Page Header</a>
                                                </li>
                                            </ul>

                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Shortcodes 02</li>
                                                <li>
                                                    <a href="shortcode/elements.html#video_player_section"> Video Player </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/features_with_icon.html">Features With Icon </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/features_with_images.html"> Features With Images </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/footer.html">Footers </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/forms.html"> Forms </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/icon.html">Icons </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/headings.html"> Headings Styles </a>
                                                </li>
                                                <li>
                                                    <a href="login_and_register.html">Login/Register</a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Shortcodes 03</li>
                                                <li>
                                                    <a href="shortcode/img-box.html"> Image Box </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/portfolio.html"> Portfolio </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/pricing.html"> Pricing Tables </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/progress.html"> Progress Bars </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/tab.html"> Tabs </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/team.html"> Team Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/testimonials.html">Testimonials </a>
                                                </li>
                                            </ul>
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Shortcodes 04</li>
                                                <li>
                                                    <a href="404_style1.html"> 404 style 01</a>
                                                </li>
                                                <li>
                                                    <a href="404_style2.html"> 404 style 02</a>
                                                </li>
                                                <li>
                                                    <a href="404_style3.html"> 404 Animated </a>
                                                </li>
                                                <li>
                                                    <a href="404_style4.html"> 404 Full Width</a>
                                                </li>
                                                <li>
                                                    <a href="coming_soon_style1.html"> Coming Soon 01</a>
                                                </li>
                                                <li>
                                                    <a href="coming_soon_style2.html"> Coming Soon 02</a>
                                                </li>
                                                <li>
                                                    <a href="under_construction.html"> Under Construction </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown blog_dropdown_wrapper">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            Classic Style
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-left">
                                            <li>
                                                <a href="blog_style2.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style1.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style3.html">II Column Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Masonry Grid
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-left">
                                            <li>
                                                <a href="blog_style5.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style4.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style6.html">II Column Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Creative Style
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-left">
                                            <li>
                                                <a href="blog_style8.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style7.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style9.html">II Column Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Modern Style
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-left">
                                            <li>
                                                <a href="blog_style11.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style10.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_style12.html">III Column Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Single Page
                                            <span><i class="fa fa-caret-right"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu-left">
                                            <li>
                                                <a href="blog_single2.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_single1.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog_single3.html">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown shop_dropdown_wrapper">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="shop_sidebar.html"> Shop Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop_full_width.html"> Shop Full Width</a>
                                    </li>
                                    <li>
                                        <a href="product_single_page.html">Product Single Page</a>
                                    </li>
                                    <li>
                                        <a href="product_single_sidebar.html">Product Single Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="product_single_electranics.html">Product Single Electronic
                                            <span class="new"> New </span> </a>
                                    </li>
                                    <li>
                                        <a href="product_single_organic.html">Product Single Organic
                                            <span class="new"> New </span> </a>
                                    </li>
                                    <li>
                                        <a href="product_single_sport.html">Product Single Sport
                                            <span class="new"> New </span> </a>
                                    </li>
                                    <li>
                                        <a href="shopping_cart.html"> Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="shop_checkout.html"> Shop Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="search_bar hidden-xs">
                                    <div class="lv_search_bar" id="search_button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <div id="search_open" class="lv_search_box">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <!-- Cart Option -->
                            <li class="dropdown cart_dropdown_wrapper">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>
                                    <span id="cart-badge" class="badge badge-warning">3</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="cart-dropdown">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="media-left media-middle">
                                                        <img class="media-object" src="images/product-1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Put a Title Here</h4>
                                                        <span class="quantity">1</span> <span class="price">$59</span>
                                                        <button type="button" class="close"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/product-2.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Put a Title Here</h4>
                                                        <span class="quantity">1</span> <span class="price">$59</span>
                                                        <button type="button" class="close"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/product-3.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Put a Title Here</h4>
                                                        <span class="quantity">1</span> <span class="price">$59</span>
                                                        <button type="button" class="close"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="total">
                                                <h4 class="total_price">$177.00</h4>
                                                <span class="total_item">03 items</span>
                                                <a href="#" class="btn btn-primary pull-right">Check Out </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- /.Cart Option -->
                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
        <!-- .site-nav -->
        <div class="mobail_menu_main visible-xs visible-sm">
            <div class="navbar-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                            <button type="button" class="navbar-toggle collapsed" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <a class="sidebar_logo" href="index.html"><img src="images/logo.png" alt=""></a>
                <div id="toggle_close">&times;</div>
                <div id='cssmenu'>
                    <ul>
                        <li>
                            <form class="sidebar_search">
                                <input type="search" placeholder="Search...">
                                <button>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </li>
                        <li class='has-sub'><a href='#'>Home</a>

                            <ul>
                                <li>
                                    <a href="homepage1.html"> Homepage 01</a>
                                </li>
                                <li>
                                    <a href="homepage2.html"> Homepage 02</a>
                                </li>
                                <li>
                                    <a href="homepage3.html">Homepage 03</a>
                                </li>
                                <li>
                                    <a href="homepage4.html">Homepage 04</a>
                                </li>
                                <li>
                                    <a href="homepage5.html">Homepage 05</a>
                                </li>
                                <li>
                                    <a href="homepage6.html"> Home page 06 (Fashion) </a>
                                </li>
                                <li>
                                    <a href="homepage7_electronic.html"> Homepage 07 (Electronic)</a>
                                </li>
                                <li>
                                    <a href="homepage8_organic.html"> Homepage 08 (Organic)</a>
                                </li>
                                <li>
                                    <a href="homepage9_sport.html"> Homepage 09 (Sport)</a>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Pages</a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'>About Us</a>
                                    <ul>
                                        <li>
                                            <a href="aboutus1.html"> About Style 01</a>
                                        </li>
                                        <li>
                                            <a href="aboutus2.html"> About Style 02 </a>
                                        </li>
                                        <li>
                                            <a href="aboutus3.html"> About Style 03 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Services</a>
                                    <ul>
                                        <li>
                                            <a href="service_page1.html"> Services 01</a>
                                        </li>
                                        <li>
                                            <a href="service_page2.html"> Services 02 </a>
                                        </li>
                                        <li>
                                            <a href="service_page3.html"> Services 03</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Team</a>
                                    <ul>
                                        <li>
                                            <a href="team_overlay_style.html"> Overly Style</a>
                                        </li>
                                        <li>
                                            <a href="team_transparent_style.html"> Transparent Style</a>
                                        </li>
                                        <li>
                                            <a href="team_circle_style.html"> Circle Style </a>
                                        </li>
                                        <li>
                                            <a href="team_classic_style.html"> Classic Style </a>
                                        </li>
                                        <li>
                                            <a href="team_creative_style.html"> Creative Style </a>
                                        </li>
                                        <li>
                                            <a href="team_single.html"> Team Single </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href='faq.html'>FAQ</a></li>
                                <li class='has-sub'>
                                    <a href='#'>Contact Us </a>
                                    <ul>
                                        <li>
                                            <a href="contact_us1.html"> Contact Us 01</a>
                                        </li>
                                        <li>
                                            <a href="contact_us2.html"> Contact Us 02</a>
                                        </li>
                                        <li>
                                            <a href="contact_us3.html"> Contact Us 03 </a>
                                        </li>
                                        <li>
                                            <a href="contact_us4.html"> Contact Us 04 </a>
                                        </li>
                                        <li>
                                            <a href="contact_us5.html"> Contact Us 05</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Extra Pages </a>
                                    <ul>
                                        <li>
                                            <a href="404_style1.html"> 404 style 01</a>
                                        </li>
                                        <li>
                                            <a href="404_style2.html"> 404 style 02</a>
                                        </li>
                                        <li>
                                            <a href="404_style3.html"> 404 Animated </a>
                                        </li>
                                        <li>
                                            <a href="404_style4.html"> 404 Full Width</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html"> Coming Soon 01</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html"> Coming Soon 02</a>
                                        </li>
                                        <li>
                                            <a href="under_construction.html"> Under Construction </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href='login_and_register.html'>Login/Register</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Features</a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'>Headers</a>
                                    <ul>
                                        <li>
                                            <a href="sliders_basic/basic_slider_8.html" target="_blank"> Default Header</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_1.html" target="_blank"> Transparent Header</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_2.html" target="_blank"> Boxed Header</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_4.html" target="_blank"> Shop Header</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_3.html" target="_blank"> Flat Header</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_5.html" target="_blank"> Center Logo Header</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_6.html" target="_blank"> Dark Header</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Revolution Slider</a>
                                    <ul>
                                        <li>
                                            <a href="sliders_revolution/creative_freedom_slider.html" target="_blank"> Creative Freedom Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/before_after_slider.html" target="_blank"> Before After Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/coming_soon_slider.html" target="_blank"> Coming Soon Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/xmas_slider.html" target="_blank"> XMas Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/wow_factor_slider.html" target="_blank"> Wow Factor Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/parallax_scene_slider.html" target="_blank"> Parallax Scene Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/sleek_landing_page_slider.html" target="_blank"> Sleek Landing Page Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/particle_effect_slider.html" target="_blank"> Particle Effect Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/youtube_video_slider.html" target="_blank"> YouTube Video Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_revolution/web_product_dark_slider.html" target="_blank"> Web Product Dark Slider</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Basic Sliders</a>
                                    <ul>
                                        <li>
                                            <a href="sliders_basic/basic_slider_1.html" target="_blank"> Fix Image 01</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_5.html" target="_blank"> Fix Image 02</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_4.html" target="_blank"> Owl Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_8.html" target="_blank"> jQuery Camera Slider </a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_2.html" target="_blank"> Carousel Slider 01 </a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_3.html" target="_blank"> Carousel Slider 02 </a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_6.html" target="_blank"> Carousel Slider 03 </a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_7.html" target="_blank"> Carousel Slider 04 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Page Header</a>
                                    <ul>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header1_section"> Light Background</a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header2_section"> Dark Background </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header3_section"> Gradient Background </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header4_section"> Reverse Page Header </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header5_section"> Image Background </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header6_section"> Fullwidth Page Header </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header7_section"> Center Page Header</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Footer Styles </a>
                                    <ul>
                                        <li>
                                            <a href="shortcode/footer.html#footer_1_section"> Dark Footer</a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_2_section"> Shop Footer </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_3_section"> Light Footer </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_4_section"> 3 Column Footer </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_5_section"> Full Width </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Portfolio </a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'>Portfolio Grid</a>
                                    <ul>
                                        <li>
                                            <a href="portfolio_grid_1column.html"> I Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_2column.html"> II Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_3column.html"> III Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_4column.html"> IV Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_5column.html"> V Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_6column.html"> VI Column</a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_full_width.html"> Full Width</a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_sidebar.html"> Side Bar </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_grid_full_width_nomargin.html"> Full Width no Margin </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Portfolio Masonry</a>
                                    <ul>
                                        <li>
                                            <a href="portfolio_masonry_3column.html"> III Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_4column.html"> IV Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_nomargin_3column.html"> No Margin III Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_nomargin_4column.html"> No Margin IV Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_nomargin_5column.html"> No Margin V Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_sidebar.html"> Side Bar </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_full_width_nomargin.html"> Full Width no Margin </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Portfolio Single</a>
                                    <ul>
                                        <li>
                                            <a href="portfolio_single_gallery.html"> Gallery Post </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_single_image.html"> Image Post </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_single_slider.html"> Slider Post </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_single_vedio.html"> Video Post </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Shortcode</a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'>Shortcodes 01</a>
                                    <ul>
                                        <li>
                                            <a href="shortcode/accordion.html"> Accordion </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/blog.html"> Blog </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/clients.html"> Clients </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/counters.html"> Counters </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/elements.html">Messages Alert </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/elements.html#buttons_section"> Buttons</a>
                                        </li>
                                        <li>
                                            <a href="shortcode/elements.html#paginations_section"> Paginations</a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html"> Page Header</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Shortcodes 02</a>
                                    <ul>
                                        <li>
                                            <a href="shortcode/elements.html#video_player_section"> Video Player </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/features_with_icon.html">Features With Icon </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/features_with_images.html"> Features With Images </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html">Footers </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/forms.html"> Forms </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/icon.html">Icons </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/headings.html"> Headings Styles </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/login_and_register.html">Login/Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Shortcodes 03</a>
                                    <ul>
                                        <li>
                                            <a href="shortcode/img-box.html"> Image Box </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/portfolio.html"> Portfolio </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/pricing.html"> Pricing Tables </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/progress.html"> Progress Bars </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/tab.html"> Tabs </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/team.html"> Team Sliders </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/testimonials.html">Testimonials </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Shortcodes 04</a>
                                    <ul>
                                        <li>
                                            <a href="404_style1.html"> 404 style 01</a>
                                        </li>
                                        <li>
                                            <a href="404_style2.html"> 404 style 02</a>
                                        </li>
                                        <li>
                                            <a href="404_style3.html"> 404 Animated </a>
                                        </li>
                                        <li>
                                            <a href="404_style4.html"> 404 Full Width</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html"> Coming Soon 01</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html"> Coming Soon 02</a>
                                        </li>
                                        <li>
                                            <a href="under_construction.html"> Under Construction </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Blog</a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'>Classic Style</a>
                                    <ul>
                                        <li>
                                            <a href="blog_style2.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style1.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style3.html">II Column Full Width</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class='has-sub'>
                                    <a href='#'>Masonry Grid</a>
                                    <ul>
                                        <li>
                                            <a href="blog_style5.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style4.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style6.html">II Column Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Creative Style</a>
                                    <ul>
                                        <li>
                                            <a href="blog_style8.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style7.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style9.html">II Column Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Modern Style</a>
                                    <ul>
                                        <li>
                                            <a href="blog_style11.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style10.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_style12.html">III Column Full Width</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class='has-sub'>
                                    <a href='#'>Single Page</a>
                                    <ul>
                                        <li>
                                            <a href="blog_single2.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_single1.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog_single3.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Shop</a>
                            <ul>
                                <li>
                                    <a href="shop_sidebar.html"> Shop Sidebar</a>
                                </li>
                                <li>
                                    <a href="shop_full_width.html"> Shop Full Width</a>
                                </li>
                                <li>
                                    <a href="product_single_page.html">Product Single Page</a>
                                </li>
                                <li>
                                    <a href="product_single_sidebar.html">Product Single Sidebar</a>
                                </li>
                                <li>
                                    <a href="product_single_electranics.html">Product Single Electronic</a>
                                </li>
                                <li>
                                    <a href="product_single_organic.html">Product Single Organic</a>
                                </li>
                                <li>
                                    <a href="product_single_sport.html">Product Single Sport</a>
                                </li>
                                <li>
                                    <a href="shopping_cart.html"> Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="shop_checkout.html"> Shop Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar_login">
                            <a href="login_and_register.html" class="btn btn-primary">Login/Register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    @section('content')

    @show

    <!-- footer start -->
    <div class="footer">
        <div class="container">
            <div class="footer_wrapper_first">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_first_image">
                            <img src="images/logo_light.png" class="img-responsive" alt="footer3_logo_img" />
                        </div>
                    </div>
                    <div class="col-sm-6 visible-sm">
                        <div class="wrapper_first_icon">
                            <i class="fa fa-map-marker"></i><span>Get Appointment</span>
                        </div>
                        <div class="wrapper_first_icon">
                            <i class="fa fa-phone"></i><span>Contact our Office</span>
                        </div>
                        <div class="wrapper_first_icon">
                            <i class="fa fa-rss" aria-hidden="true"></i><span>Latest News <a href="#">New</a></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 hidden-sm">
                        <div class="wrapper_first_icon">
                            <i class="fa fa-map-marker"></i><span>Get Appointment</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 hidden-sm">
                        <div class="wrapper_first_icon">
                            <i class="fa fa-phone"></i><span>Contact our Office</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 hidden-sm">
                        <div class="wrapper_first_icon">
                            <i class="fa fa-rss" aria-hidden="true"></i><span>Latest News <a href="#">New</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_wrapper_second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                        <div class="wrapper_second_about">
                            <h4>About Us</h4>
                            <div class="abotus_content">
                                <p>Proin gravida nibh vel velit auctr aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit aks consequat vel velit auctor....</p>
                            </div>
                            <div class="aboutus_link">
                                <a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                            <ul class="aboutus_social_icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                </li>
                                <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                        <div class="wrapper_second_useful">
                            <h4>Useful Link</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Ipsum. Proin gravida nibh vel</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Auctor aliquet. Aenean </a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Din, lorem quis bibendum </a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Nisi elit consequat ipsum,</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Sagittis sem nibh id elit. </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                        <div class="wrapper_second_blog">
                            <h4>From the Blog</h4>
                            <div class="blog_wrapper1">
                                <div class="blog_image">
                                    <img src="images/home/home-2/blog-img1.png" class="img-responsive" alt="blog-img1_img" />
                                </div>
                                <div class="blog_text">
                                    <h5><a href="#">Last Booking Registration Date</a></h5>
                                    <div class="blog_date"><i class="fa fa-calendar-o" aria-hidden="true"></i>June 28, 2018-19</div>
                                </div>
                            </div>
                            <div class="blog_wrapper2">
                                <div class="blog_image">
                                    <img src="images/home/home-2/blog-img2.png" class="img-responsive" alt="blog-img2_img" />
                                </div>
                                <div class="blog_text">
                                    <h5><a href="#">Learn Every Thing you Want</a></h5>
                                    <div class="blog_date"><i class="fa fa-calendar-o" aria-hidden="true"></i>June 28, 2018-19</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6">
                        <div class="wrapper_second_contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>
                                    <p>16122 Collins Street West
                                        <br>Victoria 8007 Australia.
                                    </p>
                                </li>
                                <li><i class="fa fa-phone"></i>
                                    <p>+1 854 584 5475
                                        <br>+1 547 547 5487
                                    </p>
                                </li>
                                <li><i class="fa fa-envelope"></i><a href="#">university@mail.com</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->

    <!-- copyright_wrapper start -->
    <div class="copyright_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="copyright_content">
                        <p>© Copyright 2018-19 by <a href="http://webstrot.com/"> Webstrot </a> - all right reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright_wrapper end -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Bootstrap js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/megnify.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Revolution Slider js -->
    <script src="js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.video.min.js"></script>

    <!-- Portfolio Filter js -->
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <!-- Counter Pie Chart js -->
    <script src="js/jquery.easypiechart.min.js"></script>
    <!-- Magnific Popup js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Owl Carousel js -->
    <script src="js/owl.carousel.js"></script>
    <!-- wow js -->
    <script src="js/wow.js"></script>
    <!-- portfolio filter js -->
    <script src="js/portfolio.js"></script>
    <!-- homepage js -->
    <script src="js/homepage.js"></script>
    <!-- Custom js -->
    <script src="js/custom.js"></script>
    <script src="js/shop.js"></script>
    <!-- slider custom js Start -->
    <script>
        var tpj = jQuery;

        var revapi1052;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1052_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1052_1");
            } else {
                revapi1052 = tpj("#rev_slider_1052_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 10
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 10
                            }
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: false,
                            hide_under: 1024,
                            style: "hephaistos",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 40,
                            space: 10,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1400, 1240, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
        
        function changeQty(increase) {
        var qty = parseInt($('.select_number').find("input").val());
        if (!isNaN(qty)) {
            qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
            $('.select_number').find("input").val(qty);
        } else {
            $('.select_number').find("input").val(1);
        }
    }

    function goToByScroll(id) {
        $('html,body').animate({
            scrollTop: $("#" + id).offset().top
        }, 'slow');
    }

    //------- Progress Bar ---------//

    $('.progress_section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('div.progress-bar'), function() {
                $(this).css('width', $(this).attr('aria-valuenow') + '%');
            });
            $(this).off('inview');
        }
    });
    </script>
    <!-- slider custom js End -->

    
</body>

</html>