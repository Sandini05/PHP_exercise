<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort colors</title>
</head>

<body>
    <?php
    $color = array('white', 'green', 'red');
    sort($color);

    $color_length = count($color);
    for($x = 0; $x < $color_length; $x++){
        echo $color[$x];
        echo "<br>";
    }
    
    ?>    
</body>
</html>