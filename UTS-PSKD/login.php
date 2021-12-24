<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
		session_start();
		//jika sudah login maka akan dialihkan ke home
		 if (!empty($_SESSION['login'])) {
			  header("Location:index.php");
			}                  
		 include "koneksi.php";
		if (isset($_POST['Login'])) {
			$Username=$_POST['Username'];
			$Password=$_POST['Password'];
			//cek user terdaftar dan aktif
			 $sql_cek=mysqli_query($koneksi,"SELECT * FROM users WHERE username='".$Username."' AND password='".$Password."' AND aktif='1'") or die(mysqli_error($koneksi));
			 
			 $r_cek=mysqli_fetch_array($sql_cek);
			 $jml_data=mysqli_num_rows($sql_cek);
			 if ($jml_data>0) {
				 
			  //buat session login dan redirect ke halaman utama
			  $_SESSION['login']=md5($r_cek['username']);
			  $_SESSION['username']=$r_cek['username'];
			  $_SESSION['nama']=$r_cek['nama'];
			   header("Location:index.php");
			 }else{
			  //data tidak di temukan
			   echo '<div class="alert alert-warning">
				   Username dan Password anda salah!
				  </div>';
			 }
		  }

	  ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to login</h2>
                                <p>Don't have an account?</p>
                                <a href="register.php" class="btn btn-white btn-outline-white">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="register.php"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="register.php"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="" class="signin-form" method="POST">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" name="Username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="Password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="Login"
                                        class="form-control btn btn-primary submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>