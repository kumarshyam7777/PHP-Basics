<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator In PHP</title>
</head>

<body bgcolor="darkgreen">
    <form action="basiccalc.php" method="get">
        Number 1: <input type="number" name="num1"> <br> <br>
        Number 2: <input type="number" name="num2"> <br><br>
        Number 3: <input type="number" name="num3"> <br><br>
        Number 4: <input type="number" name="num4"> <br><br>
        <input type="submit">


    </form>
    Answer is addition of 2 nos : <?php echo $_GET['num1'] + $_GET['num2'] ?>
    <br>
    <hr>

    Answer is multiplication of 2 nos : <?php echo $_GET['num3'] * $_GET['num4'] ?>

</body>

</html>