<?php
   
   session_start();
     
    if(isset($_POST['book']))
        {
            $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");
            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $mail=$_POST['email'];
            $birth=$_POST['birth'];
            $sex=' '.$_POST['radio'];
            $dest=$_SESSION['fly'];
            $sql=$connect->query("insert into booking (fname,lname,email,birth,sex,dest) values ('$firstname','$lastname','$mail','$birth','$sex','$dest')") or die("unable to add");
            unset($_SESSION['fly']);
            header("Location:home.php");
        }


?>