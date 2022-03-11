<!doctype html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta name="author" content="John Doe">
        <meta name="description" content="">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo $page_title;?></title>

         <script src="<?php echo $home_theme; ?>/jquery.min.js"></script> 
        <!--<link rel="shortcut icon" type="image/ico" href="images/favicon.html" />-->

        <link rel="stylesheet" href="<?php echo $home_theme; ?>css/bootstrap.min.css">

        <link href="<?php echo $home_theme; ?>font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo $home_theme; ?>css/matrialize.css" rel="stylesheet">

        <link href="<?php echo $home_theme; ?>owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo $home_theme; ?>css/jquery-ui.min.css">

        <link rel="stylesheet" href="<?php echo $home_theme; ?>css/style.css">
        <script>
      var site_url='<?php echo site_url();?>';
     
</script>
    </head>
    <body>

        <header class="header">

            <div class="top_bar background-color-orange">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li>
                                            <i class="fa fa-phone coll" aria-hidden="true"></i>
                                            <div class="contact-no">**** **** ****</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope coll" aria-hidden="true"></i>
                                            <div class="email"><a href="https://google.com" class="__cf_email__">Email Link</a></div>
                                        </li>
                                    </ul>
                                    <div class=" ml-auto ">
                                        <div class="search_button search"><i class="large material-icons search-icone">search</i></div>
                                        <div class="hamburger menu_mm  search_button transparent search display"><i class="large material-icons font-color-white  search-icone  menu_mm ">menu</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_container background-color-orange-light">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="index.html">
                                        <img src="imags/logo.png" class="logo-text" alt="">
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="<?php echo site_url();?>">Home</a></li>
                                        <?php 
                                        if(empty($userid)){ ?>
                                            <li><a href="<?php echo site_url().'login';?>"> Sign In</a></li>
                                       <?php }else {
                                        ?>
                                        <li><a href="<?php echo site_url().'logout';?>"> Sign Out</a></li>
                                       <?php } ?>
                                         
                                    </ul>
                                    <div class=" Post-Jobs">
                                        <a href="<?php echo site_url().'JobPost';?>">Post Job</a>
                                    </div>
                                    <div class="hamburger menu_mm menu-vertical">
                                        <i class="large material-icons font-color-white menu_mm menu-vertical">menu</i>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
                <div class="menu_close_container">
                    <div class="menu_close">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="search">
                    <form action="#" class="header_search_form menu_mm">
                        <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                        <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                            <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <nav class="menu_nav">
                    <ul class="menu_mm">
                        <li class="dropdown menu_mm">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Home Page</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown menu_mm">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Job
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Job List</a></li>
                                <li><a href="#">Job Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu_mm"><a href="#">Blog</a></li>
                        <li class="menu_mm"><a href="#">About</a></li>
                        <li class="menu_mm"><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="intro">
    <div class="carousel-item active">
        <div class="carousel-background"><img src="imags/slider/slider1.jpg" alt=""></div>
        <div class="carousel-container">
            <div class="carousel-content">
                <h2 class="font-color-white">Find Jobs Now more Easy Way</h2>
                <p class="font-color-white">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla, magna duis nostra sodales luctus nulla praesent fermentum a elit mollis purus aenean curabitur eleifend </p>
                <a href="#" data-toggle="modal" data-target="#myModal"><i class=" material-icons play">play_arrow</i></a>
            </div>
        </div>
    </div>
</section>