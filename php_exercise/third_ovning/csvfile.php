<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV file</title>
</head>
<body>
    <?php
    $csvFile = fopen("data.csv", "r");

    echo "<table>";
    while(($data = fgetcsv($csvFile, 1000, ",")) !== FALSE){
        echo "<tr>";
        foreach($data as $value){
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($csvFile);
    ?>
</body>
</html>