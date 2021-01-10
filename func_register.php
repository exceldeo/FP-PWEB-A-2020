<?php 
    include 'function.php';
    
    function get_extension($file) {
        $extension = end(explode(".", $file));
        return $extension ? $extension : false;
    }

    $target_dir = "upload\\";
    $name_file = date("Y-m-d_his") . gettimeofday()['usec'] . "." . get_extension($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $name_file;
    
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    $path_image = "C:\\xampp\\htdocs\\FP-PWEB-A-2020\\".$target_file;
    
    $command = escapeshellcmd("python checkFace.py ".$path_image);
    
    $output = shell_exec($command);


    if($output == "false"){
        $_SESSION["fail_message"] = "Tidak ada wajah terdeteksi";
        header('Location: register.php');
        exit;        
    }

    if(register($_POST, $name_file) > 0){
        $_SESSION["success_message"] = "Register berhasil";
        header('Location: home.php');
        exit;
    }
    else{
        $_SESSION["fail_message"] = "Register gagal";
        header('Location: register.php');
        exit;
    }
?>
