<?php var_dump($_POST) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Result simple form</title>
</head>
<body>
    <div class="container2">
    <!-- <?php var_dump($_POST) ?> -->
    <h1>The information entered is:</h1>
    Name: <?php echo $_POST["name"]; ?><br>
    Email: <?php echo $_POST["email"] ?> <br>
    </div>
</body>
</html>