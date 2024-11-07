<?php
// Define pricing options
$prices = [
    'small' => [
        'seidenmatt' => '5,99 Euro',
        'hochglanz' => '10,99 Euro',
        'leinwand' => '19,99 Euro'
    ],
    'medium' => [
        'seidenmatt' => '20,00 Euro',
        'hochglanz' => '28,99 Euro',
        'leinwand' => '34,99 Euro'
    ],
    'large' => [
        'seidenmatt' => '35,00 Euro',
        'hochglanz' => '45,99 Euro',
        'leinwand' => '49,99 Euro'
    ],
    'extra_large' => [
        'seidenmatt' => '50,00 Euro',
        'hochglanz' => '60,99 Euro',
        'leinwand' => '74,99 Euro'
    ]
];

// Retrieve size and option from the URL
$size = $_GET['size'] ?? '';
$option = $_GET['option'] ?? '';

// Output the corresponding price if it exists
if (isset($prices[$size][$option])) {
    echo $prices[$size][$option];
} else {
    echo "Preis nicht verfügbar";
}
?>
