<?php
$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
];

echo "Hasil asort (Urut nilai A-Z):<br>";
asort($kode);
print_r($kode);
echo "<br><br>";

echo "Hasil arsort (Urut nilai Z-A):<br>";
arsort($kode);
print_r($kode);
echo "<br><br>";

echo "Hasil ksort (Urut kunci A-Z):<br>";
ksort($kode);
print_r($kode);
echo "<br><br>";

echo "Hasil krsort (Urut kunci Z-A):<br>";
krsort($kode);
print_r($kode);
?>