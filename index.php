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
        body{
            height: auto;
            width: auto;
            margin: 170px;
            margin-bottom: 100px;
            display: grid;
            justify-items: center;
            background-color: #f4f1deff;
        }

        input[type=button], button[type=submit], input[type=submit]{
           background-color: white;
           padding: 14px 30px;
           text-decoration: none;
           margin: 4px 2px;
           cursor: pointer;
           border: 2px solid;
           border-radius: 4px;
        }

        h1 a{
            color: black;
            text-decoration: none;
        }

        .p1,.p2 {
            font-family:'poppins',sans-serif;
            font-size: 18px;
        }
    </style>
    <body>

       <!-- <nav>
            <ul>
                <li><a href="" >Home</a></li>
                <li><a href="" >About</a></li>
                <li><a href="" >Contact</a></li>
                <li><a href="" >Account</a></li>
            </ul>
        </nav> -->
    <h1><a href="index.php">FlyInTime</a></h1>
    <p class="p1"> <b>Welcome to our page!</b> </p>
    <p class="p2"> <b>You will fly in time with us!</b> </p>
    <form action="" method="post"> 
        <input type="submit" name="login" value="Log in">
        <input type="submit" name="register" value="Registration">
    </form>
    <div class="divparent"> <img src="gifs/1628085117_338030_gif-url.gif"> </div>
    </body>    
</html>