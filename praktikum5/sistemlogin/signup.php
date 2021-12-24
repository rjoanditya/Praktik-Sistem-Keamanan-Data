<?php
require 'koneksi.php';
if (isset($_POST["signup"])){
    if(daftar($_POST)>0){
        echo "
        <script>
            alert('Registrasi berhasil');
        </script>
         ";
         echo '<script>window.location="login.php"</script>';
    }
    else {
        echo mysqli_error($conn);
    }   
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>PSKD Login</title>
</head>

<body>

    <center class="" style="height : 40.52em; justify-content: center; display : flex; align-items:center; ">

        <div class="container px-5">


            <div class="row gx-1 mt-5">
                <div class="container-fluid col-md-6 col-lg-4">
                    <div class="p-3 border rounded bg-light">
                        <!-- FLOWCHART B -->
                        <H3 class="py-2">Form Registrasi</H3>
                        <form method="post" action="">
                            <input class="form-control" type="text" name="username" id="username"
                                placeholder="Username"><br>
                            <input class="form-control" type="password" name="password" id="password"
                                placeholder="Password"><br>
                            <input class="form-control" type="password" name="password2" id="password2"
                                placeholder="Konfirmasi Password"><br>
                            <input class="form-control" type="text" name="name" id="name"
                                placeholder="nama"><br>
                            <input class="form-control" type="text" name="email" id="email"
                                placeholder="email"><br>
                            <input class="form-control" type="text" name="address" id="address"
                                placeholder="alamat"><br>
                            <button class="w-100 btn btn-lg btn-dark pb-3" type="submit" name="signup">Sign up</button>
                            <a href="login.php">Already have an account? Login here</a>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </center>
</body>

</html>