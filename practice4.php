<?php
// Check if form is submitted and the 'size' field is set
if ($_SERVER["REQUEST_METHOD"] == "post" && isset($_POST['size'])) {
    // Get the input value (size of the multiplication table)
    $size = intval($_POST['size']);

    // Basic validation: Check if input is positive
    if ($size <= 0) {
        echo "Please enter a valid positive integer.";
        exit;
    }

    // Generate the multiplication table
    echo "<h2>Multiplication Table of size $size</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    // Create table rows
    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        // Create table columns
        for ($j = 1; $j <= $size; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Invalid request.";
}
?>