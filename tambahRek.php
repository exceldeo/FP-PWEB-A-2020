<?php 
  include 'function.php';

  $jenis_rek = $_GET["jenis_rek"];

  // var_dump($jenis_rek);die;

  if(tambahRek($jenis_rek) > 0 ){
    $_SESSION["success_message"] = "Rekening berhasil dibuat";
  }
  else{
    $_SESSION["fail_message"] = "Rekening gagal dibuat/Jenis Rekening sudah di pakai";
  }
  header('Location: rekening.php');
  exit;
?>