 <?php   
        if(isset($_POST["login"]))
        {
            header('Location:loginpage/login.php');
        }
        if(isset($_POST["register"]))
        {
            header('Location:RegisterPage/register.php');
        }

    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fly In Time - Home Page</title>
        <link rel="stylesheet" href="styles/indexStyle.css">

    </head>
    <body>
    <p>Welcome to our page!</p>
    <p>You will fly in time with us</p>
    <form action="" method="post">
        <input type="submit" name="login" value="Log in">
        <input type="submit" name="register" value="Registration">
    </form>
    </body>    
</html>