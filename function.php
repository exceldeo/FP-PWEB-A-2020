<?php 

// koneksi ke mysql
$conn = mysqli_connect("localhost","root","","db_bank_fp_pweb");
session_start();

// mengambil satu-satu query di masukan ke array
function query($query){
  global $conn;
  $result = mysqli_query($conn,$query);

  $rows=[];
  while($row = mysqli_fetch_assoc($result)){
    $rows[]=$row;
  }
  close();
  return $rows;
}

// fungsi hapus data
function hapusRekening($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM rekening WHERE id_rekening = $id");
    $cek = mysqli_affected_rows($conn);
    close();
    return $cek;
}

// fungsi login
function login($data){
  global $conn;
  $email = htmlspecialchars($data["email"]);
  $password = md5(htmlspecialchars($data["password"]));
  
  $query="SELECT * FROM user WHERE email = '$email' AND password = '$password'";
  
  $user = mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($user);
  close();
  
  if($result != NULL){  
    // var_dump($result["id"]);die;
    $_SESSION["user"]["id"] = $result["id"];

    $_SESSION["user"]["nama"] = $result["nama"];
    $_SESSION["user"]["role"] = $result["role"];
    return 1;  
  }else{
    return 0;
  }

}

// fungsi register data
function register($data,$file){
  global $conn;
  $nama=htmlspecialchars($data["name"]);
  $email=htmlspecialchars($data["email"]);
  $password=md5(htmlspecialchars($data["password"]));
  $alamat=htmlspecialchars($data["alamat"]);
  $no_ktp=htmlspecialchars($data["no_ktp"]);
  

  $query="INSERT INTO user value (NULL,'$nama','$email','$password', 'U')";

  $result = mysqli_query($conn,$query);
  
  $id = $conn->insert_id;
  
  $date = new DateTime(null, new DateTimeZone('Asia/Jakarta'));
  $tanggal = $date->format('Y-m-d H:i:s');

  $_SESSION["user"]["id"] = $id;
  $_SESSION["user"]["nama"] = $nama;
  $_SESSION["user"]["role"] = 'U';

  // var_dump($tanggal);die;

  $query2="INSERT INTO detail_user VALUES (NULL, '$id', '$no_ktp', '$alamat', '$tanggal', current_timestamp())";
  
  mysqli_query($conn,$query2);

  $cek = mysqli_affected_rows($conn);
  close();
  return $cek;
}

function updateStatusRek($idRek){
  global $conn;
  
  $id=htmlspecialchars($idRek);

  $query="UPDATE rekening SET 
      status = '1',
      WHERE id_rekening = $id
      ";
  // var_dump($query);die;
  mysqli_query($conn,$query);
  $cek = mysqli_affected_rows($conn);
  close();
  return $cek;
}

// fungsi tambah rekening data
function tambahRek($jenis_rek){
  global $conn;
  $user_id = $_SESSION["user"]["id"];
  $no_rek = sprintf("%12d", mt_rand(1, 999999999999));;
  $jenis_rekening=htmlspecialchars($jenis_rek);

  $query="INSERT INTO rekening value (NULL,'$id','$no_rek','$jenis_rekening', current_timestamp(),'0')";

  $result = mysqli_query($conn,$query);

  $cek = mysqli_affected_rows($conn);
  close();
  return $cek;
}

function close(){
  mysqli_close(mysqli_connect("localhost","root","","db_bank_fp_pweb"));
}