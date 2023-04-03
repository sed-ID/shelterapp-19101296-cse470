<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">

    <title>Flipmart premium HTML5 & CSS3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('details/assets/css/bootstrap.min.css')}}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{asset('details/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('details/assets/css/blue.css')}}">
    <link rel="stylesheet" href="{{asset('details/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('details/assets/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('details/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('details/assets/css/rateit.css')}}">
    <link rel="stylesheet" href="{{asset('details/assets/css/bootstrap-select.min.css')}}">




    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{asset('details/assets/css/font-awesome.css')}}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend_landing/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_landing/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_landing/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_landing/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_landing/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_landing/responsive.css')}}">


</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('frontend.body.header')
<!-- ============================================== HEADER : END ============================================== -->

@php

@endphp
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="blog-page">
                <div class="col-md-12">
                    <div class="blog-post wow fadeInUp">
                        <img class="img-responsive" style="height: 600px; width: 100%" src="{{asset($activity->image)}}" alt="">
                        <h1>{{$activity->title}}</h1>
                        <span class="author">{{$activity->user->name}}</span>
                        <span class="review">7 Comments</span>
                        <span class="date-time">{{$activity->created_at->format('l jS \\of F Y h:i:s A') }}</span>
                        <p>{{$activity->description}}</p>


                    </div>
{{--                    <div class="blog-post-author-details wow fadeInUp">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-2">--}}
{{--                                <img src="assets/images/testimonials/member3.png" alt="Responsive image" class="img-circle img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-10">--}}
{{--                                <h4>John Doe</h4>--}}
{{--                                <div class="btn-group author-social-network pull-right">--}}
{{--                                    <span>Follow me on</span>--}}
{{--                                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                                        <i class="twitter-icon fa fa-twitter"></i>--}}
{{--                                        <span class="caret"></span>--}}
{{--                                    </button>--}}
{{--                                    <ul class="dropdown-menu" role="menu">--}}
{{--                                        <li><a href="#"><i class="icon fa fa-facebook"></i>Facebook</a></li>--}}
{{--                                        <li><a href="#"><i class="icon fa fa-linkedin"></i>Linkedin</a></li>--}}
{{--                                        <li><a href=""><i class="icon fa fa-pinterest"></i>Pinterst</a></li>--}}
{{--                                        <li><a href=""><i class="icon fa fa-rss"></i>RSS</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <span class="author-job">Web Designer</span>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-review wow fadeInUp">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <h3 class="title-review-comments">16 comments</h3>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-sm-2">--}}
{{--                                <img src="assets/images/testimonials/member1.png" alt="Responsive image" class="img-rounded img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">--}}
{{--                                <div class="blog-comments inner-bottom-xs">--}}
{{--                                    <h4>Jone doe</h4>--}}
{{--                                    <span class="review-action pull-right">--}}
{{--					03 Day ago &sol;--}}
{{--					<a href=""> Repost</a> &sol;--}}
{{--					<a href=""> Reply</a>--}}
{{--				</span>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                                </div>--}}
{{--                                <div class="blog-comments-responce outer-top-xs ">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-2 col-sm-2">--}}
{{--                                            <img src="assets/images/testimonials/member2.png" alt="Responsive image" class="img-rounded img-responsive">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-10 col-sm-10 outer-bottom-xs">--}}
{{--                                            <div class="blog-sub-comments inner-bottom-xs">--}}
{{--                                                <h4>Sarah Smith</h4>--}}
{{--                                                <span class="review-action pull-right">--}}
{{--								03 Day ago &sol;--}}
{{--								<a href=""> Repost</a> &sol;--}}
{{--								<a href=""> Reply</a>--}}
{{--							</span>--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-2 col-sm-2">--}}
{{--                                            <img src="assets/images/testimonials/member3.png" alt="Responsive image" class="img-rounded img-responsive">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-10 col-sm-10">--}}
{{--                                            <div class=" inner-bottom-xs">--}}
{{--                                                <h4>Stephen</h4>--}}
{{--                                                <span class="review-action pull-right">--}}
{{--								03 Day ago &sol;--}}
{{--								<a href=""> Repost</a> &sol;--}}
{{--								<a href=""> Reply</a>--}}
{{--							</span>--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-sm-2">--}}
{{--                                <img src="assets/images/testimonials/member4.png" alt="Responsive image" class="img-rounded img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-10 col-sm-10">--}}
{{--                                <div class="blog-comments inner-bottom-xs outer-bottom-xs">--}}
{{--                                    <h4>Saraha Smith</h4>--}}
{{--                                    <span class="review-action pull-right">--}}
{{--					03 Day ago &sol;--}}
{{--					<a href=""> Repost</a> &sol;--}}
{{--					<a href=""> Reply</a>--}}
{{--				</span>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2 col-sm-2">--}}
{{--                                <img src="assets/images/testimonials/member1.png" alt="Responsive image" class="img-rounded img-responsive">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-10 col-sm-10">--}}
{{--                                <div class="blog-comment inner-bottom-xs">--}}
{{--                                    <h4>Mark Doe</h4>--}}
{{--                                    <span class="review-action pull-right">--}}
{{--					03 Day ago &sol;--}}
{{--					<a href=""> Repost</a> &sol;--}}
{{--					<a href=""> Reply</a>--}}
{{--				</span>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="post-load-more col-md-12"><a class="btn btn-upper btn-primary" href="#">Load more</a></div>--}}
{{--                        </div>--}}
{{--                    </div>					--}}
                    <div class="blog-write-comment outer-bottom-xs outer-top-xs">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Leave A Comment</h4>
                            </div>
                            <div class="col-md-4">
                                <form class="register-form" role="form">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
                                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="register-form" role="form">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form class="register-form" role="form">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
                                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <form class="register-form" role="form">
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
                                        <textarea class="form-control unicase-form-control" id="exampleInputComments" ></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 outer-bottom-small m-t-20">
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-3 sidebar">--}}



{{--                    <div class="sidebar-module-container">--}}
{{--                        <div class="search-area outer-bottom-small">--}}
{{--                            <form>--}}
{{--                                <div class="control-group">--}}
{{--                                    <input placeholder="Type to search" class="search-field">--}}
{{--                                    <a href="#" class="search-button"></a>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                        <div class="home-banner outer-top-n outer-bottom-xs">--}}
{{--                            <img src="assets/images/banners/LHS-banner.jpg" alt="Image">--}}
{{--                        </div>--}}
{{--                        <!-- ==============================================CATEGORY============================================== -->--}}
{{--                        <div class="sidebar-widget outer-bottom-xs wow fadeInUp">--}}
{{--                            <h3 class="section-title">Category</h3>--}}
{{--                            <div class="sidebar-widget-body m-t-10">--}}
{{--                                <div class="accordion">--}}
{{--                                    <div class="accordion-group">--}}
{{--                                        <div class="accordion-heading">--}}
{{--                                            <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                                                Camera--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.accordion-heading -->--}}
{{--                                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">gaming</a></li>--}}
{{--                                                    <li><a href="#">office</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">for women</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- /.accordion-inner -->--}}
{{--                                        </div><!-- /.accordion-body -->--}}
{{--                                    </div><!-- /.accordion-group -->--}}

{{--                                    <div class="accordion-group">--}}
{{--                                        <div class="accordion-heading">--}}
{{--                                            <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                                                Desktops--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.accordion-heading -->--}}
{{--                                        <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">gaming</a></li>--}}
{{--                                                    <li><a href="#">office</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">for women</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- /.accordion-inner -->--}}
{{--                                        </div><!-- /.accordion-body -->--}}
{{--                                    </div><!-- /.accordion-group -->--}}

{{--                                    <div class="accordion-group">--}}
{{--                                        <div class="accordion-heading">--}}
{{--                                            <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                                                Pants--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.accordion-heading -->--}}
{{--                                        <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">gaming</a></li>--}}
{{--                                                    <li><a href="#">office</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">for women</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- /.accordion-inner -->--}}
{{--                                        </div><!-- /.accordion-body -->--}}
{{--                                    </div><!-- /.accordion-group -->--}}

{{--                                    <div class="accordion-group">--}}
{{--                                        <div class="accordion-heading">--}}
{{--                                            <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                                                Bags--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.accordion-heading -->--}}
{{--                                        <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">gaming</a></li>--}}
{{--                                                    <li><a href="#">office</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">for women</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- /.accordion-inner -->--}}
{{--                                        </div><!-- /.accordion-body -->--}}
{{--                                    </div><!-- /.accordion-group -->--}}

{{--                                    <div class="accordion-group">--}}
{{--                                        <div class="accordion-heading">--}}
{{--                                            <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                                                Hats--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.accordion-heading -->--}}
{{--                                        <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">gaming</a></li>--}}
{{--                                                    <li><a href="#">office</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">for women</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- /.accordion-inner -->--}}
{{--                                        </div><!-- /.accordion-body -->--}}
{{--                                    </div><!-- /.accordion-group -->--}}

{{--                                    <div class="accordion-group">--}}
{{--                                        <div class="accordion-heading">--}}
{{--                                            <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">--}}
{{--                                                Accessories--}}
{{--                                            </a>--}}
{{--                                        </div><!-- /.accordion-heading -->--}}
{{--                                        <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">gaming</a></li>--}}
{{--                                                    <li><a href="#">office</a></li>--}}
{{--                                                    <li><a href="#">kids</a></li>--}}
{{--                                                    <li><a href="#">for women</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- /.accordion-inner -->--}}
{{--                                        </div><!-- /.accordion-body -->--}}
{{--                                    </div><!-- /.accordion-group -->--}}

{{--                                </div><!-- /.accordion -->--}}
{{--                            </div><!-- /.sidebar-widget-body -->--}}
{{--                        </div><!-- /.sidebar-widget -->--}}
{{--                        <!-- ============================================== CATEGORY : END ============================================== -->						<div class="sidebar-widget outer-bottom-xs wow fadeInUp">--}}
{{--                            <h3 class="section-title">tab widget</h3>--}}
{{--                            <ul class="nav nav-tabs">--}}
{{--                                <li class="active"><a href="#popular" data-toggle="tab">popular post</a></li>--}}
{{--                                <li><a href="#recent" data-toggle="tab">recent post</a></li>--}}
{{--                            </ul>--}}
{{--                            <div class="tab-content" style="padding-left:0">--}}
{{--                                <div class="tab-pane active m-t-20" id="popular">--}}
{{--                                    <div class="blog-post inner-bottom-30 " >--}}
{{--                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_01.jpg" alt="">--}}
{{--                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>--}}
{{--                                        <span class="review">6 Comments</span>--}}
{{--                                        <span class="date-time">12/06/16</span>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}

{{--                                    </div>--}}
{{--                                    <div class="blog-post" >--}}
{{--                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_02.jpg" alt="">--}}
{{--                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>--}}
{{--                                        <span class="review">6 Comments</span>--}}
{{--                                        <span class="date-time">23/06/16</span>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="tab-pane m-t-20" id="recent">--}}
{{--                                    <div class="blog-post inner-bottom-30" >--}}
{{--                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_03.jpg" alt="">--}}
{{--                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>--}}
{{--                                        <span class="review">6 Comments</span>--}}
{{--                                        <span class="date-time">5/06/16</span>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}

{{--                                    </div>--}}
{{--                                    <div class="blog-post">--}}
{{--                                        <img class="img-responsive" src="assets/images/blog-post/blog_big_01.jpg" alt="">--}}
{{--                                        <h4><a href="blog-details.html">Simple Blog Post</a></h4>--}}
{{--                                        <span class="review">6 Comments</span>--}}
{{--                                        <span class="date-time">10/07/16</span>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- ============================================== PRODUCT TAGS ============================================== -->--}}
{{--                        <div class="sidebar-widget product-tag wow fadeInUp">--}}
{{--                            <h3 class="section-title">Product tags</h3>--}}
{{--                            <div class="sidebar-widget-body outer-top-xs">--}}
{{--                                <div class="tag-list">--}}
{{--                                    <a class="item" title="Phone" href="category.html">Phone</a>--}}
{{--                                    <a class="item active" title="Vest" href="category.html">Vest</a>--}}
{{--                                    <a class="item" title="Smartphone" href="category.html">Smartphone</a>--}}
{{--                                    <a class="item" title="Furniture" href="category.html">Furniture</a>--}}
{{--                                    <a class="item" title="T-shirt" href="category.html">T-shirt</a>--}}
{{--                                    <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>--}}
{{--                                    <a class="item" title="Sneaker" href="category.html">Sneaker</a>--}}
{{--                                    <a class="item" title="Toys" href="category.html">Toys</a>--}}
{{--                                    <a class="item" title="Rose" href="category.html">Rose</a>--}}
{{--                                </div><!-- /.tag-list -->--}}
{{--                            </div><!-- /.sidebar-widget-body -->--}}
{{--                        </div><!-- /.sidebar-widget -->--}}
{{--                        <!-- ============================================== PRODUCT TAGS : END ============================================== -->					</div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.body.footer')
<!-- ============================================================= FOOTER : END============================================================= -->


<!-- For demo purposes – can be removed on production -->


<!-- For demo purposes – can be removed on production : End -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{asset('details/assets/js/jquery-1.11.1.min.js')}}"></script>

<script src="{{asset('details/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('details/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('details/assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('details/assets/js/echo.min.js')}}"></script>
<script src="{{asset('details/assets/js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{asset('details/assets/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('details/assets/js/jquery.rateit.min.js')}}"></script>
<script type="{{asset('details/text/javascript" src="assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('details/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('details/assets/js/wow.min.js')}}"></script>
<script src="{{asset('details/assets/js/scripts.js')}}"></script>
<script src="{{asset('frontend_landing/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('frontend_landing/js/animationCounter.js')}}"></script>
<script src="{{asset('frontend_landing/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend_landing/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend_landing/js/active.js')}}"></script>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>



</body>
</html>
