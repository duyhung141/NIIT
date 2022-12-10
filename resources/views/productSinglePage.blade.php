@extends('layout')
@section('content')
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
                                    <h5>$ 156</h5>
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
                                    <h5>$ 156</h5>
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
                                    <h5>$ 156</h5>
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
                                    <h5>$ 156</h5>
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
<!-- copyright_wrapper end -->

@endsection

