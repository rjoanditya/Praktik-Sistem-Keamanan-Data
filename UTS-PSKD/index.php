<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location : /UTSPSKD/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard PSKD</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <link href="styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <!-- <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="register.php">Halaman Awal Register</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav> -->
    <center>
        <?php
    require('navbar.php');
    ?>
        <h3 class="m-5 p-3">Selamat Datang, <?= $_SESSION['nama'] ?></h3>
    </center>
    <div class="container">
        <?php
    include('card.php');
    ?>

    </div>
</body>

</html>