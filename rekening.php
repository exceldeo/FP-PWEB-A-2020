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
                            <!-- <li class="nav-item">
                                <a type="button" class=" btn btn-outline-primary" href="login.php"
                                    tabindex="-1" aria-disabled="true">Login</a>
                            </li> -->
                            <li class="nav-item">
                                <div class="col-lg-2 pl-2">
                                    <button class="btn dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="rekening.php">Rekening</a>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Body -->
    <section class="feature_product_area section_gap mt-4">
        <div class="main_box">
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card shadow-1">
                                <div class="card-body">
                                    <div class="row text-center" style="color: black">
                                        <div class="col-lg-2">
                                            <h4>Nomor</h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Jenis Rekening</h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Nomor Rekening</h4>
                                        </div>
                                        <div class="col-lg-2">
                                            <h4>Status</h4>
                                        </div>
                                        <div class="col-lg-2">
                                            <h4>Keterangan</h4>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <hr class="pb-2" style="border-color:F2F2F2">
                                    </div>
                                    <div class="row text-center" style="color: black">
                                        <div class="col-lg-2">
                                            <h4>1</h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Platinum</h4>
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>2020 9087 2839</h4>
                                        </div>
                                        <div class="col-lg-2">
                                            <h4>Aktif</h4>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Tutup Rekening?')">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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