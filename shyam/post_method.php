<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method in PHP</title>
</head>

<body bgcolor="magenta">

    <h3>Post Method in PHP</h3>
    <hr>
    <form action="post_method.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <?php


    echo "<h4>Your Password is: </h4> ", $_POST["password"];

    ?>

</body>

</html>