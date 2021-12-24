<?php
//mendefinisikan plaintext -> $kalimat
//mendefinisikan kunci
    $kalimat    = $_GET["kata"];
    $kunci      = $_GET["key"];
//mengubah plaintext & kunci menjadi sebuah array
    $plaintext  = str_split($kalimat);
    $key        = str_split($kunci);
    $m          = count($key);
    $n          = count($plaintext);
    $bataskode  = 65;
    $bataslow   = 97;
    $encrypted_text = '';
//membuat perulangan sebanyak plaintext
    for($i=0; $i<$n; $i++){
//proses enkripsi
         $cipher[$i] = ord ($plaintext[$i]);
         if ($cipher[$i] >= 65 && $cipher[$i] <= 90){
             $encrypted_text .= chr (((ord($plaintext[$i])-$bataskode + ord($key[$i % $m])-$bataskode)%26)+$bataskode);
         }elseif($cipher[$i]>=97 && $cipher[$i]<=122){
             $encrypted_text.=chr(((ord($plaintext[$i])-$bataslow + ord($key[$i % $m])-$bataslow)%26)+$bataslow);
         }
    }
    echo "kalimat Asli : ";
    for($i=0;$i<strlen($kalimat);$i++){
        echo $kalimat[$i];
    }
    echo "<br>";
    echo "hasil enkripsi : ";
    // for($i=0;$i<strlen($kalimat);$i++){
    //     echo $c[$i];
    //     $hsl .= $c[$i];
    // }
    echo $encrypted_text;
    echo "<br>";
    //simpan data di file
    $fp = fopen("enkripsi.txt","w");
    fputs($fp,$encrypted_text);
    fclose($fp);