<?php
function calculateAverageGrades($studentGrades) {
    $averages = [];
    
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        $averages[$student] = $average;
    }
    
    return $averages;
}

// Create the multidimensional array $studentGrades
$studentGrades = [
    'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student 3' => ['Math' => 75, 'English' => 82, 'Science' => 88],
];

// Call the function to calculate average grades and store the result
$averageGrades = calculateAverageGrades($studentGrades);

// Print the average grades for each student
foreach ($averageGrades as $student => $average) {
    echo "$student: Average Grade = $average\n";
}
