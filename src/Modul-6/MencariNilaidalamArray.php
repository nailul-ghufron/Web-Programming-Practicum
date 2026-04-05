<?php

// Pastikan tidak ada karakter aneh sebelum tanda titik dua
function cari($array, $cari): bool {
    foreach ($array as $item) {
        if ($item == $cari) {
            return true;
        }
    }
    return false;
}

// Data untuk testing
$daftar_negara = ['Indonesia', 'Brazil', 'Malaysia', 'Afghanistan'];

// Uji coba 1: Data ada
$check1 = cari($daftar_negara, 'Indonesia');
echo "Apakah Indonesia ada? " . ($check1 ? "True" : "False") . "<br>";

// Uji coba 2: Data tidak ada
$check2 = cari($daftar_negara, 'Japan');
echo "Apakah Japan ada? " . ($check2 ? "True" : "False") . "<br>";