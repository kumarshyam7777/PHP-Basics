<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array in PHP </title>
</head>

<body bgcolor="blue">
    <h3>Associative Arrays in PHP</h3>

    <?php
    $friends_Name = array(
        'name1' => 'Sindhu',
        'name2' => 'Shivani',
        'name3' => 'Sugandha',
        'name4' => 'Mudita'

    );


    print_r($friends_Name);

    echo '<hr>';
    var_dump($friends_Name);

    ?>



</body>

</html>

<style>
h3 {
    background-color: green;
}
</style>