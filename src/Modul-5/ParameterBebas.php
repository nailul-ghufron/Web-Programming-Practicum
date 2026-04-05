<?php
function get_max() {
    // Mendapatkan semua parameter yang dikirimkan
    $args = func_get_args(); // 
    
    if (func_num_args() == 0) { // 
        return "Tidak ada parameter";
    }

    $max = $args[0]; // Asumsikan elemen pertama adalah yang terbesar
    
    foreach ($args as $arg) {
        if ($arg > $max) {
            $max = $arg;
        }
    }
    
    return $max;
}

echo get_max(10, 20) . "<br>";          // Output: 20 [cite: 348]
echo get_max(10, 20, 30) . "<br>";      // Output: 30 [cite: 350]
echo get_max(10, 20, 30, 40) . "<br>";  // Output: 40 [cite: 353]
?>