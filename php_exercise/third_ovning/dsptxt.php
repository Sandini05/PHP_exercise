<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display content from text file</title>
</head>

<body>
    <?php

    $myfile = fopen("test.txt", "r") or die ("Unable to open file!");
    echo fread($myfile,filesize("test.txt"));
    fclose($myfile);
    
    ?>
</body>
</html>