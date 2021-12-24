<?php

require 'koneksi.php';
#jika teerdapat Login maka isian disimpan sebagai variabel username dan password
// FLOWCHART A
if (isset($_POST["login"])){
    
    global $conn;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $thereisSpecialChars   = preg_match('@[^\w]@', $username && $password);
#isian dicek, apakah sudah terdata pada database
    $result = mysqli_query($conn, "SELECT role FROM sl_user WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($result);

    if ($cek>0){
        
        $rows = mysqli_fetch_assoc($result);
        // $username = $rows['username'];
        // $password = $rows['password'];
        $role     = $rows['role'];
      
          if($role=='admin'){
            header("location:admin.php");
          }else {
            header("location:client.php");
          }
        
      
    }else{
      echo '<script>alert("Username atau password salah");document.location="index.php";</script>';
         
    }
}


// FLOWCHART B
if (isset($_POST["signin"])){
  global $conn;
  $username = $_POST["username"];
  $password = $_POST["password"];
  
#isian dicek, apakah sudah terdata pada database
  $result = mysqli_query($conn, "SELECT password , role FROM sl_user WHERE username = '$username' ");
  $cek = mysqli_num_rows($result);

  //document.location="login.php";
 
    if($cek>0){ 
      $rows = mysqli_fetch_assoc($result);
      // $username = $rows['username'];
      $passVerif = $rows['password'];
      $role     = $rows['role'];

      if($passVerif!=$password){
        echo '<script>alert("Username atau password salah");document.location="index.php";</script>';
         
        }else{
          if($role=='admin'){
            header("location:admin.php");
            }else {
            header("location:client.php");
          }
        }
      }

}

    
  
  // V3420066 Rizky Joanditya Nur Iman
