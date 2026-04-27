<?php
$numberedString = "1234567890123456789012345678901234567890";
$fivePos = strpos($numberedString, "5");
echo "The position of 5 in our string was $fivePos";
$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
echo "<br>The position of the second 5 was $fivePos2";



echo "<br><br> tanpa menggunakan keyword strpos";
$numberedString = "1234567890123456789012345678901234567890";
$positions = [];

// Melakukan looping untuk mengecek setiap karakter
for ($i = 0; $i < strlen($numberedString); $i++) {
    if (substr($numberedString, $i, 1) === "5") {
        $positions[] = $i; // Simpan posisi indeks jika ditemukan angka "5"
    }
}

$fivePos = $positions[0];
echo "<br>The position of 5 in our string was $fivePos";

$fivePos2 = $positions[1];
echo "<br>The position of the second 5 was $fivePos2";