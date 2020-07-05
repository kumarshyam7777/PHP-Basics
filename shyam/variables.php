<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable Examples</title>
</head>

<style>
h3 {

    color: red;
    background: blueviolet;

}

ol {
    color: darkgreen;
}
</style>

<body>
    <h3 style="color:red ;">PHP Variable Examples</h3>
    <?php

    $characterName = 'Shyam';
    $characterAge = 28;
    echo " <h3>There is a boy and his name is $characterName </h3> <hr>";
    echo "And his age is <em>$characterAge</em> <br> <br> ";
    echo "$characterName 's hobbies are 
    <ol>
    <li>Playing Cricket</li>
    <li>Playing Chess</li>
    <li>Listening Music</li>
    <li>Coding</li>
    </ol>";



    ?>
</body>

</html>