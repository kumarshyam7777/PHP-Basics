<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Games in PHP</title>
</head>

<body bgcolor="deeppink">
    <h3>Mad Libs Game in PHP</h3> <br>
    <form action="madlibs.php" method="get">
        <div class="form">
            Color : <input type="text" name="color"> <br>
            Plura Noun : <input type="text" name="pluralNoun"> <br>
            Character : <input type="text" name="character"> <br>
        </div>

        <input type="submit">

    </form>
    <br> <br>

    <hr>


    <?php
    $color = $_GET['color'];
    $pluralNoun = $_GET['pluralNoun'];
    $charater = $_GET['character'];


    echo "Roses are  $color <br>";
    echo " $pluralNoun are blue <br>";
    echo " I Love  $charater ";



    ?>

</body>

</html>