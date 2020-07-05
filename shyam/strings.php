<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String In Detail</title>
</head>

<body bgcolor="cyan">

    <h3 style="color: red ;">String in PHP</h3>

    <?php

    $phrase = "Giraff Academy";

    echo strtolower($phrase), "<hr>";
    echo strtoupper($phrase), "<hr>";
    echo strlen($phrase), "<hr>";
    echo $phrase[0], "<hr>";
    echo "Shyam"[0], '<hr>';
    echo str_replace("Giraff", "Pandas", $phrase), '<hr>';
    echo substr($phrase, 7), "<hr>";
    echo substr($phrase, 7, 4);






    ?>

</body>

</html>