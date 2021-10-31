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
        margin-left: 55%;
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

    html{
        box-sizing: border-box;
    }

    *, *:before, *:after{
        box-sizing: inherit;
    }
    
    .column{
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0px 8px;
    }

    .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        border: 1px solid;
        border-radius: 8px;
        background-color: white;
        transition: transform 0.5s;
    }

    .card:hover{
        transform: translateY(-10px);
    }
    
    .container{
        padding: 0 32px;
    }
    
    .container::after, .row::after{
        content: "";
        clear: both;
        display: table;
    }
    
    .button{
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: black;
        text-align: center;
        cursor: pointer;
        width: 100%;
        text-decoration: none;
        align: center;
        font-family: 'poppins',sans-serif;
    }
    
    .button:hover{
        background-color: #555;
    }

    .a{
        color: black;
        text-decoration: none;
        font-family: 'poppins',sans-serif;
    }

    p{
        font-family:'poppins',sans-serif;
    }

    .special{
        width: 10%;
        height: 10%;
    }

    .special1{
        width: 10%;
        height: 10%;
        margin-left: 20px;
    }

    hr{
        border: 1px solid;
        border-radius: 3px;
    }

    @media screen and (max-width: 650px){
        .column {
            width: 100%;
            display: block;
        }
    
    }

    .alert {
            padding: 20px;
            background-color: #04AA6D;
            color: white;
        }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }

    </style>

    <body>
    <?php
        session_start();
        if(isset($_SESSION['bookingmessage']))
        { ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Thank you!</strong>  <?php echo $_SESSION['bookingmessage']; ?>
            </div>
        <?php    
            
            unset($_SESSION['bookingmessage']);
        }
    ?>
        <form action="" method="POST">
            <h1><a href="../index.php">FlyInTime</a></h1>
            <div class="direct">
            <nav>
                <ul>
                    <?php
                        session_start();
                        $mail=$_SESSION['email'];
                        $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");
                        $result=mysqli_query($connect,"SELECT rol from loginform where email='$mail'")or die("unable to connect");
                        $row=mysqli_fetch_row($result);
                        $user_role=$row[0]; 
                        if($user_role=="administrator"){
                             echo '<li><a href="../Admin/admin.php"><b>Dashboard</a></li>';
                        }
                    ?>
                    <li><a href="contact.php"><b>Contact</a></li>
                    <li><a href="about.php"><b>About</a></li>
                    <li><a href="end.php"><b>Sign Out</a></li>
                </ul>
            </nav> 
            </div>   
        </form>

        <?php
            
            $connect = mysqli_connect('localhost', 'root','');
            $config=mysqli_select_db($connect,'login');  
            $result=$connect->query("SELECT * FROM filghtsform") or die("unable to connect");

            while($row=$result->fetch_assoc()):  
        ?>
            <div class="column">
                <div class="card">
                        <img src="../gifs/<?php echo $row['photo'];?>"style="width:100%">
                        <div class="container">
                            <p>From  <img class="special" src="../gifs/--global-globe-plane-travel-worldwide-icon--icon-search-engine-1.png">  <?php echo $row['plecare']; ?></p>
                            <p>To  <img class="special" src="../gifs/--global-globe-plane-travel-worldwide-icon--icon-search-engine-1.png">  <?php echo $row['dest']; ?></p>
                            <hr>
                            <p>Departure date <?php echo $row['data']; ?></p>
                            <p><?php echo $row['price']; echo " for booking now";?></p>
                            <p><?php echo $row['seat']; ?> available</p>
                            <p>Duration <?php echo $row['durata'];?><img class="special1" src="../gifs/baggage-travel-icon-png-0.png"></p>
                            <a class="button" href="flights.php?add=<?php echo $row['id'];?>">BOOK</a>
                        </div>
                </div>
            </div>
                    
        <?php endwhile; ?>
       
   </body>

</html>        