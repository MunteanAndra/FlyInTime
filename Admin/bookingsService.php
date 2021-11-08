<?php 
        session_start();

        $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");  

        if(isset($_GET['delete']))
        {
            $id=$_GET['delete'];
            
            $result=$connect->query("DELETE from booking WHERE id='$id'")or die("unable to delete");
            
            header('Location:bookings.php');
        }

        if(isset($_GET['edit']))
        {
            $id=$_GET['edit'];
            $result=$connect->query("SELECT * from booking WHERE id='$id'")or die("unable to select");
            
            if($result->num_rows!=0)
            {
                $row=$result->fetch_array();
                $fname=$row['fname']; 
                $lname=$row['lname'];
                $email=$row['email']; 
                $birth=$row['birth']; 
                $sex=$row['sex']; 
            }

        }

        if(isset($_POST['confirm']))
        {
            $id=$_POST['id']; 
            $fname=$_POST['fname']; 
            $lname=$_POST['lname'];
            $email=$_POST['email']; 
            $birth=$_POST['birth']; 
            $sex=$_POST['sex']; 
            $connect->query("UPDATE booking SET fname='$fname',lname='$lname',email='$email',birth='$birth',sex='$sex' WHERE id='$id'");
            header("Location:bookings.php");
        }
?>        
