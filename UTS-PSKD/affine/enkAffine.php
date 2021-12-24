<?php
$kalimat = $_GET["kata"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];

for ($i = 0; $i < strlen($kalimat); $i++) {
    $kode[$i] = ord($kalimat[$i]); // Mengubah plaintext ke Desimal
    // Rumus Asli ($kunci1 + $kunci2 % 256)
    $b[$i] = ((($kunci1 * ($kode[$i] - 65)) + $kunci2) % 26) + 65; //Perhitungan kunci dan plaintext
    $c[$i] = chr($b[$i]); // Mengubah Desimal ke ASCII
}

echo "Kalimat asli : ";
for ($i = 0; $i < strlen($kalimat); $i++) {
    echo $kalimat[$i];
}
echo "<br>";
echo "Hasil enkripsi : ";
$hsl = '';
for ($i = 0; $i < strlen($kalimat); $i++) {
    echo $c[$i];
    $hsl = $hsl . $c[$i];
}
echo "<br>";
echo "<br>";

//simpan data di file
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);
fclose($fp);