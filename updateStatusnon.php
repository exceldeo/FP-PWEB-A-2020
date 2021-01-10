<?php 
  include 'function.php';

  $id=$_GET["id_rekening"];

  if(updateStatusReknon($id)>0){
    $_SESSION["success_message"] = "data berhasil diubah";
  }
  else{
    $_SESSION["fail_message"] = "data gagal diubah";
  }
  header('Location: admin.php');
  exit;
?>