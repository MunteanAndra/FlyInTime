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
    <style>
        .p1{
            font-family:"Lucida Console", "Courier New", monospace;
        }
        .p2{
            font-family:"Lucida Console", "Courier New", monospace;
        }
        .p3{
            font-family:"Lucida Console", "Courier New", monospace;
        }
        .p4{
            font-family:"Lucida Console", "Courier New", monospace;
        }
        .p5{
            font-family:"Lucida Console", "Courier New", monospace;
        }
    </style>
    <body>
    <div class="giphy">
        <img src= ></img>
    </div>
    <form method="POST">
       <p class="p1"><b>First Name</b></p> <input type="text" name="first name"><br>
       <p class="p2"><b>Last Name</b></p> <input type="text" name="last name"><br>
       <p class="p3"><b>E-mail:</b></p> <input type="text" name="email"><br>
       <p class="p4"><b>Password:</b></p> <input type="text" name="password"><br>
       <p class="p5"><b>Confirm Password:</b></p> <input type="text" name="confirm password"><br>
       <br>
       <button type="submit" name="confirm">Submit</button>
       <button type="submit" name="login">Go To Login</button>
    </form>
    
    </body>    
</html>


