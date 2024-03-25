<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check if file exists</title>
</head>
<body>
    <?php
    $file = "test.txt";

    if(file_exists($file)){
        echo $file . " exists!";
    }
    else{
        echo "No, $file doesn't exist";
    }
    
    ?>
</body>
</html>