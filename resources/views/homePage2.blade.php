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
    <title> Home Page 2 </title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    <!-- font-awesome -->
    <link href="{{asset('css/font-awesome')}}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
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
                                            <a href="#" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
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
                                                <a href="aboutus1.html">  About Style 01</a>
                                            </li>
                                            <li>
                                                <a href="aboutus2.html">  About Style 02 </a>
                                            </li>
                                            <li>
                                                <a href="aboutus3.html">  About Style 03 </a>
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
                                                <a href="service_page3.html">  Services 03</a>
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
                                                <a href="team_circle_style.html">  Circle Style </a>
                                            </li>
                                            <li>
                                                <a href="team_classic_style.html">  Classic Style </a>
                                            </li>
                                            <li>
                                                <a href="team_creative_style.html">  Creative Style </a>
                                            </li>
                                            <li>
                                                <a href="team_single.html">  Team Single </a>
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
                                                <a href="contact_us2.html">  Contact Us 02</a>
                                            </li>
                                            <li>
                                                <a href="contact_us3.html">  Contact Us 03 </a>
                                            </li>
                                            <li>
                                                <a href="contact_us4.html"> Contact Us 04 </a>
                                            </li>
                                            <li>
                                                <a href="contact_us5.html">  Contact Us 05</a>
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
                                                <a href="404_style2.html">  404 style 02</a>
                                            </li>
                                            <li>
                                                <a href="404_style3.html">  404 Animated </a>
                                            </li>
                                            <li>
                                                <a href="404_style4.html">  404 Full Width</a>
                                            </li>
                                            <li>
                                                <a href="coming_soon_style1.html">  Coming Soon 01</a>
                                            </li>
                                            <li>
                                                <a href="coming_soon_style2.html">  Coming Soon 02</a>
                                            </li>
                                            <li>
                                                <a href="under_construction.html">  Under Construction </a>
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
                                                <a href="sliders_basic/basic_slider_1.html" target="_blank">  Fix Image 01</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_5.html" target="_blank">  Fix Image 02</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_4.html" target="_blank"> Owl Slider</a>
                                            </li>
                                            <li>
                                                <a href="sliders_basic/basic_slider_8.html" target="_blank">  jQuery Camera Slider </a>
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
                                                <a href="sliders_basic/basic_slider_7.html" target="_blank">  Carousel Slider 04 </a>
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
                                                <a href="shortcode/page_header.html#page_header3_section">  Gradient Background </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header4_section">  Reverse Page Header </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header5_section">  Image Background </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/page_header.html#page_header6_section">  Fullwidth Page Header </a>
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
                                                <a href="shortcode/footer.html#footer_1_section">  Dark Footer</a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_2_section">  Shop Footer </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_3_section">  Light Footer </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_4_section">  3 Column Footer </a>
                                            </li>
                                            <li>
                                                <a href="shortcode/footer.html#footer_5_section">  Full Width </a>
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
                                                    <a href="portfolio_grid_full_width_nomargin.html"> Full Width no Margin  </a>
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
                                                    <a href="portfolio_masonry_nomargin_4column.html"> No  Margin IV Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_nomargin_5column.html"> No Margin V Column </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_sidebar.html"> Side Bar </a>
                                                </li>
                                                <li>
                                                    <a href="portfolio_masonry_full_width_nomargin.html"> Full Width no Margin  </a>
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
                                                    <a href="portfolio_single_slider.html"> Slider Post  </a>
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
                                                    <a href="shortcode/features_with_images.html"> Features With Images  </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/footer.html">Footers </a>
                                                </li>
                                                <li>
                                                    <a href="shortcode/forms.html"> Forms  </a>
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
                                                    <a href="shortcode/pricing.html"> Pricing Tables  </a>
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
                                                    <a href="404_style2.html">  404 style 02</a>
                                                </li>
                                                <li>
                                                    <a href="404_style3.html">  404 Animated </a>
                                                </li>
                                                <li>
                                                    <a href="404_style4.html">  404 Full Width</a>
                                                </li>
                                                <li>
                                                    <a href="coming_soon_style1.html">  Coming Soon 01</a>
                                                </li>
                                                <li>
                                                    <a href="coming_soon_style2.html">  Coming Soon 02</a>
                                                </li>
                                                <li>
                                                    <a href="under_construction.html">  Under Construction </a>
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
									<a href="homepage9_sport.html"> Homepage 09  (Sport)</a>
								</li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Pages</a>
                            <ul>
                                <li class='has-sub'>
                                    <a href='#'>About Us</a>
                                    <ul>
                                        <li>
                                            <a href="aboutus1.html">  About Style 01</a>
                                        </li>
                                        <li>
                                            <a href="aboutus2.html">  About Style 02 </a>
                                        </li>
                                        <li>
                                            <a href="aboutus3.html">  About Style 03 </a>
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
                                            <a href="service_page3.html">  Services 03</a>
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
                                            <a href="team_circle_style.html">  Circle Style </a>
                                        </li>
                                        <li>
                                            <a href="team_classic_style.html">  Classic Style </a>
                                        </li>
                                        <li>
                                            <a href="team_creative_style.html">  Creative Style </a>
                                        </li>
                                        <li>
                                            <a href="team_single.html">  Team Single </a>
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
                                            <a href="contact_us2.html">  Contact Us 02</a>
                                        </li>
                                        <li>
                                            <a href="contact_us3.html">  Contact Us 03 </a>
                                        </li>
                                        <li>
                                            <a href="contact_us4.html"> Contact Us 04 </a>
                                        </li>
                                        <li>
                                            <a href="contact_us5.html">  Contact Us 05</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Extra Pages  </a>
                                    <ul>
                                        <li>
                                            <a href="404_style1.html"> 404 style 01</a>
                                        </li>
                                        <li>
                                            <a href="404_style2.html">  404 style 02</a>
                                        </li>
                                        <li>
                                            <a href="404_style3.html">  404 Animated </a>
                                        </li>
                                        <li>
                                            <a href="404_style4.html">  404 Full Width</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html">  Coming Soon 01</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html">  Coming Soon 02</a>
                                        </li>
                                        <li>
                                            <a href="under_construction.html">  Under Construction </a>
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
                                            <a href="sliders_basic/basic_slider_1.html" target="_blank">  Fix Image 01</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_5.html" target="_blank">  Fix Image 02</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_4.html" target="_blank"> Owl Slider</a>
                                        </li>
                                        <li>
                                            <a href="sliders_basic/basic_slider_8.html" target="_blank">  jQuery Camera Slider </a>
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
                                            <a href="sliders_basic/basic_slider_7.html" target="_blank">  Carousel Slider 04 </a>
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
                                            <a href="shortcode/page_header.html#page_header3_section">  Gradient Background </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header4_section">  Reverse Page Header </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header5_section">  Image Background </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header6_section">  Fullwidth Page Header </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/page_header.html#page_header7_section"> Center Page Header</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class='has-sub'>
                                    <a href='#'>Footer Styles  </a>
                                    <ul>
                                        <li>
                                            <a href="shortcode/footer.html#footer_1_section">  Dark Footer</a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_2_section">  Shop Footer </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_3_section">  Light Footer </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_4_section">  3 Column Footer </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html#footer_5_section">  Full Width </a>
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
                                            <a href="portfolio_grid_full_width_nomargin.html"> Full Width no Margin  </a>
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
                                            <a href="portfolio_masonry_nomargin_4column.html"> No  Margin IV Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_nomargin_5column.html"> No Margin V Column </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_sidebar.html"> Side Bar </a>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_full_width_nomargin.html"> Full Width no Margin  </a>
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
                                            <a href="portfolio_single_slider.html"> Slider Post  </a>
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
                                            <a href="shortcode/features_with_images.html"> Features With Images  </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/footer.html">Footers </a>
                                        </li>
                                        <li>
                                            <a href="shortcode/forms.html"> Forms  </a>
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
                                            <a href="shortcode/pricing.html"> Pricing Tables  </a>
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
                                            <a href="404_style2.html">  404 style 02</a>
                                        </li>
                                        <li>
                                            <a href="404_style3.html">  404 Animated </a>
                                        </li>
                                        <li>
                                            <a href="404_style4.html">  404 Full Width</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html">  Coming Soon 01</a>
                                        </li>
                                        <li>
                                            <a href="coming_soon_style1.html">  Coming Soon 02</a>
                                        </li>
                                        <li>
                                            <a href="under_construction.html">  Under Construction </a>
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

    <!-- slider section Start -->
    <div class="slider_main_wrapper">
        <div id="rev_slider_1052_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="web-product-dark122" data-source="gallery" style="background-color:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_1052_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-2946" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/home/home-2/webproduct_darkbg1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2946-layer-1" data-x="['right','right','center','center']" data-hoffset="['-254','-453','70','60']" data-y="['middle','middle','middle','bottom']" data-voffset="['50','50','211','25']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; border-width:0px;"><img src="images/home/home-2/macbookpro.png" alt="" data-ww="['1000px','1000px','500px','350px']" data-hh="['600px','600px','300px','210px']" width="1000" height="600" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2946-layer-2" data-x="['left','left','center','center']" data-hoffset="['828','865','70','60']" data-y="['top','top','top','bottom']" data-voffset="['266','216','580','63']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":3350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; border-width:0px;"><img src="images/home/home-2/express_macbook_content1.jpg" alt="" data-ww="['653px','653px','330px','230px']" data-hh="['408px','408px','206px','144px']" width="653" height="408" data-no-retina> </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2946-layer-3" data-x="['left','left','center','center']" data-hoffset="['593','633','-110','-60']" data-y="['top','top','top','bottom']" data-voffset="['253','203','590','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2750,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; border-width:0px;"><img src="images/home/home-2/ipad_dark.png" alt="" data-ww="['430px','430px','200px','170px']" data-hh="['540px','540px','251px','213px']" width="430" height="540" data-no-retina> </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2946-layer-4" data-x="['left','left','left','center']" data-hoffset="['663','703','212','-60']" data-y="['top','top','top','bottom']" data-voffset="['341','291','632','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":3700,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; border-width:0px;"><img src="images/home/home-2/express_ipad_content1.jpg" alt="" data-ww="['290px','290px','135px','115px']" data-hh="['374px','374px','174px','148px']" width="290" height="374" data-no-retina> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2946-layer-5" data-x="['left','left','left','left']" data-hoffset="['530','553','127','58']" data-y="['top','top','top','top']" data-voffset="['348','297','622','529']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; border-width:0px;"><img src="images/home/home-2/ihpone_dark.png" alt="" data-ww="['260px','260px','130px','100px']" data-hh="['450px','450px','225px','173px']" width="260" height="450" data-no-retina> </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2946-layer-6" data-x="['left','left','left','left']" data-hoffset="['576','598','150','75']" data-y="['top','top','top','top']" data-voffset="['431','379','663','560']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":3950,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10; border-width:0px;"><img src="images/home/home-2/express_iphone_content1.jpg" alt="" data-ww="['170px','170px','85px','66px']" data-hh="['286px','286px','143px','111px']" width="170" height="286" data-no-retina> </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption WebProduct-Title-Light   tp-resizeme" id="slide-2946-layer-7" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['-80','-80','137','130']" data-fontsize="['70','70','50','50']" data-lineheight="['90','90','50','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11; white-space: nowrap;">Creative
                            <br/> Websites
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption WebProduct-Content-Light   tp-resizeme" id="slide-2946-layer-9" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['100','127','300','270']" data-fontsize="['18','16','16','13']" data-lineheight="['27','27','22','22']" data-width="['448','356','334','277']" data-height="['none','none','76','68']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal;">We have a number of different teams within our agency that specialise in different areas of business so you that receive a generic service.</div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption WebProduct-Button rev-btn " id="slide-2946-layer-8" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['250','268','450','400']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2948","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 14; white-space: nowrap; letter-spacing:1px;">How does It work </div>

                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-2948" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Easy to Use" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/home/home-2/webproduct_darkbg3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2948-layer-1" data-x="['right','right','center','center']" data-hoffset="['-54','-133','0','0']" data-y="['middle','middle','middle','bottom']" data-voffset="['50','50','211','5']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"x:right;","speed":1500,"to":"o:1;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 22; border-width:0px;"><img src="images/home/home-2/macbookpro.png" alt="" data-ww="['1000px','1000px','500px','350px']" data-hh="['600px','600px','300px','210px']" width="1000" height="600" data-no-retina> </div>

                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2948-layer-2" data-x="['left','left','center','center']" data-hoffset="['628','545','0','0']" data-y="['top','top','top','bottom']" data-voffset="['267','216','580','43']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":3350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 23; border-width:0px;"><img src="images/home/home-2/editor_layers1.jpg" alt="" data-ww="['653px','653px','330px','230px']" data-hh="['408px','408px','206px','144px']" width="653" height="408" data-no-retina> </div>

                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption WebProduct-Title-Light   tp-resizeme" id="slide-2948-layer-7" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['-80','-80','137','140']" data-fontsize="['70','90','75','75']" data-lineheight="['90','90','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 24; white-space: nowrap;">How Does
                            <br/> it Work? </div>

                        <!-- LAYER NR. 22 -->
                        <div class="tp-caption WebProduct-Content-Light   tp-resizeme" id="slide-2948-layer-9" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['100','127','345','326']" data-fontsize="['18','16','16','13']" data-lineheight="['27','27','22','22']" data-width="['448','356','334','277']" data-height="['none','none','76','68']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal;">We have a number of different teams within our agency that specialise in different areas of business so you that receive a generic service. </div>

                        <!-- LAYER NR. 23 -->
                        <div class="tp-caption WebProduct-Button rev-btn " id="slide-2948-layer-8" data-x="['left','left','left','left']" data-hoffset="['120','30','200','79']" data-y="['middle','middle','top','top']" data-voffset="['250','268','456','430']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2947","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 27; white-space: nowrap; letter-spacing:1px;">Go To The Next</div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-2947" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Examples" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/home/home-2/webproduct_darkbg2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2947-layer-1" data-x="['right','right','center','center']" data-hoffset="['103','161','-264','-116']" data-y="['middle','middle','middle','bottom']" data-voffset="['-260','-152','252','65']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;rZ:-30;","delay":2500,"ease":"Power3.easeOut"},{"delay":"wait","speed":2000,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;sX:0.9;sY:0.9;skX:0px;rX:0;rY:0;rZ:-30;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 15; border-width:0px;"><img src="images/home/home-2/examplelayer3.jpg" alt="" data-ww="['600px','500px','400px','200px']" data-hh="['338px','281px','225px','113px']" width="800" height="450" data-no-retina> </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2947-layer-3" data-x="['left','left','center','center']" data-hoffset="['779','623','-3','16']" data-y="['top','top','top','bottom']" data-voffset="['276','325','809','-32']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;rZ:-10;","delay":2750,"ease":"Power3.easeOut"},{"delay":"wait","speed":2000,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:-10;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 16; border-width:0px;"><img src="images/home/home-2/examplelayer2.jpg" alt="" data-ww="['600px','500px','400px','200px']" data-hh="['338px','281px','225px','113px']" width="800" height="450" data-no-retina> </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption   tp-resizeme" id="slide-2947-layer-5" data-x="['left','left','left','left']" data-hoffset="['813','638','396','263']" data-y="['top','top','top','top']" data-voffset="['557','549','551','507']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","speed":1500,"to":"o:1;rZ:10;","delay":3000,"ease":"Power3.easeOut"},{"delay":"wait","speed":2000,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"500","ease":"Power1.easeInOut","to":"o:1;sX:0.9;sY:0.9;rX:0;rY:0;rZ:10;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 17; border-width:0px;"><img src="images/home/home-2/examplelayer1.jpg" alt="" data-ww="['600px','500px','400px','200px']" data-hh="['338px','281px','225px','113px']" width="800" height="450" data-no-retina> </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption WebProduct-Title-Light tp-resizeme" id="slide-2947-layer-7" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['-80','-80','137','140']" data-fontsize="['70','90','75','75']" data-lineheight="['90','90','75','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 18; white-space: nowrap;">Variety of
                            <br/> Our Work! </div>

                        <!-- LAYER NR. 16 -->
                        <div class="tp-caption WebProduct-Content-Light   tp-resizeme" id="slide-2947-layer-9" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['100','127','345','326']" data-fontsize="['18','16','16','13']" data-lineheight="['27','27','22','22']" data-width="['448','356','334','277']" data-height="['none','none','76','68']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13; min-width: 448px; max-width: 448px; white-space: normal;">We have a number of different teams within our agency that specialise in different areas of business so you that receive a generic service. </div>

                        <!-- LAYER NR. 17 -->
                        <div class="tp-caption WebProduct-Button rev-btn " id="slide-2947-layer-8" data-x="['left','left','left','left']" data-hoffset="['120','30','200','80']" data-y="['middle','middle','top','top']" data-voffset="['250','268','456','430']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2946","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(51, 51, 51, 1.00);bg:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[40,40,40,40]" style="z-index: 21; white-space: nowrap; letter-spacing:1px;">Back To First Slide </div>
                    </li>

                </ul>
            </div>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- slider section End -->

    <!-- services_section start -->
    <div class="services_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="icon_text">
                        <div class="icon_text_effect">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <h4 class="text-center"><a href="#">Retina Ready</a></h4>
                        <p class="text-center">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="icon_text">
                        <div class="icon_text_effect">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </div>
                        <h4 class="text-center"><a href="#">Unique Features</a></h4>
                        <p class="text-center">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="icon_text">
                        <div class="icon_text_effect">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h4 class="text-center"><a href="#">Multi Purpose</a></h4>
                        <p class="text-center">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="icon_text">
                        <div class="icon_text_effect">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <h4 class="text-center"><a href="#">User Friendly</a></h4>
                        <p class="text-center">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services_section end -->

    <!-- portfolio_section start -->
    <div class="portfolio_section">
        <div class="container">
            <div class="row">
                <!-- section_heading start -->
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="section_heading">
                        <h2>Amazing Our Work</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                    </div>
                </div>
                <!-- section_heading end -->
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="portfolio-area">
                        <div class="container">
                            <div class="portfolio-filter clearfix text-center">
                                <ul class="list-inline" id="filter">
                                    <li><a class="active" data-group="all">All</a></li>
                                    <li><a data-group="web_design"> Web Design</a></li>
                                    <li><a data-group="elements">Elements</a></li>
                                    <li><a data-group="UI_items"> UI Design</a></li>
                                    <li><a data-group="photos"> Photos</a></li>
                                </ul>
                            </div>
                            <div class="row three-column">
                                <div id="gridWrapper" class="clearfix">
                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "web_design", "elements"]'>
                                        <div class="portfolio-thumb">

                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <figure>
                                                    <img src="images/home/home-2/portfolio-1.jpg" class="zoom image img-responsive" alt="service_img" />
                                                </figure>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/home/home-2/portfolio-1.jpg"><i class="fa fa-search-plus"></i></a></div>

                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#"> Creative Web Design</a></h4>
                                                    </div>
                                                    <div class="project_category">
                                                        <h4><a href="#">Web Design</a></h4>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 1548</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "web_design", "elements", "UI_items"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <figure>
                                                    <img src="images/home/home-2/portfolio-2.jpg" class="zoom image img-responsive" alt="service_img" />
                                                </figure>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/home/home-2/portfolio-2.jpg"><i class="fa fa-search-plus"></i></a></div>

                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#">Complex Deshboard</a></h4>
                                                    </div>
                                                    <div class="project_category">
                                                        <h4><a href="#">Web Development</a></h4>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 1548</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "photos", "social"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <figure>
                                                    <img src="images/home/home-2/portfolio-3.jpg" class="zoom image img-responsive" alt="service_img" />
                                                </figure>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/home/home-2/portfolio-3.jpg"><i class="fa fa-search-plus"></i></a></div>
                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#"> Digital Agency</a></h4>
                                                    </div>
                                                    <div class="project_category">
                                                        <h4><a href="#">Photos</a></h4>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 1548</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "photos", "social", "web_design"]'>
                                        <div class="portfolio-thumb">

                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <figure>
                                                    <img src="images/home/home-2/portfolio-4.jpg" class="zoom image img-responsive" alt="service_img" />
                                                </figure>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/home/home-2/portfolio-4.jpg"><i class="fa fa-search-plus"></i></a></div>

                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#"> Agency Web Application</a></h4>
                                                    </div>
                                                    <div class="project_category">
                                                        <h4><a href="#">Web Application</a></h4>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 1548</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "web_design", "photos", "social"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <figure>
                                                    <img src="images/home/home-2/portfolio-5.jpg" class="zoom image img-responsive" alt="service_img" />
                                                </figure>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/home/home-2/portfolio-5.jpg"><i class="fa fa-search-plus"></i></a></div>
                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#">Logo & Branding</a></h4>
                                                    </div>
                                                    <div class="project_category">
                                                        <h4><a href="#">UI Design</a></h4>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 1548</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.portfolio-thumb -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column" data-groups='["all", "UI_items", "elements", "elements"]'>
                                        <div class="portfolio-thumb">
                                            <div class="gc_filter_cont_overlay_wrapper">
                                                <figure>
                                                    <img src="images/home/home-2/portfolio-6.jpg" class="zoom image img-responsive" alt="service_img" />
                                                </figure>
                                                <div class="gc_filter_cont_overlay">
                                                    <div class="gc_filter_text"><a href="images/home/home-2/portfolio-6.jpg"><i class="fa fa-search-plus"></i></a></div>
                                                </div>
                                                <div class="tab_image_text">
                                                    <div class="project_title">
                                                        <h4><a href="#">Food App Design</a></h4>
                                                    </div>
                                                    <div class="project_category">
                                                        <h4><a href="#">App Design</a></h4>
                                                    </div>
                                                    <div class="project_likes">
                                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 1548</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.portfolio-thumb -->
                                    </div>
                                </div>
                                <!--/#gridWrapper-->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!--/.portfolio-area-->
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio_section end -->

    <!-- features_list_wrapper start-->
    <div class="features_list_wrapper">
        <div class="features_list_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="section_heading">
                        <h2>Amazing Feature List</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="text_wrapper_left">
                                <div class="icon_wrapper_list">
                                    <div class="icon_content_left">
                                        <h4><a href="#">Cloud Websites</a></h4>
                                        <p>This is Photoshop's version of Lorem Proin aks gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                    </div>
                                    <div class="icon_img_effect">
                                        <div class="icon_img_list">
                                            <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon_wrapper_list">
                                    <div class="icon_content_left">
                                        <h4><a href="#">Modern Design</a></h4>
                                        <p>This is Photoshop's version of Lorem Proin aks gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                    </div>
                                    <div class="icon_img_effect">
                                        <div class="icon_img_list">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon_wrapper_list">
                                    <div class="icon_content_left">
                                        <h4><a href="#">Awesome Support</a></h4>
                                        <p>This is Photoshop's version of Lorem Proin aks gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                    </div>
                                    <div class="icon_img_effect">
                                        <div class="icon_img_list">
                                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 hidden-sm hidden-xs">
                            <div class="features_list_img_wrapper">
                                <img class="img-responsive" src="images/home/home-2/feature_list_img.png" alt="section-2-img">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                            <div class="text_wrapper_right">
                                <div class="icon_wrapper_list">
                                    <div class="icon_img_effect">
                                        <div class="icon_img_list">
                                            <i class="fa fa-desktop" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="icon_content_right">
                                        <h4><a href="#">Fully Responsive</a></h4>
                                        <p>This is Photoshop's version of Lorem Proin aks gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                    </div>
                                </div>
                                <div class="icon_wrapper_list">
                                    <div class="icon_img_effect">
                                        <div class="icon_img_list">
                                            <i class="fa fa-tint" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="icon_content_right">
                                        <h4><a href="#">Demo Content</a></h4>
                                        <p>This is Photoshop's version of Lorem Proin aks gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                    </div>
                                </div>
                                <div class="icon_wrapper_list">
                                    <div class="icon_img_effect">
                                        <div class="icon_img_list">
                                            <i class="fa fa-shield" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="icon_content_right">
                                        <h4><a href="#">Parallax Section</a></h4>
                                        <p>This is Photoshop's version of Lorem Proin aks gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 visible-sm visible-xs">
                            <div class="features_list_img_wrapper">
                                <img class="img-responsive" src="images/home/home-2/feature_list_img.png" alt="section-2-img">
                            </div>
                        </div>
                    </div>
                    <!-- /.row-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div>
    <!-- features_list_wrapper end -->

    <!-- counter_section section start -->
    <div class="counter_wrapper">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our_progress">
                        <div class="counter_chart" data-percent="59">
                            <span class="percent">59<sup>%</sup></span>
                        </div>
                        <h4><a href="#">web design</a></h4>
                    </div>
                    <!-- /.our-progress -->

                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our_progress">
                        <div class="counter_chart" data-percent="76">
                            <span class="percent">76</span>
                        </div>
                        <h4><a href="#">programming</a></h4>
                    </div>
                    <!-- /.our_progress -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our_progress">
                        <div class="counter_chart" data-percent="85">
                            <span class="percent">85</span>
                        </div>
                        <h4><a href="#">graphic design</a></h4>
                    </div>
                    <!-- /.our_progress -->
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our_progress">
                        <div class="counter_chart" data-percent="90">
                            <span class="percent">90</span>
                        </div>
                        <h4><a href="#">video animation</a></h4>
                    </div>
                    <!-- /.our_progress -->
                </div>
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div>
    <!-- /.counter_wrapper end -->

    <!-- team_members_wrapper start -->
    <div class="team_members_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="section_heading">
                        <h2>Our Team Members</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="team_members_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="team_slider_wrapper">
                                    <div class="team_members_slider_image">
                                        <img src="images/home/home-2/team-1.jpg" class="img-responsive" alt="team19_img" />
                                    </div>
                                    <div class="team_members_slider_content">
                                        <h5>(Founder)</h5>
                                        <h4><a href="#">Jhon Parker</a></h4>
                                        <p>People who already have strong trust relships.</p>
                                        <a href="#" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_wrapper">
                                    <div class="team_members_slider_image">
                                        <img src="images/home/home-2/team-2.jpg" class="img-responsive" alt="team20_img" />
                                    </div>
                                    <div class="team_members_slider_content">
                                        <h5>(Trader)</h5>
                                        <h4><a href="#">Martina Colliys</a></h4>
                                        <p>People who already have strong trust relships.</p>
                                        <a href="#" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_wrapper">
                                    <div class="team_members_slider_image">
                                        <img src="images/home/home-2/team-3.jpg" class="img-responsive" alt="team21_img" />
                                    </div>
                                    <div class="team_members_slider_content">
                                        <h5>(Manager)</h5>
                                        <h4><a href="#">Jessica Jackson</a></h4>
                                        <p>People who already have strong trust relships.</p>
                                        <a href="#" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_wrapper">
                                    <div class="team_members_slider_image">
                                        <img src="images/home/home-2/team-4.jpg" class="img-responsive" alt="team22_img" />
                                    </div>
                                    <div class="team_members_slider_content">
                                        <h5>(Developer)</h5>
                                        <h4><a href="#">Kenneyth Deo</a></h4>
                                        <p>People who already have strong trust relships.</p>
                                        <a href="#" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_slider_wrapper">
                                    <div class="team_members_slider_image">
                                        <img src="images/home/home-2/team-5.jpg" class="img-responsive" alt="team23_img" />
                                    </div>
                                    <div class="team_members_slider_content">
                                        <h5>(core Team)</h5>
                                        <h4><a href="#">Dia Josaf</a></h4>
                                        <p>People who already have strong trust relships.</p>
                                        <a href="#" class="btn btn-default">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team_members_wrapper end -->

    <!-- testimonial_section start -->
    <div class="testimonial_section">
        <div class="testimonial_section_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="testimonial_info">
                    <div class="carousel slide" data-ride="carousel" id="testimonial_carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonial_carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/home/home-2/testi_img1.jpg" alt="test">
                            </li>
                            <li data-target="#testimonial_carousel" data-slide-to="1"><img class="img-responsive" src="images/home/home-2/testi_img2.jpg" alt="test">
                            </li>
                            <li data-target="#testimonial_carousel" data-slide-to="2"><img class="img-responsive" src="images/home/home-2/testi_img3.jpg" alt="test">
                            </li>
                            <li data-target="#testimonial_carousel" data-slide-to="3"><img class="img-responsive" src="images/home/home-2/testi_img4.jpg" alt="test">
                            </li>
                        </ol>
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">
                            <!-- Quote 1 -->
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>Lisa Doe, webstrot.</h4>
                                        <p>Donec feugiat id augue consequat vulputate Suspendisse at magna mattis dignissim libero fringilla leo aliquam vehicula.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>Lisa Doe, webstrot.</h4>
                                        <p>Donec feugiat id augue consequat vulputate Suspendisse at magna mattis dignissim libero fringilla leo aliquam vehicula.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>Lisa Doe, webstrot.</h4>
                                        <p>Donec feugiat id augue consequat vulputate Suspendisse at magna mattis dignissim libero fringilla leo aliquam vehicula.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 4 -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <h4>Lisa Doe, webstrot.</h4>
                                        <p>Donec feugiat id augue consequat vulputate Suspendisse at magna mattis dignissim libero fringilla leo aliquam vehicula.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_section end -->

    <!-- aboutus_section start -->
    <div class="aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_image_wrapper">
                        <img class="img-responsive" src="images/home/home-2/about_img.png" alt="about-img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_text_wrapper">
                        <h2>About Our Agency</h2>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. aks Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
                        <ul>
                            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><a href="#">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</a>
                            </li>
                            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><a href="#">Sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</a>
                            </li>
                            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><a href="#">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</a>
                            </li>
                            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><a href="#">Lorem quis bibendum auctor, nisi elit consequat ipsum.</a>
                            </li>
                            <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><a href="#">Nec sagittis sem nibh id elit. Duis sed odio sit amet akshay.</a>
                            </li>
                        </ul>
                        <div class="about_text_wrapper_btn">
                            <button class="btn_discover" type="button">Discover</button>
                            <button class="btn_read_more" type="button">read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- aboutus_section end -->

    <!-- pricing_section start -->
    <div class="pricing_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="section_heading">
                        <h2>Our Pricing Tables</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table-default text-left">
                                <div class="pricing-head text-center">
                                    <h3>Standard</h3>
                                    <div class="price">
                                        <span class="ruppe"><sup>$</sup>29</span>
                                        <span class="month">/ mo</span>
                                    </div>
                                </div>
                                <div class="pricing-detail">
                                    <ul class="pricing-list">
                                        <li>15 Projects</li>
                                        <li>2 Email Marketing</li>
                                        <li>5 Data Base</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li>50 GB Bandwith</li>
                                        <li>Enhanced Security</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Get Started</a>
                                </div>

                            </div>
                            <!-- /.pricing-table-wrapper -->
                        </div>
                        <!-- /.col-sm-3 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table-default text-left">
                                <div class="pricing-head text-center">
                                    <h3>Business</h3>
                                    <div class="price">
                                        <span class="ruppe"><sup>$</sup>49</span>
                                        <span class="month">/ mo</span>
                                    </div>
                                </div>
                                <div class="pricing-detail">
                                    <ul class="pricing-list">
                                        <li>15 Projects</li>
                                        <li>2 Email Marketing</li>
                                        <li>5 Data Base</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li>50 GB Bandwith</li>
                                        <li>Enhanced Security</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Get Started</a>
                                </div>
                            </div>
                            <!-- /.pricing-table-wrapper -->
                        </div>
                        <!-- /.col-sm-3 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table-default text-left">
                                <div class="pricing-head text-center">
                                    <h3>Premium</h3>
                                    <div class="price">
                                        <span class="ruppe"><sup>$</sup>79</span>
                                        <span class="month">/ mo</span>
                                    </div>
                                </div>
                                <div class="pricing-detail">
                                    <ul class="pricing-list">
                                        <li>15 Projects</li>
                                        <li>2 Email Marketing</li>
                                        <li>5 Data Base</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li>50 GB Bandwith</li>
                                        <li>Enhanced Security</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Get Started</a>
                                </div>
                            </div>
                            <!-- /.pricing-table-wrapper -->
                        </div>
                        <!-- /.col-sm-3 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="pricing-table-default text-left">
                                <div class="pricing-head text-center">
                                    <h3>Ultimate</h3>
                                    <div class="price">
                                        <span class="ruppe"><sup>$</sup>99</span>
                                        <span class="month">/ mo</span>
                                    </div>
                                </div>
                                <div class="pricing-detail">
                                    <ul class="pricing-list">
                                        <li>15 Projects</li>
                                        <li>2 Email Marketing</li>
                                        <li>5 Data Base</li>
                                        <li>30 GB Storage</li>
                                        <li>Unlimited Data Transfer</li>
                                        <li>50 GB Bandwith</li>
                                        <li>Enhanced Security</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Get Started</a>
                                </div>
                            </div>
                            <!-- /.pricing-table-wrapper -->
                        </div>
                        <!-- /.col-sm-3 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- pricing_section end -->

    <!-- client_section start -->
    <div class="client_section">
        <div class="client_section_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="client_bordered_wrapper">
                    <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                        <a href="#">
                            <img src="images/home/home-2/logo-client1.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                        <a href="#" class="hide_sm_border">
                            <img src="images/home/home-2/logo-client2.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                        <a href="#">
                            <img src="images/home/home-2/logo-client3.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                        <a href="#" class="last">
                            <img src="images/home/home-2/logo-client4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                    <a href="#">
                        <img src="images/home/home-2/logo-client5.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                    <a href="#" class="hide_sm_border">
                        <img src="images/home/home-2/logo-client6.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                    <a href="#">
                        <img src="images/home/home-2/logo-client7.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pd-2">
                    <a href="#" class="last">
                        <img src="images/home/home-2/logo-client8.png" alt="">
                    </a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- client_section end -->

    <!-- blog_section start -->
    <div class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12 col-lg-offset-2">
                    <div class="section_heading">
                        <h2>Latest Blog Posts</h2>
                        <p>Proin gravida nibh vel velit auctor aliquet.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <article class="blog-post-wrapper clearfix">
                                <div class="post-thumbnail">
                                    <img src="images/home/home-2/blog-1.jpg" class="img-responsive " alt="Image">

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/home/home-2/author-1.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->
                                </div>
                                <!-- /.post-thumbnail -->

                                <div class="blog-content">
                                    <header class="entry-header">
                                        <h4 class="entry-title"><a href="#">Blog single image post</a></h4>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="author">By <a href="#">Admin</a></span>
                                                </li>
                                                <li><span class="posted-date"><a href="#">12 Nov, 2018-19</a></span>
                                                </li>
                                                <li><span class="posted-in">In <a href="#">Web Design</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.entry-meta -->
                                    </header>
                                    <!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                        <a class="readmore_btn" href="#"> More</a>
                                    </div>
                                    <!-- /.entry-content -->

                                </div>
                                <!-- /.blog-content -->

                                <div class="entry-footer clearfix">
                                    <ul class="entry-meta">
                                        <li><span class="post-comments-number"><a href="#"><i class="fa fa-comment"></i> 25</a></span>
                                        </li>
                                        <li><span class="like"><a href="#"><i class="fa fa-heart"></i> 480</a></span>
                                        </li>
                                        <li><span class="share"><a href="#"><i class="fa fa-share"></i> Share</a></span>
                                        </li>
                                    </ul>

                                </div>
                                <!-- /.entry-footer -->
                            </article>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <article class="blog-post-wrapper clearfix">
                                <div class="post-thumbnail">
                                    <div id="blog_section_slider" class="carousel slide" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">

                                            <div class="item">
                                                <img src="images/home/home-2/blog-2.jpg" class="img-responsive " alt="Image">
                                            </div>
                                            <div class="item active">
                                                <img src="images/home/home-2/blog-3.jpg" class="img-responsive " alt="Image">
                                            </div>
                                            <div class="item">
                                                <img src="images/home/home-2/blog-4.jpg" class="img-responsive " alt="Image">
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#blog_section_slider" role="button" data-slide="prev">
                                            <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#blog_section_slider" role="button" data-slide="next">
                                            <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- /#blog_section_slider -->

                                    <div class="author-thumb">
                                        <a href="#"><img src="images/home/home-2/author-2.jpg" class="img-responsive " alt="Image">
                                        </a>
                                    </div>
                                    <!-- /.author-thumb -->
                                </div>
                                <!-- /.post-thumbnail -->

                                <div class="blog-content">
                                    <header class="entry-header">
                                        <h4 class="entry-title"><a href="#">Blog Image Gallery Post</a></h4>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="author">By <a href="#">Admin</a></span>
                                                </li>
                                                <li><span class="posted-date"><a href="#">12 Nov, 2018-19</a></span>
                                                </li>
                                                <li><span class="posted-in">In <a href="#">Web Design</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.entry-meta -->
                                    </header>
                                    <!-- /.entry-header -->

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                        <a class="readmore_btn" href="#"> More</a>
                                    </div>
                                    <!-- /.entry-content -->

                                </div>
                                <!-- /.blog-content -->

                                <div class="entry-footer clearfix">
                                    <ul class="entry-meta">
                                        <li><span class="post-comments-number"><a href="#"><i class="fa fa-comment"></i> 25</a></span>
                                        </li>
                                        <li><span class="like"><a href="#"><i class="fa fa-heart"></i> 480</a></span>
                                        </li>
                                        <li><span class="share"><a href="#"><i class="fa fa-share"></i> Share</a></span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.entry-footer -->
                            </article>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- blog_section end -->

    <!-- newsletter_section start -->
    <div class="newsletter_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-xs-12 col-sm-12">
                    <!-- newsletter_content start-->
                    <div class="newsletter_content">
                        <div class="newsletter_img">
                            <img src="images/home/home-2/mail.png" alt="mail">
                        </div>
                        <div class="newsletter_heading">
                            <h2>Sign up for Newsletter</h2>
                        </div>
                    </div>
                    <!-- newsletter_content end-->
                </div>
                <div class="col-lg-5 col-md-4 col-xs-12 col-sm-12">
                    <div class="newsletter_form">
                        <div class="formsix-e">
                            <div class="form-group i-email">
                                <label class="sr-only">Email Address</label>
                                <input type="email" placeholder="Email Address *"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
                    <div class="newsletter_button">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter_section end -->

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
                                        <br>Victoria 8007 Australia.</p>
                                </li>
                                <li><i class="fa fa-phone"></i>
                                    <p>+1 854 584 5475
                                        <br>+1 547 547 5487</p>
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
    </script>
    <!-- slider custom js End -->

</body>

</html>