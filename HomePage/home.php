<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page </title>
        <link rel="stylesheet" href="../styles/homeStyle.css">
    </head>

    <style>
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

    .direct{
        margin-left: 68%;
        position: absolute;
        top: 14px;
        left: 16px;
    }

    nav{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav ul li{
        display: inline-block;
        list-style: none;
        margin: 10px 30px;
    }

    nav ul li a{
        color: black;
        text-decoration: none;
        font-family: 'poppins',sans-serif;
    }
    </style>

    <body>
        <form action="" method="POST">
            <h1><a href="../index.php">FlyInTime</a></h1>
            <div class="direct">
            <nav>
                <ul>
                    <li><a href="contact.php"><b>Contact</a></li>
                    <li><a href="about.php"><b>About</a></li>
                    <li><a href="../index.php"><b>Sign Out</a></li>
                </ul>
            </nav> 
            </div>   
        </form>
    </body>

</html>        