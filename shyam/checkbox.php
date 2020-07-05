<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="" content="">
    <title>Check Boxes in PHP</title>
</head>

<body bgcolor="blue">
    <h3>CheckBoxes Input </h3>
    <form class="" action="checkbox.php" method="post">

        Apples : <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges : <input type="checkbox" name="fruits[]" value="ornges"> <br>
        Cherry : <input type="checkbox" name="fruits[]" value="cherry"> <br>
        <input type="submit">


    </form>
    <?php
  $fruits = $_POST['fruits'];
  echo $fruits[0];

  ?>

</body>

</html>