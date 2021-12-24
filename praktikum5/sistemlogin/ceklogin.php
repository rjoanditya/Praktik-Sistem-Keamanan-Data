  <?php
include 'koneksi.php';
  session_start();
    if(isset($_SESSION["login"])){
      header("Location: index.php");
      exit;
    }

    
    //fetch object
      if(isset($_POST["login"])){
      global $conn;
      $username = $_POST["username"];
      $cek = mysqli_query($conn, "SELECT * FROM sl_user2 WHERE username = '".$username."' ");

      if (mysqli_num_rows($cek)){
          $d = mysqli_fetch_object($cek);
          $_SESSION["a_global"]=$d;
          $_SESSION["id"]=$d->id;
        }
    }


    // require 'koneksi.php';
    #jika teerdapat Login maka isian disimpan sebagai variabel username dan password
    // FLOWCHART A

    if (isset($_POST["login"])){
        
        global $conn;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_md5 = md5($password);
    #isian dicek, apakah sudah terdata pada database
        $result = mysqli_query($conn, "SELECT role FROM sl_user2 WHERE username = '$username' AND password = '$password_md5'");
        $indexPassword = mysqli_query($conn, "SELECT * FROM sl_user2 WHERE username = '$username' ");
        $cek = mysqli_num_rows($result);

          // cek aktivasi
          $cekaktivasi = mysqli_query($conn, "SELECT * FROM sl_user2 WHERE username = '$username'");
          $arrayAktivasi = mysqli_fetch_array($cekaktivasi);
        if (($arrayAktivasi['aktif'])=="0") {
          echo '
          <script>
              alert("akun belum diaktivasi");document.location="login.php";
          </script>
          ';
          
          return false;
          
          
        }elseif ($cek>0){
            
            $rows = mysqli_fetch_assoc($result);
            
            // $username = $rows['username'];
            // $password = $rows['password'];
            $role     = $rows['role'];
            $_SESSION["login"] = true;
              if($role=='1'){
                header("location:admin.php");
              }else {
                header("location:index.php");
              }
            
          
        }else{
          echo '<script>alert("Username atau password salah");document.location="login.php";</script>';
            
        }
    }


// FLOWCHART B
if (isset($_POST["signin"])){
  global $conn;
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password_md5 = md5($password);
#isian dicek, apakah sudah terdata pada database
  $result = mysqli_query($conn, "SELECT password , role FROM sl_user2 WHERE username = '$username' ");
  // $indexPassword = mysqli_query($conn, "SELECT * FROM sl_user2 WHERE username = '$username' ");
  $cek = mysqli_num_rows($result);

  if ($cek>0){
      
      $rows = mysqli_fetch_assoc($result);
      // $username = $rows['username'];
      $passVerif = $rows['password'];
      $role     = $rows['role'];
      
      $cekaktivasi = mysqli_query($conn, "SELECT * FROM sl_user2 WHERE username = '$username'");
      $arrayAktivasi = mysqli_fetch_array($cekaktivasi);
      
          if (($arrayAktivasi['aktif'])=="0") {
              echo '
              <script>
                  alert("akun belum diaktivasi");document.location="login.php";
              </script>
              ';
              
              return false;
              
              
          }elseif($passVerif!=$password){
        echo '<script>alert("Username atau password salah");document.location="login.php";</script>';
         
        } 
                $_SESSION["login"] = true;
                if($role=='1'){
                  header("location:admin.php");
                  }else {
                  header("location:index.php");
                }
          }
        }
      
    
  
  // V3420066 Rizky Joanditya Nur Iman