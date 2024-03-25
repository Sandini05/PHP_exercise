<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First and last day of a month</title>
</head>

<body>
    <?php
    $date = "2024-03-20";

    echo "First day: ". date('Y-m-01', strtotime($date)) . "<br>";
    echo "Last day: " . date('Y-m-t', strtotime($date));
    
    
    ?>    
</body>
</html>