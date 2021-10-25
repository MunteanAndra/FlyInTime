<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="../styles/loginStyle.css">

    </head>
    <style>
        .p1,.p2{
            font-family:'poppins',sans-serif;
        }
        
        input[type=text] {
            border: 2px solid;
            border-radius: 4px;
            padding: 9px 68px;;
        }

        input[type=button], button[type=submit] {
           background-color: white;
           padding: 16px 32px;
           text-decoration: none;
           margin: 4px 2px;
           cursor: pointer;
           border: 2px solid;
           border-radius: 4px;
        }

        h1{
            font-family: 'poppins',sans-serif;
            margin-right: 105%;
            position: absolute;
            top: 8px;
            left: 16px;
        }

        h1 a{
            color: black;
            text-decoration: none;
        }
    </style>
    <body>
        
    <form action="loginService.php" method="POST" id="formlogin">
       <h1><a href="../index.php">FlyInTime</a></h1>
       <p class="p1"><b>e-mail</b></p> <input type="text" name="email"><br>
       <p class="p2"><b>password</b></p> <input type="text" name="password"><br>
       <br><button type="submit" name="confirm">Confirm</button>
       <button type="submit" name="register">Go To Registration</button><br>
    </form>
    <div class="gifdiv">
       <img src="../gifs/245711_4e0da7eb414d4bc990969b1b4a516a7d~mv2.gif" height=40% width=40%></img>
    </div>
    </body>    
</html>


            