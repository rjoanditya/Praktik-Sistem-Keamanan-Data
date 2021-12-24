<?php
session_start();
//jika sudah login maka akan dialihkan ke home
if (!empty($_SESSION['login'])) {
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Registrasi</title>
    <meta name="author" content="https://www.maribelajarcoding.com/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">
    <!-- my css -->
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <div class="container">
        <div class="backgroundRegister">
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">Daftar</div>
                        <div class="panel-body">
                            <?php
              include "koneksi.php";
              if (isset($_POST['daftar'])) {
                //ambil data dari form   
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                $Password2 = $_POST['Password2'];
                $Nama = $_POST['Nama'];
                $Email = $_POST['Email'];
                $Alamat = $_POST['Alamat'];
                // Validasi kekuatan password
                $uppercase = preg_match('@[A-Z]@', $Password);
                $lowercase = preg_match('@[a-z]@', $Password);
                $number    = preg_match('@[0-9]@', $Password);
                $specialChars = preg_match('@[^\w]@', $Password);

                $user_cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='" . $Username . "'");
                $user = mysqli_num_rows($user_cek);
                if ($user > 0) {
                  echo '<script>
                      alert("Username sudah pernah terdaftar");
                      document.location="register.php";
                      </script>';
                } else {
                  if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 8) {
                    echo 'Password setidaknya harus 8 karakter, harus memiliki huruf besar, huruf kecil, angka, dan spesial karakter.';
                  } else {
                    // echo 'Strong password. </br>';

                    //buat token
                    $token = hash('sha256', md5(date('Y-m-d')));
                    //cek user terdaftar
                    $sql_cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='" . $Email . "'");
                    $r_cek = mysqli_num_rows($sql_cek);
                    if ($Password !== $Password2) {
                      echo "<script>
                            alert('konfirmasi password tidak sesuai');
                            </script>";
                    } else {
                      if ($r_cek > 0) {
                        echo '<script>
                          alert("Email sudah pernah terdaftar");
                          document.location="register.php";
                          </script>';
                      } else {
                        //jika data kosong maka insert ke tabel;
                        //aktif =0 user belum aktif
                        $insert = mysqli_query($koneksi, "INSERT INTO users(username,password,nama,email,alamat,token,aktif) VALUES('" . $Username . "','" . $Password . "','" . $Nama . "','" . $Email . "','" . $Alamat . "','" . $token . "','0')");
                        //include kirim email
                        include("mail.php");

                        if ($insert) {
                          echo '<div class="alert alert-success">
                            Pendaftaran anda berhasil, silahkan cek email anda untuk aktivasi. 
                            <a href="login.php">Login</a>
                          </div>';
                        }
                      }
                      return false;
                    }
                  }
                }
              }

              ?>
                            <form class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="Username">Username:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="Username" name="Username"
                                            onkeypress="return runScript(event)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="Password">Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="Password" name="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="Password2">Konfirmasi Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="Password2" name="Password2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="Nama">Nama:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="Nama" name="Nama">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="Email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="Email" name="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="Alamat">Alamat:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="Alamat" name="Alamat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" name="daftar"
                                            class="btn btn-primary btn-block;">Daftar</button>
                                        <a href="/utspskd/login.php">Sudah punya akun? rene o</a>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script language="javascript" src="./mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>