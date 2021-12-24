<?php
require 'connection.php';
// sesstion start
// session_start();

$error  = '';
$secess = '';
if (isset($_POST["submit"])) {
    //variables declaration
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (trim($email) != "" and trim($password) != "") {
        //Sanitizes whatever is entered
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = strip_tags($_POST["email"]);
        $password = strip_tags($_POST["password"]);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        //SQL Query
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE 
        email='" . $email . "' AND `password` ='" . $password . "'");
        //applay mysqli
        $numrows = mysqli_num_rows($query);
        if ($numrows > 0) {
            //session email 
            $_SESSION["email"] = $email;
            $error = "<div class='alert alert-success text-center' role='alert'>Login is Successfull.</div>";
            // var_dump($_POST);
            // die();
            header("Location:index.php");
        } else {
            $error = "<div class='alert alert-danger text-center' role='alert'>Email/Password is incorrect.</div>";
        }
    }
}