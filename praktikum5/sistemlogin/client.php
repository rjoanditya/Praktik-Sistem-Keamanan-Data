<?php
    session_start();
    if(!isset($_SESSION["login"])){
       header("Location: login.php");
       exit;
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>PSKD Login</title>
</head>

<body>
<center>
        <div class="container" style="height: 40.52em;justify-content: center; display : flex; align-items:center; ">
            <div class="container-fluid text-light">
            <h1 class="">Halaman Client</h1>
            </div>

        </div>
    
    </center>
    
</body>

</html>