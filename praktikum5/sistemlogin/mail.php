<?php
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
require "./composer/vendor/autoload.php";
$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;

//ganti dengan email dan password yang akan di gunakan sebagai email pengirim
$mail->Username = 'zstorm70@gmail.com';
$mail->Password = 'petersaysdenim';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

//ganti dengan email yg akan di gunakan sebagai email pengirim
$mail->setFrom('zstorm70@gmail.com', 'Panitia Sunat Massal');
$mail->addAddress($_POST['email'], $_POST['name']);
$mail->isHTML(true);
$mail->Subject = "Aktivasi pendaftaran Member";
$mail->Body = "Selamat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.
 <a href='http://localhost/skd/tugasterstruktur2/sistemlogin/activation.php?t=".$token."'>http://localhost/skd/tugasterstruktur2/sistemlogin/activation.php?t=".$token."</a>  ";
$mail->send();
echo 'Message has been sent';