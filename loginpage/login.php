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
    <style>
        .p1{
            font-family:"Lucida Console", "Courier New", monospace;
        }
        .p2{
            font-family:"Lucida Console", "Courier New", monospace;
        }
    </style>
    <body>
    <form method="POST">
       <p class="p1"><b>e-mail:</b></p> <input type="text" name="email"><br>
       <p class="p2"><b>password:</b></p> <input type="text" name="password"><br>
       <br><button type="submit" name="confirm">Confirm</button>
       <button type="submit" name="register">Go To Registration</button><br>
    </form>
    <div class="gifdiv">
       <img src="../gifs/245711_4e0da7eb414d4bc990969b1b4a516a7d~mv2.gif" height=40% width=40%></img>
    </div>
    </body>    
</html>


            