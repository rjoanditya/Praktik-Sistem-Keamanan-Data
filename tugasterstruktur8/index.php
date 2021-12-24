<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:login.php");
}
// require 'function.php';
// require 'csrf.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Login | CSRF</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="container-fluid">
                    <div class="row no-gutter">
                        <!-- The image half -->
                        <div class="col-md-6 d-none d-md-flex bg-image"></div>


                        <!-- The content half -->
                        <div class="col-md-6 bg-light">
                            <div class="login d-flex align-items-center py-5">

                                <!-- Demo content-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10 col-xl-7 mx-auto">
                                            <h3 class="display-4">Index CSRF</h3>
                                            <p class="text-muted mb-4">Create a login split page using Bootstrap 4.
                                            </p>

                                            <div class="text-center d-flex justify-content-between mt-4">
                                                <?php
                                                // var_dump($_POST);
                                                ?>
                                                <p>Snippet by <a href="https://bootstrapious.com/snippets"
                                                        class="font-italic text-muted">
                                                        <u>Boostrapious</u></a></p>
                                            </div>
                                            <a href="logout.php" type="submit"
                                                class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log
                                                out</a>
                                        </div>
                                    </div>
                                </div><!-- End -->

                            </div>
                        </div><!-- End -->

                    </div>
                </div>


            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>