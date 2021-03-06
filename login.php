<?php 
include 'function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="align-items-center d-flex min-vh-100">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 md-5 sm-5 pt-5">
                    <div class="container">
                        <div>
                            <img class="" src="img/login2.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 md-5 sm-5 pt-5">
                    <div class="card shadow-1 my-auto pt-2" style="width: 85%">
                        <div class="card-body">
                            <h3 class="card-title text-center pb-1"><strong>Masuk Akun</strong></h3>
                            <?php if(isset($_SESSION['fail_message'])) {?>
                            <h6 class="card-subtitle mb-2 text-muted text-center"><?=$_SESSION["fail_message"]?></h6>
                            <?php 
                            unset($_SESSION["fail_message"]);
                        
                        } ?>
                            <form action="auth.php" class="form pl-3 pr-3 pt-4" id="login-form" method="post">
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="text" name="email" id="email" class="form-control bg-light" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <input type="password" name="password" id="password" class="form-control bg-light"
                                        required>
                                </div>
                                <div class="form-group pt-4 text-center">
                                    <input type="submit" value="Masuk" name="register_submit" id="register_submit"
                                        class="form-control form-control-lg bg-primary" style="color: white">
                                    <label class="text-muted text-center pt-2">Anda belum punya akun? <a href="register.php"
                                            style="color:primary;font-weight:bold">Daftar Sekarang</a></label><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
