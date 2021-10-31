<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Booking Page </title>
        <link rel="stylesheet" href="../styles/flitghtStyle.css">
    </head>
    <style>
    body{
            height: 100%;
            margin: 15%;
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

    .info {
        width: 450px;
        height: 600px;
        padding: 10px;
        border: 5px solid gray;
        margin: 0;
        border: 2px solid;
        border-radius: 4px;
        margin-top: 0;
    }

    h2,h3,span,label{
        font-family: 'poppins',sans-serif;
        text-align: center;
    }

    h3{
        padding: 10px;
    }

    p{
        font-family:'poppins',sans-serif;
        text-align: left;
    }

    input[type=text]{
    align: center;
    border: 2px solid;
    border-radius: 4px;
    padding: 9px 47px;;
    }

    input[type=button], button[type=submit],input[type=date] {
    align: center;
    background-color: white;
    padding: 12px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border: 2px solid;
    border-radius: 4px;
    }

    button[type=submit]{
        align: center;
        margin-left: 35%;
        margin-top: 30px;
    }
    
    </style>    
    <body>
    <form action="homeService.php" method="POST">
        <h1><a href="home.php">FlyInTime</a></h1>  
        <div class="info">
                 
                <h2>You are a step away from the airport!</h2>
                <h3><b>Write down your contact info</b></h3>
                <p><b>First Name</b></p> <input type="text" name="firstname"><br></p>
                <p><b>Last Name</b></p> <input type="text" name="lastname"><br></p>
                <p><b>E-mail</b></p> <input type="text" name="email"><br></p>
                
                <div class="date">
                    <label><b>Birth Date</b></label>
                    <input type="date" class="select_date" name="birth">
                </div>
                <br>
                <div class="radio">
                    <input type="radio" class="cec" value="female" name="radio"><span><b>Female</b></span>
                    <input type="radio" class="cec" value="male" name="radio"><span><b>Male</b></span>
                </div>
                <button type="submit" name="book"><b>Book Now<b></button>
            </div>  
    </form>     
    </body>  
</html>     
<?php
    session_start();
    isset($_GET['add']);
    $id=$_GET['add'];
     
    $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");
    $result=$connect->query("Select * from filghtsform where id='$id'");
    $row=$result->fetch_assoc();
    //$_SESSION['fly']=$row['dest'];
    $fly=$row['dest'];
    $_SESSION['fly']=$row['dest'];
   
    

?>