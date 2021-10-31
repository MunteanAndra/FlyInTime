<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Booked Flights</title>
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
        <h1><a href="admin.php">FlyInTime-Admin</a></h1>
    <div>
       <?php
       $connect = mysqli_connect('localhost', 'root','');
       $config=mysqli_select_db($connect,'login');  
       
       $result=$connect->query("SELECT * FROM booking") or die("unable to connect");
       ?> 
       <table  class="table">
           <thead>
               <tr>
                   <th>id</th>
                   <th>First name</th>
                   <th>Last name</th>
                   <th>Email</th>
                   <th>Birth date</th>
                   <th>Gender</th>
                </tr>   
           </thead>
           <?php
                while($row=$result->fetch_assoc()):
                ?>
             <tr>
                 <td><?php echo $row['id']; ?> </td>
                 <td><?php echo $row['fname']; ?> </td>
                 <td><?php echo $row['lname']; ?> </td>
                 <td><?php echo $row['email']; ?> </td>
                 <td><?php echo $row['birth']; ?> </td>
                 <td><?php echo $row['sex']; ?> </td>
             </tr>   
             <?php    
             endwhile;
             ?>
       </table>
    </div>  
