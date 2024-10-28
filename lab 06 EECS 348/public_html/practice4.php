<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table Result</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 5px solid #000;
            padding: 10px;
            text-align: center;
            width: 50px;
            height: 50px;
        }
        th {
            background-color: white;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">Multiplication Table</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int)$_POST['number']; // converts the  input to an integer 

    echo "<table>";
    echo "<tr><th></th>"; // empty cell for top left corner copies the example 
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
} else {
    echo "<p style='text-align: center;'>No number was provided. Please try again..</p>";
}
?>

</body>
</html>
