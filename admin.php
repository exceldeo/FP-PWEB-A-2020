<?php 
include 'function.php';

$data = query("SELECT u.id, u.nama, jk.nama_jenis_rekening, r.no_rekening, r.status FROM user u, jenis_rekekening jk , rekening r WHERE u.id = r.user_id AND r.jenis_rekening  = jk.id_jenis_rekening");
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/myStyle.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
        <!-- Top NavBar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="admin.php">
                <!-- <img src="img/logo2.png" width="100" height="30" class="d-inline-block align-top" alt=""> -->
                <span class="menu-collapsed pl-2"><strong>Lumine Bank | Admin</strong></span>
            </a>
        </nav>
        <!-- Top NavBar END -->

        <!-- Body -->
        <div class="row" id="body-row">
            <!-- Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block col-2">
                <ul class="list-group sticky-top sticky-offset">
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>MAIN MENU</small>
                    </li>
                    <a href="admin.php" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class=""><i class="material-icons md-24 pr-2">home</i></span>
                            <span class="menu-collapsed">Dashboard</span>
                        </div>
                    </a>
                    <a href="rekening.php" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class=""><i class="material-icons md-24 pr-2">work</i></span>
                            <span class="menu-collapsed">Rekening</span>
                        </div>
                    </a>
                    <a href="logout.php" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class=""><i class="material-icons md-24 pr-2">work</i></span>
                            <span class="menu-collapsed">Logout</span>
                        </div>
                    </a>
                </ul>
            </div>
            <!-- Sidebar END -->

            <!-- MAIN -->
            <div class="col-lg-10">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        DAFTAR REKENING
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="get">
                                        <div class="input-group mb-3 col-md-4 float-right">
                                            <input type="text" name="q" class="form-control" placeholder="Cari...">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="submit">Cari</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="table-responsive text-center">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID Nasabah</th>
                                                    <th>Nasabah</th>
                                                    <th>Jenis Rekening</th>
                                                    <th>Nomor Rekening</td>
                                                    <th>Status</td>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $nomor = 1;
                                                foreach($data as $row) :
                                                // var_dump($row);
                                                ?>
                                                <tr>
                                                    <td><strong><?=$row['id']?></strong></td>
                                                    <td>
                                                        <strong><?=$row['nama']?></strong>
                                                    </td>
                                                    <td><?=$row['nama_jenis_rekening']?></td>
                                                    <td><?=$row['no_rekening']?></td>
                                                    <?php if($row['status'] == 1):?>
                                                <td>Aktif</td>
                                                <?php else :?>
                                                <td>Non - Aktif</td>
                                                <?php endif?>
                                                    <td>
                                                    <a href="#"
                                                        class="btn btn-success btn-sm">Status</a>
                                                        <a href="#"
                                                            class="btn btn-warning btn-sm">Detail</a>
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Hapus Varian?')">Hapus</button>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Modal Tambah Rekening -->
                                <div class="modal fade" id="detailRekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Detail Rekening</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6" style="color: black">
                                                        <h5>ID Nasabah</h5>
                                                        <h5>Nama Nasabah</h5>
                                                        <h5>Nomor KTP</h5>
                                                        <h5>Nomor Rekening</h5>
                                                        <h5>Jenis Rekening</h5>
                                                        <h5>Tanggal Aktif</h5>
                                                    </div>
                                                    <div class="col-md-6" style="color: black">
                                                        <h5>0001</h5>
                                                        <h5>Hana</h5>
                                                        <h5>01234 5678 8908</h5>
                                                        <h5>0511 8400 7892</h5>
                                                        <h5>Gold</h5>
                                                        <h5>3 Januari 2020</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Col END -->
        </div>

        <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->
        <script src="js/app.js"></script>
        <script>
            // Hide submenus
            $('#body-row .collapse').collapse('hide'); 

            // Collapse/Expand icon
            $('#collapse-icon').addClass('fa-angle-double-left'); 

            // Collapse click
            $('[data-toggle=sidebar-colapse]').click(function() {
                SidebarCollapse();
            });

            function SidebarCollapse () {
                $('.menu-collapsed').toggleClass('d-none');
                $('.sidebar-submenu').toggleClass('d-none');
                $('.submenu-icon').toggleClass('d-none');
                $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
                
                // Treating d-flex/d-none on separators with title
                var SeparatorTitle = $('.sidebar-separator-title');
                if ( SeparatorTitle.hasClass('d-flex') ) {
                    SeparatorTitle.removeClass('d-flex');
                } else {
                    SeparatorTitle.addClass('d-flex');
                }
                
                // Collapse/Expand icon
                $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
            }
        </script>
    </body>
</html>