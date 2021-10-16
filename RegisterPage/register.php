<?php   
        if(isset($_POST["login"]))
        {
            header('Location:../loginpage/login.php');
        }

    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Page</title>
        <link rel="stylesheet" href="../styles/registerStyle.css">

    </head>
    <body>
    <form method="POST">
       <p>First Name</p> <input type="text" name="first name"><br>
       <p>Last Name</p> <input type="text" name="last name"><br>
       <p>E-mail:</p> <input type="text" name="email"><br>
       <p>Password:</p> <input type="text" name="password"><br>
       <p>Confirm Password:</p> <input type="text" name="confirm password"><br>
       <button type="submit" name="confirm">Submit</button>
       <button type="submit" name="login">Go To Login</button>
    </form>

    </body>    
</html>


