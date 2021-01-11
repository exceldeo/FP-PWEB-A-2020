<?php
  require 'function.php';

  $id=$_POST["id"];

  if(hapusJenisRek($id)>0){
    $_SESSION["success_message"] = "data berhasil dihapus";
  }
  else{
    $_SESSION["fail_message"] = "data gagal dihapus";
  }
  header('Location: jenis_rekening.php');
  exit;