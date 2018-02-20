<?php
  //connect to the db
include "db_connect.php";
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>NPTEL Local Chapter | Jalapiguri Government Engineering College</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Richik Bhattacharjee">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="education, nptel, JGEC, bootstrap responsive, html5, css3, courses, gate preparation">
        <!-- favicon -->
        <link rel="shortcut icon" href="image/LOGO.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- start header -->
        <header class="header-with-topbar">
        <!-- topbar -->
            <div class="top-header-area bg-black padding-5px-tb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 text-uppercase alt-font xs-no-padding-lr xs-text-center">
                            <a class="text-link-white xs-width-100" title="NPTEL Local Chapter">NPTEL Local Chapter</a>
                            <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-lr hidden-xs position-relative vertical-align-middle top-minus1"></div>
                            <a class="text-link-white xs-width-100" title="JGEC">Jalpaiguri Government Engineering College (Autonomous)</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- end topbar -->

            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent bg-transparent nav-box-width"  style="background-color: blue">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="row">
                        <div class="col-md-2 col-xs-5">
                            <a href="index.php" title="NPTEL Local Chapter" class="logo"><img src="image/nptel_logo.png" data-at2x="images/logo@2x.png" class="logo-dark default" alt="Pofo"></a>
                            <a href="jgec.ac.in" title="JGEC" class="logo"><img src="image/LOGO.png" data-at2x="images/logo@2x.png" class="logo-dark default" alt="NPTEL Local Chapter" ></a>
                        </div>
                        <!-- end logo -->

                        <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                                <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                    <!-- start menu item -->
                                    <li class="dropdown megamenu-fw">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown simple-dropdown"><a href="javascript:void(0);">Courses</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                        <!-- start sub menu -->
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="courses_cse.php">Computer Science</i></a>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="courses_electronics.php">Electronics</i></a>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="courses_electrical.php">Electrical</i></a>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="courses_mechanical.php">Mechanical</i></a>
                                            </li>
                                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="courses_civil.php">Civil</i></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5 width-auto">
                            <div class="header-searchbar">
                                <a href="#search-header" class="header-search-form text-white"><i class="fa fa-search search-button"></i></a>
                                <!-- search input-->
                                <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                                    <div class="search-form position-relative">
                                        <button type="submit" class="fa fa-search close-search search-button"></button>
                                        <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->
 <!-- start feature box section -->
        <section class="bg-extra-dark-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                        <h5 class="alt-font text-white font-weight-600">Mechanical Engineering Courses</h5>
                    </div>
                </div>
                <div class="row equalize xs-equalize-auto">
                <?php

            $query="SELECT * FROM `mechanical`";

            $result=mysqli_query($connection,$query);

            while($row=mysqli_fetch_assoc($result))
                {
                  echo
                    '<!-- start features box -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-30px-bottom wow fadeInUp" style="padding-top: 20px;">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 md-padding-six-all height-100 xs-padding-15px-lr">
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">'.$row['name'].'</div>
                            <p>'.$row['institute'].'<br>'.$row['professor'].'<br>'.$row['videos'].' videos</p>
                            <a href="courses_mechanical_view.php?id='.$row['id'].'" class="link" ><span>VIEW</span></a>
                            <style>
                             
.link{
    display: inline-block;
    overflow: hidden;
    position: relative;
}
.link:before,
.link:after{
    content: "";
    width: 50%;
    height: 5px;
    background: #b374b2;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.7;
    transition: all 0.4s ease-in-out 0.5s;
}
.link:after{
    background: #24265b;
    top: auto;
    left: auto;
    bottom: 0;
    right: 0;
}
.link:hover:before,
.link:hover:after{
    width: 5px;
    height: 100%;
    transition-delay: 0s;
}
.link > span{
    display: block;
    padding: 10px 20px;
    font-size: 20px;
    color: red;
    text-transform: uppercase;
}
@media only screen and (max-width: 767px){
    .link{ margin-bottom: 20px; }
}

                            </style>
                            <div class="feature-box-overlay bg-deep-pink"></div>
                        </div>
                    </div>
                    <!-- end feature box -->';
                }
                    ?>
                    
                </div>
            </div>
        </section>
        <!-- end feature box section -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>