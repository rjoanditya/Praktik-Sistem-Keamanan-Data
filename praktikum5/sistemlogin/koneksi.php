<?php

$conn = mysqli_connect ('localhost','root','','skd_sistemlogin');

// fungsi daftar akun
function daftar($data){
    global $conn;
    $username       = strtolower($data["username"]);
    $email          = $data["email"];
    $name           = $data["name"];
    $password       = mysqli_escape_string ($conn, $data["password"]);
    $password2      = mysqli_escape_string ($conn, $data["password2"]);
    $password_md5   = md5($password);
    $address        = $data["address"];
    $uppercase      = preg_match('@[A-Z]@', $password);
    $lowercase      = preg_match('@[a-z]@', $password);
    $number         = preg_match('@[0-9]@', $password);
    $specialChars   = preg_match('@[^\w]@', $password);
    $thereIsSpace   = preg_match('@[" "]@', $username);
    $role           = 0;
    $aktif          = 0;
    $token          = hash('sha256', md5(date('Y-m-d-s'))) ;

    // cek username sudah ada belum
    $cekusername = mysqli_query($conn, "SELECT username FROM sl_user2 WHERE username = '$username'");

    if (mysqli_fetch_assoc($cekusername)){
        echo "
        <script>
            alert('username sudah terdaftar');
        </script>
        ";
        return false;
    }  
    if($thereIsSpace){
        echo "
        <script>
            alert('username tidak bisa mengandung spasi');
        </script>
        ";
        return false;
    }

    // cek email sudah ada belum
    $cekemail = mysqli_query($conn, "SELECT email FROM sl_user2 WHERE email = '$email'");

        if (mysqli_fetch_assoc($cekemail)) {
            echo "
            <script>
                alert('email sudah terdaftar');
            </script>
            ";
            return false;
        }
   
        // cek password konfirmasi
        global $conn;
        if ($password != $password2){
            echo "
            <script>
                alert('konfirmasi password tidak sama');
            </script>
            ";
            return false;
        } 

        //  cek panjang password
         elseif(strlen($password)<=7){
            echo "
            <script>
                alert('Password tidak boleh kurang dari 8 karakter');
            </script>
            ";
            return false;
        }
        // cek uppercase
        elseif(!$uppercase){
            echo "
            <script>
                alert('Password setidaknya mengandung 1huruf besar');
            </script>
            ";
            return false;
        }
        // cek lowercase
        elseif(!$lowercase){
            echo "
            <script>
                alert('Password setidaknya mengandung huruf kecil');
            </script>
            ";
            return false;
        }
        // cek terdapat angka pada password
        elseif(!$number){
            echo "
            <script>
                alert('Password setidaknya mengandung angka');
            </script>
            ";
            return false;
        }
        // cek terdapat spesial karakter
        elseif(!$specialChars){
            echo "
            <script>
                alert('Password setidaknya spesial karakter seperti !@#$% dll');
            </script>
            ";
            return false;
        }else {
            mysqli_query ($conn, "INSERT INTO sl_user2 VALUES ('','$username','$name','$email','$password_md5','$address','$role','$aktif','$token')");
            include 'mail.php';
           return mysqli_affected_rows($conn);
        }
       
     




}