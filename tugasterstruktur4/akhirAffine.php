<?php
$nmfile     = "enkripsiAffine.txt";
$fp         = fopen($nmfile,"r"); //membuka file enkripsi
$isi        = fread($fp,filesize($nmfile));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>psdk04</title>
</head>
<body>
    
    <form action="dekAffine.php" method="get">
    <?php
    echo "kalimat ciphertext : ";
    for($i=0;$i<strlen($isi);$i++){
        echo $isi[$i];
    }
    echo "<br>";
    ?>
        a : <input type="text" name="key1" maxlength=""><br>
        b : <input type="text" name="key2" maxlength=""><br>
        <input type="submit" value="kirim">
        <input type="reset" value="ulangi">
    </form>

</body>
</html>