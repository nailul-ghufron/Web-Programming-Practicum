<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    }
    // Memanggil dirinya sendiri secara rekursif [cite: 16, 356]
    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo "Bilangan ke-6 deret Fibonacci: " . fibonacci(6); // Output: 8
?>