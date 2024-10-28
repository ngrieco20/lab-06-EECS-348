<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    echo "<h2>Multiplication Table up to $number</h2>";
    echo "<table>";
    echo "<tr><th>X</th>"; // header for row indexes
    for ($i = 1; $i <= $number; $i++) {
        echo "<th>$i</th>"; // column headers
    }
    echo "</tr>";

    // generates multiplication table 
    for ($i = 1; $i <= $number; $i++) {
        echo "<tr><th>$i</th>"; // row header
        for ($j = 1; $j <= $number; $j++) {
            echo "<td>" . ($i * $j) . "</td>"; // table data
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
