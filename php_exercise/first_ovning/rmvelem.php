<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove an element and normalize integer key</title>
</head>

<body>
    <?php
    $x = array(1,2,3,4,5);
    var_dump($x);
    unset($x[3]);

    echo "<br>";

    $x = array_values($x);
    var_dump($x);
    
    ?>
</body>
</html>