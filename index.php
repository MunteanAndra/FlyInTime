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
    <style>
        .p1{
            font-family:"Lucida Console", "Courier New", monospace;
        }
        .p2{
            font-family:"Lucida Console", "Courier New", monospace;
        }
    </style>
    <body>
    <p class="p1"> <b>Welcome to our page!</b> </p>
    <p class="p2"> <b>You will fly in time with us</b> </p>
    <form action="" method="post"> <br>
        <input type="submit" name="login" value="Log in">
        <input type="submit" name="register" value="Registration">
    </form>
    <div class="divparent"> <img src="gifs/1628085117_338030_gif-url.gif"> </div>
    </body>    
</html>