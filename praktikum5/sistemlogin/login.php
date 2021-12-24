<?php
 session_start();
 if(isset($_SESSION["Login"])){
    header("Location: index.php");
    exit;
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
    
        <div class="row gx-1">

            <div class="container-fluid col-md-6 col-lg-4">
                <div class="p-3 border bg-light">
                    <!-- FLOWCHART A -->
                    <H3 class="py-2 ">Login MD5</H3>
                    <form method="post" action="ceklogin.php">
                        <input class="form-control" type="text" name="username" id="username"
                            placeholder="Username"><br>
                        <input class="form-control" type="password" name="password" id="password"
                            placeholder="Password"><br>
                        <button class="w-100 btn btn-lg btn-dark" type="submit" name="login">Log in</button>
                        <br>
                    </form>
                </div>
            </div>

            <div class="container-fluid col-md-6 col-lg-4">
                <div class="p-3 mb-2 border  bg-light">
                    <!-- FLOWCHART B -->
                    <H3 class="py-2">Login Flowchart B</H3>
                    <form method="post" action="ceklogin.php">
                        <input class="form-control" type="text" name="username" id="username"
                            placeholder="Username"><br>
                        <input class="form-control" type="password" name="password" id="password"
                            placeholder="Password"><br>
                        <button class="w-100 btn btn-lg btn-dark" type="submit" name="signin">Log in</button>
                        <br>
                    </form>
                </div>
            </div>

        </div>

        <div class="row gx-1 mt-5" > 
            <div class="container-fluid col-md-6 col-lg-4">
                <div class="p-3 border rounded bg-light">
                    <a href="signup.php">Don't Have an Account? Click Here</a>
                </div>
            </div>
        </div>
   
    </div>
</center>
</body>

</html>