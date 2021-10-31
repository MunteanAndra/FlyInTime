<?php
   session_start();

   $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");

   $mail=$_POST['email'];
   $password=$_POST['password'];

   if(isset($_POST['confirm']))
   {
    $sql="select * from loginform where email='$mail'AND password='$password'";
    $result=mysqli_query($connect,$sql);
    $row=$result->fetch_assoc();

    if($row['password']==$password)
    {
        $_SESSION['email']=$mail;
        $_SESSION['userlogged']=true;
        header("Location:../HomePage/home.php");
    }
    else{
        
        $_SESSION['msg_type']="danger";
        $_SESSION['loginmessage']="Password or email is inncorect.";
        header("Location:login.php");
    }
 }

    if(isset($_POST["register"]))
        {
            header('Location:../RegisterPage/register.php');
        }
?>