<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body bgcolor="skyblue">

    <h3>Arrays in PHP</h3>

    <?php
    $friends = array("Sugandha", "Mudita", "Megha", "Sindhu", "Shivani");

    $friends[5] = "Shakshi";

    $friends[0] = "Himani";

    echo $friends[0] . "<br>";
    echo $friends[1] . "<br>";
    echo $friends[2] . "<br>";
    echo $friends[3] . "<br>";
    echo $friends[4] . "<br>";
    echo count($friends), '<br>';

    var_dump($friends);

    echo '<hr>';
    print_r($friends) . '<hr>';
    ?>

</body>

</html>