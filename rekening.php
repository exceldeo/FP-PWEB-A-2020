<?php 
include 'function.php';

$user_id = $_SESSION["user"]["id"];

$data = query("SELECT * FROM jenis_rekekening jk , rekening r WHERE r.jenis_rekening  = jk.id_jenis_rekening AND r.user_id= '$user_id'");

$list_rekening = query("SELECT * FROM jenis_rekekening");

// var_dump($data,$user_id);die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    
    <title>List Rekening</title>
    <!-- <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->
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
    <section class="feature_product_area section_gap mt-4 ml-4 pl-2">
        <div class="main_box">
            <div class="container">
                <?php if(isset($_SESSION['fail_message'])) {?>
                    <div class="row py-4">
                        <div class="col-12 bg-danger btn px-2" >
                            <h6 class="card-subtitle mb-2 text-muted my-auto text-left "> <span style="color:white"><?=$_SESSION["fail_message"]?></span></h6>
                        </div>
                    </div>
                <?php 
                    unset($_SESSION["fail_message"]);
                } ?>
                <?php if(isset($_SESSION['success_message'])) {?>
                    <div class="row py-4">
                        <div class="col-12 bg-success btn ">
                            <h6 class="card-subtitle mb-2 text-muted my-auto text-left "><span style="color:white"><?=$_SESSION["success_message"]?></span></h6>
                        </div>
                    </div>
                <?php 
                    unset($_SESSION["success_message"]);
                } ?>
                <div class="row py-4">
                    <div class="col-md-12">
                        <button class="btn-sm btn-info mb-3" data-toggle="modal" data-target="#addRekening"> <span style="color:white">Buka Rekening</span></button>
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
                                    <?php
                                    $nomor = 1;
                                    foreach($data as $row) :
                                    // var_dump($row);
                                    ?>
                                        <div class="row text-center mt-4" style="color: black">
                                            <div class="col-2">
                                                <h4><?=$nomor++?></h4>
                                            </div>
                                            <div class="col-3">
                                                <h4><?=$row['nama_jenis_rekening']?></h4>
                                            </div>
                                            <div class="col-3">
                                                <h4><?= substr($row['no_rekening'],0,4).' '.substr($row['no_rekening'],4,4).' '.substr($row['no_rekening'],8,4).' ' ?></h4>
                                            </div>
                                            <div class="col-2">
                                                <?php if($row['status'] == 1):?>
                                                    <div class="h6 text-white">
                                                       <span class="bg-success px-2 py-1">
                                                            Aktif
                                                       </span> 
                                                    </div>
                                                <?php else: ?>
                                                    <div class="h6 text-white">
                                                       <span class="bg-danger px-2 py-1">
                                                       Non-Aktif
                                                       </span> 
                                                    </div>
                                                    <!-- <h4 class="bg-danger">Non-Aktif</h4> -->
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-2">
                                                <a href="hpsRekening.php?id_rekening=<?=$row['id_rekening']?>" class="btn bg-danger text-white" style="margin-top:-5px" onclick="return confirm('Tutup Rekening?')">Close</a>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Tambah Rekening -->
    <div class="modal fade" id="addRekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black">Buka Rekening Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambahRek.php" method="GET" id="formTambahRekening">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Jenis Rekening</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_rek">
                                    <?php
                                    foreach($list_rekening as $row) :
                                    ?>
                                        <option value="<?=$row['id_jenis_rekening']?>"><?=$row['nama_jenis_rekening']?></option>
                                    <?php endforeach;?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" value="Submit" form="formTambahRekening" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    
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