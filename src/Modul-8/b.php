<?php
$string = "Program Studi.Teknik.Informatika.UIN Maliki Malang";
$hasil = explode(".", $string);

// Menggunakan json_encode agar formatnya [ "teks", "teks" ]
echo json_encode($hasil);
?>
