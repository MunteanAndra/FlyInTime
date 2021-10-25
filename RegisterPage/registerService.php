<?php 
        session_start();

        $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");  

        $mail=$_POST['email'];
        $password=$_POST['password'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $role="user";

        if(isset($_POST['confirm']))
        {
            $test="select * from loginform where email='$mail'AND password='$password'";
            $result=mysqli_query($connect,$test);
            $row=$result->fetch_assoc();

            if($row['email']!=$mail)
            {
                $sql="insert into loginform (email,password,fname,lname,role) values ('$mail','$password','$firstname','$lastname','$role')";
                $query=mysqli_query($connect,$sql);
                header('Location:../HomePage/home.php');
            }
            else
            echo "nu merge";
        }

        if(isset($_POST["login"]))
        {
            header('Location:../loginpage/login.php');
        }

?>