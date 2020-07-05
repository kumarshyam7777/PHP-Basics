<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get User Input</title>
</head>

<body>
    <h3>HTML Form</h3>


    <form action="" method="get">
        <div>
            <label>Name:</label> <br>
            <input type="text" name="name"> <br>
            <label for="">Age</label> <br>
            <input type="number" name="age" id=""> <br>
            <input type="submit">
        </div>

    </form>
    <br>
    Your Name is: <?php echo $_GET['name'] ?>
    <br>
    Your age is: <?php echo $_GET['age'] ?>







</body>

</html>