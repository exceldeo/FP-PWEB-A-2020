<?php 
  include 'function.php';

  $jenis_rek = $_POST["jenis_rek"];
  $detail = $_POST["detail"];

  if(tambahJenisRek($jenis_rek, $detail) > 0){
    $_SESSION["success_message"] = "data berhasil ditambah";
  }
  else{
    $_SESSION["fail_message"] = "data gagal ditambah";
  }
  header('Location: jenis_rekening.php');
  exit;
?>