<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count # of lines in a text file</title>
</head>

<body>
    <?php
    $filename = "test.txt";

    $lines = count(file($filename));
    echo $lines;
    ?>
</body>
</html>