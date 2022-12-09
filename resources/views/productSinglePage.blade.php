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
    <title> Product Single  </title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    <!-- font-awesome -->
    <link href="{{asset('css/font-awesome')}}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" /> 
    <link rel="stylesheet" href="{{asset('css/owl.them.default.css')}}" /> 
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Style CSS -->
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
                                            <a href="coming_soon_style2.html">  Coming Soon 02</a>
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
                                            <a href="coming_soon_style2.html">  Coming Soon 02</a>
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

    <!-- page_header start -->
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
                    <h1> product single </h1>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="#"> Home </a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li> Product Single </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_header end -->
	
    <!-- CC ps top product Wrapper Start -->
    <div class="cc_ps_top_product_main_wrapper">
        <div class="container">
            <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="video_img_section_wrapper">
						<div class="video_nav_img hidden-xs">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a class="button secondary url owl_nav" href="#zero"><img src="images/shop/li_img1.jpg" class="img-responsive" alt="nav_img"></a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cc_ps_tabs">
                                <a class="button secondary url owl_nav" href="#one"><img src="images/shop/li_img2.jpg" class="img-responsive" alt="nav_img"></a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cc_ps_tabs">
                                <a class="button secondary url owl_nav" href="#two"><img src="images/shop/li_img3.jpg" class="img-responsive" alt="nav_img"></a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cc_ps_tabs">
                                <a class="button secondary url owl_nav" href="#three"><img src="images/shop/li_img4.jpg" class="img-responsive" alt="nav_img"></a>
                            </div>
						</div>
                        <div class="cc_ps_top_slider_section">
                            <div class="owl-carousel owl-theme">
                                <div class="item" data-hash="zero">

                                    <img class="small img-responsive" src="images/shop/li_img1.jpg" alt="small_img" />

                                </div>
                                <div class="item" data-hash="one">

                                    <img class="small img-responsive" src="images/shop/li_img2.jpg" alt="small_img" />

                                </div>
                                <div class="item" data-hash="two">

                                    <img class="small img-responsive" src="images/shop/li_img3.jpg" alt="small_img" />
                                </div>
                                <div class="item" data-hash="three">
                                    <img class="small img-responsive" src="images/shop/li_img4.jpg" alt="small_img" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_nav_img visible-xs">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#zero"><img src="images/shop/li_img1.jpg" class="img-responsive" alt="nav_img"></a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#one"><img src="images/shop/li_img2.jpg" class="img-responsive" alt="nav_img"></a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#two"><img src="images/shop/li_img3.jpg" class="img-responsive" alt="nav_img"></a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#three"><img src="images/shop/li_img4.jpg" class="img-responsive" alt="nav_img"></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_prod_right_section">
                        <h1>WESTERN WEAR RED</h1>
                        <div class="btc_shop_sin_pro_icon_wrapper">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <p>10 Reviews <span><a href="#">Add Your Review</a></span></p>
                            <h5>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. aks Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</h5>
                            <ul>
                                <li><i class="fa fa-long-arrow-right"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</li>
                                <li><i class="fa fa-long-arrow-right"></i> Lorem quis bibendum auctor, nisi elit consequat ipsum.</li>
                            </ul>
                        </div>
                        <div class="btc_shop_prod_quanty_bar">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                    <div class="cc_ps_quantily_info">
                                        <div class="select_number">
                                            <button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>
                                            </button>
                                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                            <button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="product_id" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                    <div class="cc_ps_color_selectobx">
                                        <select>
                                            <option> Size List</option>
                                            <option> 32</option>
                                            <option> 33</option>
                                            <option> 34</option>
                                            <option> 35</option>
                                        </select><i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                    <div class="cc_ps_color_selectobx">
                                        <select>
                                            <option> Color</option>
                                            <option> Red</option>
                                            <option> Orange</option>
                                            <option> Blue</option>
                                            <option> Green</option>
                                        </select><i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btc_shop_product_price_wrapper">
                            <ul>
                                <li>$199.00</li>
                                <li><del>$250.00</del></li>
                                <li>(70% OFF)</li>
                            </ul>
                        </div>
                        <div class="cc_ps_cart_btn_wrapper">
                            <div class="cc_ps_cart_btn">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-heart"></i> wishlist</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CC ps top product Wrapper End -->
	
	<!-- accordion section start -->
	<div class="accordion_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 accordion_one">
                    <div class="panel-group" id="accordionFourLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftone" aria-expanded="false">
                                description about product
                              </a>
                            </h4>
                            </div>
                            <div id="collapseFiveLeftone" class="panel-collapse collapse in" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    <div class="img-accordion">
                                        <img src="images/shop/shop_acc.jpg" alt="">
                                    </div>
                                    <div class="text-accordion">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit risus nisl, nec facilisis ante iaculis fringilla. Integer mattis risusadipiscing elit. Phasellus hendrerit risus nisl, nec facilisis ante iaculis fri ngilla. Integer mattis risus vel dapibus rhoncus. Duis ut nulla et metus vehicula facilisis non eu quam. vel dapibus rhoncus. Duis ut nulla et metus vehicula facilisis non eu quam.
                                        </p>
                                        <ul class="accordian_list_item">
                                            <li><i class="fa fa-long-arrow-right"></i> Lorem quis bibendum auctor, nisi elit consequat ipsum.</li>
                                            <li><i class="fa fa-long-arrow-right"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</li>
                                            <li><i class="fa fa-long-arrow-right"></i> Lorem quis bibendum auctor, nisi elit consequat ipsum.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>
                        <!-- /.panel-default -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftThree" aria-expanded="false">
                               product details
                              </a>
                            </h4>
                            </div>
                            <div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">

                                    <div class="text-accordion">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit risus nisl, nec facilisis ante iaculis fringilla. Integer mattis risus vel dapibus rhoncus. Duis ut nulla et metus vehicula facilisis non eu quam facilisis ante iaculis fringilla. Integer mattis risus vel dapibus rhoncus. Duis ut nulla.
                                        </p>
                                        <ul class="accordian_list_item">
                                            <li><i class="fa fa-long-arrow-right"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</li>
                                            <li><i class="fa fa-long-arrow-right"></i> Lorem quis bibendum auctor, nisi elit consequat ipsum.</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>

                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftfour" aria-expanded="false">
                               product tags 
                              </a>
                            </h4>
                            </div>
                            <div id="collapseFiveLeftfour" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">

                                    <div class="text-accordion">
                                        <div class="tag_cloud_wrapper">
                                            <ul>
                                                <li>
                                                    <a href="#">Business</a>
                                                </li>
                                                <li>
                                                    <a href="#">Corporate</a>
                                                </li>
                                                <li>
                                                    <a href="#">Services</a>
                                                </li>
                                                <li>
                                                    <a href="#">Customer</a>
                                                </li>
                                                <li>
                                                    <a href="#">Money</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="#">Psd</a>
                                                </li>
                                                <li>
                                                    <a href="#">Joomla</a>
                                                </li>
                                                <li>
                                                    <a href="#">Skills</a>
                                                </li>
                                                <li>
                                                    <a href="#">Partners</a>
                                                </li>
                                                <li>
                                                    <a href="#">Wordpress</a>
                                                </li>
                                                <li>
                                                    <a href="#">Html</a>
                                                </li>
                                                <li>
                                                    <a href="#">Psd</a>
                                                </li>
                                                <li>
                                                    <a href="#">Joomla</a>
                                                </li>
                                                <li>
                                                    <a href="#">Skills</a>
                                                </li>

                                                <li>
                                                    <a href="#">Joomla</a>
                                                </li>
                                                <li>
                                                    <a href="#">Skills</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                             <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftfive" aria-expanded="false">
                               coustmer rivews (03)
                              </a>
                            </h4>
                            </div>
                            <div id="collapseFiveLeftfive" class="panel-collapse collapse in" aria-expanded="false" role="tablist">

                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="btc_shop_single_prod_right_section shop_product_single_head">
                                            <h1>add your comment</h1>
                                            <div class="btc_shop_sin_pro_icon_wrapper">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="text-accordion shop_pdt_form">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="contect2_form1">
                                                        <input type="text" placeholder=" Your Name"><i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="contect2_form1">
                                                        <input type="email" placeholder="Your Email"><i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="contect2_form4">
                                                        <textarea rows="4" placeholder=" Your comment"></textarea><i class="fa fa-question-circle"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="pdt_single_page_btn">
                                                        <div class="shop_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#">submit</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                        <div class="btc_shop_single_prod_right_section shop_product_single_head">
                                            <h1>product rating</h1>
                                            <h4>4.5 <span>overall rating</span></h4>
                                        </div>
                                        <div class="text-accordion shop_pdt_form">
                                            <div class="progress_section">
                                                <div class="progress-wrapper">

                                                    <div class="progress-item">
                                                        <span class="progress-title">5 star</span>
                                                        <span class="progress-percent pull-right"> 50%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                                            </div>

                                                        </div>
                                                        <!-- /.progress -->

                                                    </div>
                                                    <!-- /.progress-item -->

                                                    <div class="progress-item">
                                                        <span class="progress-title">4 star</span>
                                                        <span class="progress-percent pull-right"> 92%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success progress-bar-dealy" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">

                                                            </div>

                                                        </div>
                                                        <!-- /.progress -->

                                                    </div>
                                                    <!-- /.progress-item -->

                                                    <div class="progress-item">
                                                        <span class="progress-title">3 star </span>
                                                        <span class="progress-percent pull-right"> 55%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger progress-bar-dealy" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">

                                                            </div>

                                                        </div>
                                                        <!-- /.progress -->

                                                    </div>
                                                    <!-- /.progress-item -->

                                                    <div class="progress-item">
                                                        <span class="progress-title">2 star</span>
                                                        <span class="progress-percent pull-right"> 45%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">

                                                            </div>

                                                        </div>
                                                        <!-- /.progress -->

                                                    </div>
                                                    <!-- /.progress-item -->
                                                    <div class="progress-item">
                                                        <span class="progress-title">1 star</span>
                                                        <span class="progress-percent pull-right"> 25%</span>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                            </div>

                                                        </div>
                                                        <!-- /.progress -->

                                                    </div>
                                                </div>
                                                <!-- /.progress-wrapper -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="comment_box_blog">

                                            <div class="sp_comment1_wrapper cmnt_wraper_2">
                                                <div class="sp_comment1_img">
                                                    <img src="images/shop/cmnt_3.png" alt="comment_img" class="img-responsive" />
                                                </div>
                                                <div class="sp_comment1_cont">
                                                    <h3>Jhon smith</h3>
                                                    <p><span>june 1, 2018 - <a href="#">reply</a></span>
                                                    </p>
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>
                                            <div class="sp_comment1_wrapper cmnt_wraper_2">
                                                <div class="sp_comment1_img">
                                                    <img src="images/shop/cmnt_2.png" alt="comment_img" class="img-responsive" />
                                                </div>
                                                <div class="sp_comment1_cont">
                                                    <h3>sandy Doe</h3>
                                                    <p><span>june 1, 2018 - <a href="#">reply</a></span>
                                                    </p>
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>
                                            <div class="sp_comment1_wrapper cmnt_wraper_2">
                                                <div class="sp_comment1_img">
                                                    <img src="images/shop/cmt_1.png" alt="comment_img" class="img-responsive" />
                                                </div>
                                                <div class="sp_comment1_cont">
                                                    <h3>sent france</h3>
                                                    <p><span>june 1, 2018 - <a href="#">reply</a></span>
                                                    </p>
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end of panel-body -->
                            </div>
                        </div>

                        <!--end of /.panel-group-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- accordion section end -->
    <!--related products Wrapper Start -->
    <div class="cc_letest_item_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_prod_right_section shop_product_single_head related_pdt_shop_head">
                        <h1>related products </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cc_li_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="btc_shop_indx_cont_box_wrapper btc_shop_indx_cont_box_wrapper_2">
                                    <div class="btc_shop_indx_img_wrapper">
                                        <ul>
                                            <li class="btc_shop_price btc_stock">out of stock</li>
                                        </ul>
                                        <img src="images/shop/li_img5.jpg" alt="shop_img" class="img-responsive" />
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btc_shop_indx_img_cont_wrapper">

                                        <h1><a href="#">WOMEN WESTERN DRESS</a></h1>
                                        <h5>$  156</h5>
                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="btc_shop_indx_cont_box_wrapper btc_shop_indx_cont_box_wrapper_2">
                                    <div class="btc_shop_indx_img_wrapper">

                                        <img src="images/shop/li_img6.jpg" alt="shop_img" class="img-responsive" />
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btc_shop_indx_img_cont_wrapper">

                                        <h1><a href="#">SUNSHINE IN MY SOUL</a></h1>
                                        <h5>$  156</h5>
                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="btc_shop_indx_cont_box_wrapper btc_shop_indx_cont_box_wrapper_2">
                                    <div class="btc_shop_indx_img_wrapper">

                                        <img src="images/shop/li_img7.jpg" alt="shop_img" class="img-responsive" />
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btc_shop_indx_img_cont_wrapper">

                                        <h1><a href="#">SLIM WOMEN TOP</a></h1>
                                        <h5>$  156</h5>
                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="btc_shop_indx_cont_box_wrapper btc_shop_indx_cont_box_wrapper_2">
                                    <div class="btc_shop_indx_img_wrapper">
                                        <ul>
                                            <li class="btc_shop_price">new</li>
                                        </ul>
                                        <img src="images/shop/li_img8.jpg" alt="shop_img" class="img-responsive" />
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btc_shop_indx_img_cont_wrapper">

                                        <h1><a href="#">AMAZING SUMMER</a></h1>
                                        <h5>$  156</h5>
                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- related products  Wrapper End -->
  
	
	<!-- footer start -->
	
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="widget_1">
                        <div class="widget1_image_wrapper">
                            <img src="images/logo_light.png" class="img-responsive" alt="footer_logo_img" />
                        </div>
                        <div class="widget1_text_wrapper">
                            <div class="text_wrapper_first">
                                <p>Donec id elit non mi porta gravida aeget metus.Donec id elit non</p>
                            </div>
                            <div class="text_wrapper_second">
                                <p>Vestibulum id ligula porta felis euism od semper. Nulla vitae elit libero</p>
                            </div>
                            <div class="widget1_link">
                                <a href="#"> Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <ul class="widget1_social_icons">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                            </li>
                            <li> <a href="#"><i class="fa fa-vimeo-square" aria-hidden="true"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="widget_2">
                        <h4>Usefull Links</h4>
                        <ul class="widget2_list">
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
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="widget_3">
                        <h4>Gallery</h4>
                        <ul class="widget3_images">
                            <li>
                                <div class="widget3_wrapper">
                                    <div class="widget3_img_wrapper">
                                        <img src="images/footer-images/img-1.png" class="img-responsive" alt="widget3_img" />
                                        <div class="widget3_img_overlay">
                                            <div class="widget3_icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget3_wrapper">
                                    <div class="widget3_img_wrapper">
                                        <img src="images/footer-images/img-2.png" class="img-responsive" alt="widget3_img" />
                                        <div class="widget3_img_overlay">
                                            <div class="widget3_icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget3_wrapper">
                                    <div class="widget3_img_wrapper">
                                        <img src="images/footer-images/img-3.png" class="img-responsive" alt="widget3_img" />
                                        <div class="widget3_img_overlay">
                                            <div class="widget3_icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget3_wrapper">
                                    <div class="widget3_img_wrapper">
                                        <img src="images/footer-images/img-4.png" class="img-responsive" alt="widget3_img" />
                                        <div class="widget3_img_overlay">
                                            <div class="widget3_icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget3_wrapper">
                                    <div class="widget3_img_wrapper">
                                        <img src="images/footer-images/img-5.png" class="img-responsive" alt="widget3_img" />
                                        <div class="widget3_img_overlay">
                                            <div class="widget3_icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget3_wrapper">
                                    <div class="widget3_img_wrapper">
                                        <img src="images/footer-images/img-6.png" class="img-responsive" alt="widget3_img" />
                                        <div class="widget3_img_overlay">
                                            <div class="widget3_icon">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget3_link">
                        <a href="#">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="widget_4">
                        <h4>Newsletter</h4>
                        <div class="widget4_text_wrapper">
                            <div class="widget4_content_first">
                                <p>Please write your email and get our amazing updates, news and support. Proin gravida nibh vel velit auctor aliquet.</p>
                            </div>
                            <div class="widget4_content_second">
                                <p>Get latest updates and offers.</p>
                            </div>
                            <input type="text" placeholder="Email Address..."><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
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
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">
                    <div class="copyright_content">
                        <p>© Copyright 2018-19 by <a href="http://webstrot.com/"> Webstrot </a>- all right reserved</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                    <div class="copyright_icon_wrapper">
                        <ul class="copyright_icons">
                            <li><a href="#"><i class="fa fa-cc"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-stripe"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!-- copyright_wrapper end -->
	
	<!-- Bootstrap js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/megnify.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
	<script src="js/cloud-zoom.1.0.3.js"></script>
    <!-- Custom js -->
    <script src="js/shop.js"></script>
    <script src="js/custom.js"></script>
    <script>
	
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
</body>

</html>