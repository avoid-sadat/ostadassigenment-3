<?php
function sortGradesDescending($grades) {
    rsort($grades); // Sort the array in descending order
    return $grades; // Return the sorted array
}

// Create the initial array
$grades = [85, 92, 78, 88, 95];

// Call the function to sort grades in descending order and store the result
$sortedGrades = sortGradesDescending($grades);

// Print the sorted grades
print_r($sortedGrades);
