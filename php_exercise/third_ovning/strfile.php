<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a string to a file</title>
</head>

<body>
    <?php
    $myfile = fopen("test.txt", "w") or die ("Unable to open file!");
    $text = "YAYYY!\n";

    fwrite($myfile,$text);
    fclose($myfile);

    echo "Success!";
    ?>
</body>
</html>