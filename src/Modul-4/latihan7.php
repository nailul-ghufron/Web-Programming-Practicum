<?php
$brush_price = 5;

// --- VERSI FOR ---
echo "<h3 align='center'>Versi FOR (Increment 10)</h3>";
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th><th>Price</th></tr>";

for ($counter = 10; $counter <= 100; $counter += 10) {
    echo "<tr><td>$counter</td><td>" . ($brush_price * $counter) . "</td></tr>";
}
echo "</table>";

echo "<hr>"; // Pembatas garis

// --- VERSI WHILE ---
echo "<h3 align='center'>Versi WHILE (Increment 5)</h3>";
$counter = 10; 
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th><th>Price</th></tr>";

while ($counter <= 100) {
    echo "<tr><td>$counter</td><td>" . ($brush_price * $counter) . "</td></tr>";
    $counter += 5; 
}
echo "</table>";

echo "<hr>";

// --- VERSI DO-WHILE ---
echo "<h3 align='center'>Versi DO-WHILE (Increment 5)</h3>";
$counter = 10;
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th><th>Price</th></tr>";

do {
    echo "<tr><td>$counter</td><td>" . ($brush_price * $counter) . "</td></tr>";
    $counter += 5;
} while ($counter <= 100);
echo "</table>";
?>