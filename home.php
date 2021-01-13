<?php 
include 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Page 1</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>

<body>
    <!-- Header -->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid pr-5 pl-5">
                    <a class="navbar-brand logo_h pr-3" href="home.php">
                        <img src="img/logo2.png" alt="logo" style="width: 150px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div>
                        <ul class="nav">
                            <?php if(isset($_SESSION['user'])) {?>
                                <li class="nav-item">
                                    <a type="button" class="btn" href="rekening.php"
                                        tabindex="-1" aria-disabled="true">Rekening</a>
                                </li>
                                <li class="nav-item">
                                    <a type="button" class=" btn btn-outline-danger" href="logout.php"
                                        tabindex="-1" aria-disabled="true">Logout</a>
                                </li>
                            <?php }else{ ?>
                                <li class="nav-item">
                                    <a type="button" class=" btn btn-outline-primary" href="login.php"
                                        tabindex="-1" aria-disabled="true">Login</a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Body -->
    <!-- <section class="feature_product_area section_gap mt-4">
        <div class="main_box">
            <div class="container">
                <div class="row py-4">
                    <div class="f_p_img">
                        <img class="hero" src="img/slide.png">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="header6  mbr-fullscreen" id="header6-u" style="background-image: url('img/bank.jpg');">

        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(68, 121, 217);"></div>

        <div class="align-center container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>Lumine Bank</strong></h1>
                                
                    <p class="mbr-text mbr-white mbr-fonts-style display-7">
                        Mau buat rekening dengan mudah?
                    </p>
                    <?php if(isset($_SESSION['user'])) {?>
                        <<a class="btn btn-lg btn-warning display-4" href="rekening.php">Rekening</a>
                    <?php }else{ ?>
                        <a class="btn btn-lg btn-primary display-3" href="login.php">Login</a>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="features12 cid-slWFEmDcEY" id="features13-x">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2">
                                <strong>What is Mobirise?</strong>
                            </h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Use Mobirise website building software to create multiple sites for commercial and non-profit projects.</p>
                            <div class="mbr-section-btn">
                                <a class="btn btn-primary display-4" href="https://mobiri.se">Create your own site</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>No Coding</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">You don't have to code to create your own site. Select one of available themes in the Mobirise sitebuilder.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-update mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Mobile Friendly</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">All sites you create with the Mobirise web builder are mobile-friendly natively. No special actions required.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-user-2 mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Unique Styles</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Select the theme that suits you. Each theme in the Mobirise site builder contains a set of unique blocks.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery3 cid-slWFyIl0dV" id="gallery3-w">
        
        
        <div class="container-fluid">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Jenis Rekening Kita</strong></h4>
                <!-- <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Images with Title and Text</h5> -->
            </div>
            <div class="row mt-4">
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/features1.jpg">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7">
                                <strong>Card Title</strong>
                            </h5>
                            
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                Card Text. You don't have to code to create a site with Mobirise Builder. <a href="#" class="text-primary">Read more..</a></p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/features2.jpg" data-slide-to="1">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7">
                                <strong>Card Title</strong>
                            </h5>
                            
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                Card Text. You don't have to code to create a site with Mobirise Builder. <a href="#" class="text-primary">Read more..</a></p>
                        </div>
                        
                    </div>
                </div><div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/features3.jpg" data-slide-to="2">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7">
                                <strong>Card Title</strong>
                            </h5>
                            
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                Card Text. You don't have to code to create a site with Mobirise Builder. <a href="#" class="text-primary">Read more..</a></p>
                        </div>
                        
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="assets/images/features4.jpg" alt="" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7">
                                <strong>Card Title</strong>
                            </h5>
                            
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                Card Text. You don't have to code to create a site with Mobirise Builder. <a href="#" class="text-primary">Read more..</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="page-footer font-small pt-4 pl-5 pr-5">
        <!-- Footer Links -->
        <div class="container-fluid text-center">
            <!-- Grid row -->
            <div class="row pl-4">
                <!-- Grid column -->
                <div class="col-md-4 mt-md-0">
                    <a class="navbar-brand logo_h pr-3" href="home.php">
                        <img src="img/logo2.png" alt="logo" style="width: 150px">
                    </a>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-4">
                    <!-- Links -->
                    <h5 class="text-uppercase">CUSTOMER CARE</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!" style="color: black">FAQ</a></li>
                        <li><a href="#!" style="color: black">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 mb-md-0 mb-4">
                    <!-- Links -->
                    <h5 class="text-uppercase">ABOUT US</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!" style="color: black">Tentang LumineBank</a></li>
                        <li><a href="#!" style="color: black">Terms & Condition</a></li>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">Copyright ©2020 LumineBank</div>
        <!-- Copyright -->
    </footer>

    <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->
    <script src="js/app.js"></script>
</body>

</html>