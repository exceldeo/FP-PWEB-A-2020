<?php 
include 'function.php';

$list_rekening = query("SELECT * FROM jenis_rekekening");

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

    <section class="header6  mbr-fullscreen" id="header6-u" style="background-image: url('img/bank1.jpg');">

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
                                <strong>Lumine Bank</strong>
                            </h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Lumine Bank berdiri sebagai perusahaan perbankan pada 3 Mei 1920 di Jakarta.
                                Dalam perjalanannya, Lumine Bank mengalami proses siklus pasang-surut yang semakin menguatkan keberadaannya di industri perbankan Indonesia.
                                Ujian terberat yang dialami Lumine Bank dan seluruh perbankan Indonesia adalah krisis moneter di tahun 1997-1998.
                                Sejumlah Bank berguguran di masa itu, sementara Lumine Bank sanggup bertahan sebagai salah satu Bank yang sehat dan tidak memerlukan rekapitalisasi. 
                                Keberhasilan untuk bertahan adalah karena Lumine Bank adalah Bank yang mengelola usaha berdasarkan prinsip tata kelola perusahaan yang baik yang selalu menganut prinsip Profesionalisme, Transparansi, Tanggung jawab, Akuntabilitas dan Kewajaran.</p>
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
                                <strong>Easy Access</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Dengan lebih dari 200 kantor cabang yang tersebar di seluruh Indonesia, nasabah kami tidak perlu khawatir jika ingin melakukan transaksi.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-growing-chart mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Benefit</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Nikmati banyak promo dan undian bagi seluruh nasabah Lumine Bank sepanjang tahun.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-user-2 mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Best Service</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Kami selalu siap melayani Anda dengan pelayanan terbaik kami.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-lock mobi-mbri"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Secure</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Keamanan dalam bertransaksi nasabah akan selalu kami jaga dan prioritaskan.</h5>
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
                    <strong>Jenis Rekening</strong></h4>
                <!-- <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Images with Title and Text</h5> -->
            </div>
            <div class="row mt-4">
            <?php
            foreach($list_rekening as $row) :
            ?>
                    <div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="img/silvercard.png">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong><?=$row['nama_jenis_rekening']?></strong>
                                </h5>
                                
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    <?=$row['keterangan']?></p>
                            </div>
                            
                        </div>
                    </div>
                    <?php endforeach;?>    
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