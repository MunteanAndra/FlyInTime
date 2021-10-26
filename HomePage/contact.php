<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Page</title>
        <link rel="stylesheet" href="../styles/contactStyle.css">
    </head>

    <style>
    body{
        height: auto;
        width: auto;
        margin: 170px;
        margin-bottom: 100px;
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
        width: 650px;
        height: 800px;
        padding: 10px;
        border: 5px solid gray;
        margin: 0;
        border: 2px solid;
        border-radius: 4px;
    }

    h2,p{
        font-family: 'poppins',sans-serif;
        text-align: center;

    }

    .photo1, .photo2, .photo3{
        margin-left: 30px;
        margin-top: 30px;
        text-align: center;
    }

    hr{
        height: 0px;
        border: solid;
    }

    </style>

    <body>
        <form action="" method="POST">
            <h1><a href="home.php">FlyInTime</a></h1> 
            <div class="info">
                <h2>Let's get in touch</h2>
                <p> <b>For anything you would like to say, you can find us down here. So,let us know.</b> </p>
                <div class="photo1">
                    <img src="../gifs/location.png" height=10% width=10%/>  <p>Bulevardul Mihai Viteazu 1, Timisoara 300222</p>
                </div>
                <div class="photo2">
                    <img src="../gifs/email.png" height=10% width=10%/>  <p>lorem@ipsum.com</p >
                </div>
                <div class="photo3">
                    <img src="../gifs/phone.png" height=10% width=10%/>  <p>0040723456891</p>
                </div>
                <hr>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.243540058917!2d21.224952715369746!3d45.746263322599084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47455d83412bf8f1%3A0xc5ab4400e24d82a7!2sUniversitatea%20Politehnica%20Timisoara%2C%20Departamentul%20de%20Mecatronica%20al%20Facultatii%20de%20Mecanica!5e0!3m2!1sro!2sro!4v1635250839643!5m2!1sro!2sro" width="650" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>   
            </div>  
        </form>
    </body>

</html>        