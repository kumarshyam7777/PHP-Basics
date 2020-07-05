<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers in PHP</title>
</head>

<body bgcolor="yellow">

    <h3>Numbers Example in PHP</h3>
    <?php

    echo  10 + 12, '<hr>';
    echo 10 * 12, '<hr>';
    $num = 15;
    $num *= 15;
    echo $num, '<hr>';
    echo pow(2, 4), '<hr>';
    echo abs(-145), '<hr>';
    $no = 144;
    echo "The square root of the $no : ", sqrt(144), '<hr>';
    echo " <h3> The maximum value between 2  nos 10 & 12 </h3> : ", max(12, 10);

    ?>

</body>

</html>

<style>
h3 {
    background-color: red;
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: blue;
}
</style>