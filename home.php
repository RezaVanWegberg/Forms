<?php
    $error = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){


        foreach($_POST as $key => $value){
            if (!$value) {
                $error[$key] = "$key is niet ingevuld";
            }
        };
    } else {
    };
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Document</title>
</head>

    <body>
    <div class="container">

    <?php  if ($_SERVER['REQUEST_METHOD'] == "GET" || !empty($error)) { ?>
            
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("name", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

            </p>
            <p>
                <label for="Email">Email :</label>
                <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                <span style="color:red">*</span>
                <?php if(array_key_exists("email", $error)){ ?>
                    <p style="color:red"> je hebt dit veld niet ingevuld </p>
                <?php } ?>

            </p>
            <input id="submit" type="submit" value="submit">
        </form>

        <?php }  else { ?>            
        <?php
        echo "<h2>Your Input:</h2>";
        echo "Your name: ";
        echo $_POST['name'];
        echo "<br>";
        echo "Your email: ";
        echo $_POST['email'];
        ?>

            </div>
        <?php } ?> 

        </div>
    </body>
</html>