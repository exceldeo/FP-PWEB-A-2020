<?php
  require 'function.php';

  $id=$_GET["id_rekening"];

  if(hapusRekening($id)>0){
    $_SESSION["success_message"] = "Rekening berhasil dihapus";
  }
  else{
    $_SESSION["fail_message"] = "Rekening gagal dihapus";
  }
  header('Location: rekening.php');
  exit;