<?php 
    include 'function.php';
    
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $name_file = basename($_FILES["fileToUpload"]["name"]);
    
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    // $path_image = "C:\\xampp\\htdocs\\FP-PWEB-A-2020\\upload\\".$target_file;
    
    // $command = escapeshellcmd("python checkFace.py ".$path_image);
    
    // $output = shell_exec($command);
    
    // if(!$output){
    //     header('Location: register.php');
    //     exit;        
    // }
    if(register($_POST,$name_file)>0){
        $_SESSION["success_message"] = "data berhasil ditambahkan";
        header('Location: home.php');
        exit;
    }
    else{
        $_SESSION["fail_message"] = "data gagal ditambahkan";
        header('Location: register.php');
        exit;
    }
?>
