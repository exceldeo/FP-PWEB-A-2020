<?php 
  include 'function.php';

  $id=$_Get["id_rekening"];

  if(updateStatusRek($id)>0){
    $_SESSION["success_message"] = "data berhasil diubah";
  }
  else{
    $_SESSION["fail_message"] = "data gagal diubah";
  }
  header('Location: index.php');
  exit;
?>