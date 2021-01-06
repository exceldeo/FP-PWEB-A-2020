<?php
  require 'function.php';

  $data["email"] = $_POST["email"];
  $data["password"] = $_POST["password"];
  $result = login($data);
  
  if($result > 0){
    if($_SESSION["user"]["role"] == "A"){
      echo ' <script>
      alert("Berhasil login");
      </script>';
      header('Location: admin.php');
      exit;    
    }
    else{
      echo ' <script>
      alert("Berhasil login");
      </script>';
      header('Location: home.php');
      exit;
    }
  }
  else{
    $_SESSION["fail_message"] = "Email atau password salah";
    header('Location: login.php');
    exit;
  }