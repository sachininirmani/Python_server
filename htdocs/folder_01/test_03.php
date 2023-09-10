<?php
// Check if exactly two arguments (numbers) were provided
if ($argc !== 3) {
    echo "Usage: php add_numbers.php <number1> <number2>\n";
    exit(1);
}

// Get the two numbers as command-line arguments
$num1 = $argv[1];
$num2 = $argv[2];

// Check if the provided arguments are valid numbers
if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Invalid input. Please provide valid numeric values.\n";
    exit(1);
}

// Perform the addition
$result = $num1 + $num2;

// Display the result
echo "Result: $result\n";
?>
