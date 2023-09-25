<?php
function removeEvenNumbers(&$numbers) {
    $numbers = array_filter($numbers, function ($value) {
        return $value % 2 != 0; // Keep only odd numbers
    });
}

// Create the initial array
$numbers = range(1, 10);

// Call the function to remove even numbers
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);
