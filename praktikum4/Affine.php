<?php
$kalimat = $_GET["kata"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];
$plaintext1  = str_split($kunci1);
$plaintext2  = str_split($kunci2);

for($i=0;$i<strlen($kalimat);$i++){
    $kode[$i]=ord($kalimat[$i]);

    //merubah ascii ke desimal
    $b[$i]=(($kunci1*$kode[$i]-65 ) + $kunci2) % 26+65;
    //rubah desimal ke ASCII
    $c[$i]=chr($b[$i]);
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
$fp = fopen("enkripsiAffine.txt","w");
fputs($fp,$hsl);
fclose($fp);