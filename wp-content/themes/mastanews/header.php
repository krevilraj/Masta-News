<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from zcube.in/newsworld/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 11:22:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsword - Responsive Blog Template</title>
    <!-- Standard -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri("/"); ?>/assets/img/ficon.png">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri("/"); ?>/assets/css/bootstrap.min.css"
          type="text/css">
    <!-- Dropdownhover CSS -->
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri("/"); ?>/assets/css/bootstrap-dropdownhover.min.css"
          type="text/css">
    <!-- latest fonts awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri("/"); ?>/assets/font/css/font-awesome.min.css"
          type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri("/"); ?>/assets/css/animate.min.css"
          type="text/css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri("/"); ?>/assets/css/style.css" type="text/css">
    <!-- Owl Carousel Assets -->
    <link href="<?php echo get_template_directory_uri("/"); ?>/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri("/"); ?>/assets/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri("/");?>/assets/js/jquery-1.x-git.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--  Preloader  -->
<div id="preloader">
    <div id="loading">
    </div>
</div>
<!--  top header  -->
<div class="container">
    <div class="col-md-12">

        <div class="top-header">
            <a class="logo" href="#">MASTA<span>NEWS</span></a>


            <?php $myposts = get_posts(array(
                    'showposts' => -1,
                    'post_type' => 'advertisement',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'advertise',
                            'field' => 'slug',
                            'terms' => array('banner-top'))
                    ))
            );

            foreach ($myposts as $mypost) {
                $post_id = $mypost->ID;
            }
            $top_banner_ad_id = get_post_meta($post_id,'image',true);
            $top_banner_ad = wp_get_attachment_image_src($top_banner_ad_id,'full',true);
            $external_link = get_post_meta($post_id,'external_link',true);

            ?>


            <div class="top-add-banner">
                <a href="<?php echo $external_link;?>" target="_blank"><img src="<?php echo $top_banner_ad[0]?>" width="<?php echo $top_banner_ad[1]?>" height="<?php echo $top_banner_ad[2];?>"></a>
            </div>



        </div>
    </div>
</div>
<!--  /top header  -->
<!--  nav  -->
<nav class="navbar navbar-inverse navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
             data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">

            <?php wp_nav_menu(array('menu' => 'extra-menu', 'menu_class' => 'nav navbar-nav','container' => '')); ?>

            <div class="searchicon">
                <a class="fac" data-toggle="modal" data-target=".bs-example-modal-lg"><i
                        class="fa fa-search search-icon"></i></a>
                <!-- search popup -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="search-outer">
                                <div class="col-md-11"><input type="text" placeholder="Search for products..."/></div>
                                <div class="col-md-1 text-right"><a href="#"><img
                                            src="<?php echo get_template_directory_uri("/"); ?>/assets/img/search-icon.png"
                                            alt="search-icon"/></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- search popup -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </div>
</nav>