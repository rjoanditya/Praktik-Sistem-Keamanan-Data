<?php

    $kalimat    = $_GET["kata"];
    $key        = $_GET["key"];
    for($i=0; $i<strlen($kalimat);$i++){
        $kode[$i]   = ord($kalimat[$i]); //merubah ASCII ke desimal output number
        function geserHurufbesar($kode){
            if ($kode < 65){
                $ascii = 91-(65 - $kode);
            }
            if ($kode >90){
                $ascii = ($kode - 90)+64;
            }
            return $ascii;
        }
        
        $b[$i]      = ($kode[$i] + $key) % 256; //proses enkripsi
        // $kode = pi (karakter plaintext ke-i)
        // $key  = k (kunci rahasia)
        $c[$i]      = chr($b[$i]); // merubah desimal ke ASCII
    }

    echo "kalimat Asli : ";
    for($i=0;$i<strlen($kalimat);$i++){
        echo $kalimat[$i];
    }
    echo "<br>";
    echo "hasil enkripsi : ";
    $hsl = '';
    for($i=0;$i<strlen($kalimat);$i++){
        echo $c[$i];
        $hsl .= $c[$i];
    }
    echo "<br>";
    //simpan data di file
    $fp = fopen("enkripsi.txt","w");
    fputs($fp,$hsl);
    fclose($fp);