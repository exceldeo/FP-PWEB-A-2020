<?php 
include 'function.php';

$data = query("SELECT * FROM jenis_rekekening");

if(isset($_GET['keyword'])){
    $data = cariJenisRekening($_GET['keyword']);
}
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
                        <span class=""><i class="material-icons md-24 pr-2">list_alt</i></span>
                        <span class="menu-collapsed">Daftar Rekening</span>
                    </div>
                </a>
                <a href="jenis_rekening.php" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class=""><i class="material-icons md-24 pr-2">list</i></span>
                        <span class="menu-collapsed">Jenis Rekening</span>
                    </div>
                </a>
                <a href="logout.php" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class=""><i class="material-icons md-24 pr-2">exit_to_app</i></span>
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
                                    JENIS REKENING
                                </h4>
                            </div>
                            <div class="card-body">
                                <span><button
                                    class="btn btn-primary mb-3 float-left" data-toggle="modal" data-target="#addJenisRekening">Tambah Jenis Rekening</button></span>
                                <form action="" method="get">
                                    <div class="input-group mb-3 col-md-4 float-right">
                                        <input type="text" name="keyword" class="form-control" placeholder="Cari..." autofocus autocomplete="off" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : "" ?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Cari</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive text-center">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Jenis Rekening</th>
                                                <th>Detail</th>
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
                                                    <td><strong><?=$nomor++?></strong></td>
                                                    <td>
                                                        <strong><?=$row['nama_jenis_rekening']?></strong>
                                                    </td>
                                                    <td><?=$row['keterangan']?></td>
                                                    <td>
                                                        <form action="hapusJenisRekening.php" method="POST">
                                                            <a href="#"
                                                                class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editJenisRekening<?=$row["id_jenis_rekening"]?>">Edit</a>

                                                            <input type="hidden" name="id" value="<?=$row["id_jenis_rekening"]?>">
                                                            <button type="submit" value="Submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Jenis Rekening?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <!-- Modal Tambah Rekening -->
                                    <div class="modal fade" id="addJenisRekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel" style="color: black">Tambah Jenis Rekening</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="tambahJenisRek.php" method="POST" id="formTambahJenisRekening">
                                                        <div class="form-group">
                                                            <label style="color: black">Jenis Rekening</label>
                                                            <input type="text" name="jenis_rek" class="form-control border border-secondary" id="" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="color: black">Detail</label>
                                                            <textarea class="form-control border border-secondary" name="detail" id="" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" value="Submit" form="formTambahJenisRekening" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        foreach($data as $row) :
                                        // var_dump($row);
                                    ?>
                                        <!-- Modal Edit Rekening -->
                                        <div class="modal fade" id="editJenisRekening<?=$row["id_jenis_rekening"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel" style="color: black">Edit Jenis Rekening</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="formEditJenisRekening<?=$row["id_jenis_rekening"]?>" action="updateJenisRek.php" method="POST">
                                                            <input type="hidden" name="id" value="<?=$row["id_jenis_rekening"]?>">
                                                            <div class="form-group">
                                                                <label style="color: black">Jenis Rekening</label>
                                                                <input type="text" class="form-control border border-secondary" id="" placeholder="" value="<?=$row["nama_jenis_rekening"]?>" name="jenis_rek">
                                                            </div>
                                                            <div class="form-group">
                                                                <label style="color: black">Detail</label>
                                                                <textarea class="form-control border border-secondary" id="" rows="3" name="detail"><?=$row["keterangan"]?></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" value="Submit" form="formEditJenisRekening<?=$row["id_jenis_rekening"]?>" class="btn btn-primary">Edit</button>
                                                    </div>
                                                </div>
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