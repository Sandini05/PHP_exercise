<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse date format</title>
</head>

<body>
    <?php
    $date = '2012-09-12';

    $rev_date = date("d-m-Y", strtotime($date));

    echo $rev_date;
    ?>
</body>
</html>