<?php

    $key    = $_GET["key"];
    $nmfile = "enkripsi.txt";
    $fp     = fopen($nmfile,"r"); //membuka file enkripsi
    $isi    = fread($fp,filesize($nmfile));

    for($i=0;$i<strlen($isi);$i++){
        $kode[$i]=ord($isi[$i]); //merubah ASCII ke desimal
        $b[$i]=($kode[$i]-$key)%256; //proses enkripsi
        $c[$i]=chr($b[$i]); // merubah desimal ke ASCII
    }
    echo "kalimat ciphertext : ";
    for($i=0;$i<strlen($isi);$i++){
        echo $isi[$i];
    }
    echo "<br>";
    echo "hasil dekripsi : ";
    for($i=0;$i<strlen($isi);$i++){
        echo $c[$i];
    }
    echo "<br>";