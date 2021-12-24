<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Enkripsi MD5</title>
</head>
<body>

<div class="container pt-5">

<form action="" Method="POST">
<center>
<h1> Enkripsi MD5</h1>
<table>
    <tr>
    
        
        <td>
        <label for="" id="t1">Teks 1</label>
        <textarea class="form-control" name="str1" id="t1" cols="50" rows="5"></textarea>
        </td>
    </tr>

    <tr>
      
        <td>
        <label for="" id="t2">Teks 2</label>
        <textarea class="form-control" name="str2" id="" cols="50" rows="5"></textarea>
        </td>
    </tr>
    <tr>
       
        <td>
        <button type="submit" name="submit" class="form-control btn-success">Encrypted</button>
        </td>
    </tr>
</table>
</center>
</form>
</div>
<center>
<?php
 if(isset($_POST["submit"])){
    $string1 = $_POST['str1'];
    $string2 = $_POST['str2'];
    echo "Enkripsi Teks 1 : ";
    echo md5($string1);
    echo "<br>";
    echo "Enkripsi Teks 2 : ";
    echo md5($string2);
 }
?>
</center>    
</body>
</html>