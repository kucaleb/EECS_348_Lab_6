<?php
// Check if form is submitted and the 'size' field is set
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['size'])) {
        // Get the input value (size of the multiplication table)
        $size = intval($_POST['size']);

        // Generate the multiplication table
        echo "<h2>Multiplication Table of size $size</h2>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";

        // Create table rows
        for ($i = 0; $i <= $size; $i++) {
            echo "<tr>";
            // Create table columns
            for ($j = 0; $j <= $size; $j++) {
                if ($i == 0) {
                    if ($j == 0) {
                        echo "<td>n</td>";
                    } else {
                        echo "<td>" . $j . "</td>";
                    }
                } else if ($j == 0) {
                    echo "<td>" . $i . "</td>";
                } else {
                    echo "<td>" . ($i * $j) . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Invalid request.";
    }
?>