<?php
function pangkat($x, $y) {
    if ($y == 0) {
        return 1;
    }
    // x dikali dengan x pangkat (y-1) [cite: 357]
    return $x * pangkat($x, $y - 1);
}

echo "Hasil 2 pangkat 3: " . pangkat(2, 3); // Output: 8
?>