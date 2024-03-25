<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number of days between two dates</title>
</head>

<body>
    <?php
    $current_date = time();
    $date = strtotime("2005-01-30");

    $difference = $current_date - $date;
    echo round($difference / (60 * 60 * 24)) . " days";
    ?>
</body>
</html>