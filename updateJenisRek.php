<?php 
  include 'function.php';

  $id_rek = $_POST["id"];
  $jenis_rek = $_POST["jenis_rek"];
  $detail = $_POST["detail"];

  if(updateJenisRek($id_rek, $jenis_rek, $detail) > 0){
    $_SESSION["success_message"] = "data berhasil diubah";
  }
  else{
    $_SESSION["fail_message"] = "data gagal diubah";
  }
  header('Location: jenis_rekening.php');
  exit;
?>