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
                <a href="jenis_rekening.php" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class=""><i class="material-icons md-24 pr-2">work</i></span>
                        <span class="menu-collapsed">Rekening</span>
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
                                <span><a href="#"><button
                                    class="btn btn-primary mb-3 float-left" data-toggle="modal" data-target="#addRekening">Tambah Rekening</button></a></span>
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
                                                <th>Rekening ID</th>
                                                <th>Rekening</th>
                                                <th>Detail</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>0001</strong></td>
                                                <td>
                                                    <strong>Gold</strong>
                                                </td>
                                                <td>Biaya bulanan Rp7.500,00 dan limit tarik tunai<br>sebesarRp10.000.000,00 per-hari.</td>
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editRekening">Edit</a>
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Hapus Rekening?')">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal Tambah Rekening -->
                                <div class="modal fade" id="addRekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Tambah Jenis Rekening</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label style="color: black">Jenis Rekening</label>
                                                        <input type="text" class="form-control border border-secondary" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label style="color: black">Keterangan</label>
                                                        <textarea class="form-control border border-secondary" id="" rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Edit Rekening -->
                                <div class="modal fade" id="editRekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel" style="color: black">Edit Jenis Rekening</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label style="color: black">Jenis Rekening</label>
                                                        <input type="text" class="form-control border border-secondary" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label style="color: black">Keterangan</label>
                                                        <textarea class="form-control border border-secondary" id="" rows="3"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Edit</button>
                                            </div>
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