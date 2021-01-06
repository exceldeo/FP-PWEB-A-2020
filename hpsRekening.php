<?php
  require 'function.php';

  $id=$_POST["id_rekening"];

  if(hapusRekening($id)>0){
    $_SESSION["success_message"] = "data berhasil dihapus";
  }
  else{
    $_SESSION["fail_message"] = "data gagal dihapus";
  }
  header('Location: home.php');
  exit;