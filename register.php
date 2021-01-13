<?php 
include 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="align-items-center d-flex min-vh-100">
        <div class="container-fluid pt-5 mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 md-5 sm-5 pt-5">
                    <div class="container my-auto">
                        <div>
                            <img class="" src="img/login2.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 md-5 sm-5 pt-5">
                    <div class="card shadow-1 my-auto pt-2" style="width: 85%">
                        <div class="card-body">
                            <h3 class="card-title text-center pb-1"><strong>Daftar Akun Baru</strong></h3>
                            <?php if(isset($_SESSION['fail_message'])) {?>
                                <h6 class="card-subtitle mb-2 text-muted text-center"><?=$_SESSION["fail_message"]?></h6>
                            <?php 
                                unset($_SESSION["fail_message"]);
                            } ?>
                            <!-- <h6 class="card-subtitle mb-2 text-muted text-center">Lorem ipsum is simply dummy text</h6> -->
                            <form action="func_register.php" class="form pl-3 pr-3 pt-4" id="register-form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama</label><br>
                                    <input type="text" name="name" id="name" class="form-control bg-light" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="text" name="email" id="email" class="form-control bg-light" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <input type="password" name="password" id="password" class="form-control bg-light"
                                        required>
                                    </div>
                                    <p id="cek1" class="my-1"></p>
                                <div class="form-group">
                                    <label>No KTP</label><br>
                                    <input type="text" name="no_ktp" id="no_ktp" class="form-control bg-light" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label><br>
                                    <input type="text" name="alamat" id="alamat" class="form-control bg-light" required>
                                </div>
                                <div class="form-group">
                                    <label>Upload foto</label><br>
                                    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/x-png,image/gif,image/jpeg"
                                        required>
                                </div>
                                <div class="form-group pt-4 text-center">
                                    <input type="submit" value="Daftar Sekarang" name="register_submit"
                                        id="register_submit" class="form-control form-control-lg bg-primary"
                                        style="color: white">
                                    <label class="text-muted text-center pt-2">Sudah punya akun? <a href="login.php"
                                            style="color:primary;font-weight:bold">Masuk Sekarang</a></label><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

const text = document.querySelector('#password');
const cek1 = document.querySelector('#cek1');
const cek2 = document.querySelector('#cek2');

text.addEventListener('input',cek);

function cek(value) {
    const input = value.target.value;
    console.log(input);
    if((input.length > 6) && (/[a-z]/.test(input) &&  /[A-Z]/.test(input) &&  /[0-9]/.test(input)))
    cek1.innerHTML = '<span class="bg-success px-1 py-1" style="border-radius:5px;color:white">Sangat kuat</span>'; 
    else if((input.length > 6) || (/[a-z]/.test(input) &&  /[A-Z]/.test(input) &&  /[0-9]/.test(input)))
    cek1.innerHTML = '<span class="bg-warning px-1 py-1" style="border-radius:5px;color:white">Sedang</span>'; 
    else
    cek1.innerHTML = '<span class="bg-danger px-1 py-1" style="border-radius:5px;color:white">lemah</span>'; 

}

</script>
</body>

</html>
