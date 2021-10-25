<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Page</title>
        <link rel="stylesheet" href="../styles/registerStyle.css">

    </head>
    <style>
        .p1, .p2, .p3, .p4, .p5{
            font-family:'poppins',sans-serif;
        }
        input[type=text] {
            border: 2px solid;
            border-radius: 4px;
            padding: 9px 47px;;
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

        .giphy{

            height: auto;
            width: auto;
        }

        body{
            height: auto;
            width: auto;
            margin: 90px;
            margin-bottom: 100px;
            display: grid;
            justify-items: center;
            background-color: #f4f1deff;
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
    <div class="giphy">
        <img src="../gifs/sign-up-baloon-big.png"></img>
    </div>
    <form action="registerService.php" method="POST">
       <h1><a href="../index.php">FlyInTime</a></h1>
       <p class="p1"><b>First Name</b></p> <input type="text" name="firstname"><br>
       <p class="p2"><b>Last Name</b></p> <input type="text" name="lastname"><br>
       <p class="p3"><b>E-mail</b></p> <input type="text" name="email"><br>
       <p class="p4"><b>Password</b></p> <input type="text" name="password"><br>
       <br>
       <button type="submit" name="confirm">Submit</button>
       <button type="submit" name="login">Go To Login</button>
    </form>
    
    </body>    
</html>


