<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <link rel="stylesheet" href="">
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
        margin-right: 65%;
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

    table,th,td{

        border: 3px solid;
        border-radius: 8px;
        font-family: 'poppins',sans-serif;
        border-collapse: collapse;
        background-color: #a38f9cff;
    }

    label{
        font-family: 'poppins',sans-serif;
    }

    .editdata{
        margin-top: 20px;
        border: 3px solid;
        border-radius: 5px;
    }
    </style>
    <body>
        <?php
            require_once 'adminService.php';
             session_start();
        ?>     
    <form action="adminService.php" method="POST">
            <h1><a href="">FlyInTime-Admin</a></h1>
            <div class="direct">
            <nav>
                <ul>
                    <li><a href="add.php"><b>Add flights</a></li>
                    <li><a href="bookings.php"><b>Booked flights</a></li>
                    <li><a href="../HomePage/home.php"><b>Home</a></li>
                </ul>
            </nav> 
            </div>  
            
            <div>
               <?php
               $connect = mysqli_connect('localhost', 'root','');
               $config=mysqli_select_db($connect,'login');  
               
               $result=$connect->query("SELECT * FROM filghtsform") or die("unable to connect");
               ?> 
               <table  class="table">
                   <thead>
                       <tr>
                           <th>id</th>
                           <th>Departure date</th>
                           <th>From</th>
                           <th>To</th>
                           <th>Price</th>
                           <th>No of seats</th>
                           <th>Duration</th>
                           <th>Action</th>
                        </tr>   
                   </thead>
                   <?php
                        while($row=$result->fetch_assoc()):
                        ?>
                     <tr>
                         <td><?php echo $row['id']; ?> </td>
                         <td><?php echo $row['data']; ?> </td>
                         <td><?php echo $row['plecare']; ?> </td>
                         <td><?php echo $row['dest']; ?> </td>
                         <td><?php echo $row['price']; ?> </td>
                         <td><?php echo $row['seat']; ?> </td>
                         <td><?php echo $row['durata']; ?> </td>
                         <td>
                             <a href="admin.php?edit=<?php echo $row['id'];?>">Edit</a>
                             <a href="adminService.php?delete=<?php echo $row['id'];?>">Delete</a>
                        </td>    
                     </tr>   
                     <?php    
                     endwhile;
                     ?>
               </table>
            </div>  

            <div class="editdata">
            <input type="hidden" name="id" value="<?php echo $id;?>"> 
                <div class="date">
                        <label><b>Departure date</b></label>
                        <input type="datetime" value="<?php echo $data;?>" name="data">
                </div>
                <div class="dep">
                        <label><b>Departure</b></label>
                        <input type="text" value="<?php echo $plecare;?>" name="plecare">
                </div>
                <div class="destination">
                        <label><b>Destination</b></label>
                        <input type="text" value="<?php echo $dest;?>" name="dest">
                </div>
                <div class="price">
                        <label><b>Price</b></label>
                        <input type="text" value="<?php echo $price;?>" name="price">
                </div>
                <div class="seats">
                        <label><b>Number of seats</b></label>
                        <input type="text" value="<?php echo $seats;?>" name="seats">
                </div>
                <div class="duration">
                        <label><b>Duration</b></label>
                        <input type="text" value="<?php echo $durata;?>" name="durata">
                </div>
                <div>
                <button type="submit" name="confirm">Confirm</button>
                </div> 
            </div>        
        </form>
    </body>  
</html>         