<?php 
        session_start();

        $connect = mysqli_connect('localhost', 'root','', 'login') or die("unable to connect");  

        

        if(isset($_POST['add']))
        {
            $photo=$_POST['photo'];
            $data=$_POST['data'];
            $plecare=$_POST['plecare'];
            $dest=$_POST['dest'];
            $price=$_POST['price'];
            $seats=$_POST['seats'];
            $durata=$_POST['durata'];
            $test="select * from filghtsform where data='$data'AND dest='$dest'";
            $result=mysqli_query($connect,$test);
            $row=$result->fetch_assoc();
            
            $sql="insert into filghtsform (photo,data,plecare,dest,price,seat,durata) values ('$photo','$data','$plecare','$dest','$price','$seats','$durata')";
            $query=mysqli_query($connect,$sql);
            header('Location:admin.php');
            
        }

        if(isset($_GET['delete']))
        {
            $id=$_GET['delete'];
            
            $result=$connect->query("DELETE from filghtsform WHERE id='$id'")or die("unable to delete");
            
            header('Location:admin.php');
        }

        if(isset($_GET['edit']))
        {
            $id=$_GET['edit'];
            $result=$connect->query("SELECT * from filghtsform WHERE id='$id'")or die("unable to select");
            
            if($result->num_rows!=0)
            {
                $row=$result->fetch_array();
                $data=$row['data']; 
                $plecare=$row['plecare'];
                $dest=$row['dest']; 
                $price=$row['price']; 
                $seats=$row['seat']; 
                $durata=$row['durata']; 
            }

        }

        if(isset($_POST['confirm'])){
            $id=$_POST['id'];
            $data=$_POST['data'];
            $plecare=$_POST['plecare'];
            $dest=$_POST['dest'];
            $price=$_POST['price'];
            $seats=$_POST['seats'];
            $durata=$_POST['durata'];
            $connect->query("UPDATE filghtsform SET data='$data',plecare='$plecare',dest='$dest',price='$price',seat='$seats',durata='$durata' WHERE id='$id'");
            header("Location:admin.php");
        }

        

?>