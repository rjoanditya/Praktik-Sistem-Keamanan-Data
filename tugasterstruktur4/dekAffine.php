    <?php

    $kunci1     = $_GET["key1"];
    $kunci2     = $_GET["key2"];
    $nmfile     = "enkripsiAffine.txt";
    $fp         = fopen($nmfile,"r"); //membuka file enkripsi
    $isi        = fread($fp,filesize($nmfile));
    
    $bataskode  = 65;
    $a_inv      = 0;
    $flag       = 0;
    
    for($i=0; $i<26; $i++){
     $flag = ($kunci1*$i)%26;

     if($flag == 1){
         $a_inv = $i;
     }
    }
    
    for($i=0; $i<strlen($isi);$i++){
        $kode[$i]   = ord($isi[$i]);
        $b[$i]      = (($a_inv*(($kode[$i]-$bataskode)-$kunci2))%26);
        if($b[$i]<0){
            $b[$i] = 26-abs($b[$i]);
        }
        $hasil[$i]  = $b[$i]+$bataskode;
        $c[$i]      = chr($hasil[$i]);
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