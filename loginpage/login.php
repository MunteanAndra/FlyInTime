<?php   
        if(isset($_POST["register"]))
        {
            
            header('Location:../RegisterPage/register.php');
        }

    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="../styles/loginStyle.css">

    </head>
    <body>
    <form method="POST">
       <p>e-mail:</p> <input type="text" name="email"><br>
       <p>password:</p> <input type="text" name="password"><br>
       <button type="submit" name="confirm">Confirm</button>
       <button type="submit" name="register">Go To Registration</button>
    </form>

    </body>    
</html>


            