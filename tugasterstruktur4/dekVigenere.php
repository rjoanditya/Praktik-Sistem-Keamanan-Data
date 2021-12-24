<?php

    $key      = $_GET["key"];
    $nmfile     = "enkripsi.txt";
    $fp         = fopen($nmfile,"r"); //membuka file enkripsi
    $isi        = fread($fp,filesize($nmfile));
    $encrypted_text = str_split($isi);
    $n          = count($encrypted_text);
    $kunci      = str_split($key);
    $m          = count($kunci);
    $bataskode  = 65;
    $bataslow   = 97;
    
    for($i=0; $i<$n; $i++){
     $decrypted_text[$i] = ord($encrypted_text[$i]);
     if ($decrypted_text[$i] >= 65 && $decrypted_text[$i] <=90){
         $decrypted_text[$i] = (($decrypted_text[$i] - (ord($kunci[$i % $m])))%26+$bataskode);
         if($decrypted_text[$i]<65){
             $decrypted_text[$i] += 26;
         }
     }elseif ($decrypted_text >= 97 && $decrypted_text <= 122){
         $decrypted_text[$i] = (($decrypted_text[$i]-(ord($kunci[$i % $m])))%26)+$bataslow;
         if ($decrypted_text[$i<97]){
             $decrypted_text[$i] += 26;
         }
     }
    }


    echo "kalimat ciphertext : ";
    for($i=0;$i<strlen($isi);$i++){
        echo $isi[$i];
    }
    echo "<br>";
    echo "hasil dekripsi : ";
    for($i=0;$i<strlen($isi);$i++){
        echo chr($decrypted_text[$i]);
    }
    echo "<br>";