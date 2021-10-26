<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us Page</title>
        <link rel="stylesheet" href="../styles/contactStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    p{
        font-family: "Avenir Next", sans-serif;
        font-style: italic;
        margin-left: 43%;
        margin-top: 140px;
        font-size: 35px;
        position: absolute;
        top: 8px;
        left: 0px;
        color: black;
        text-decoration: none;

        filter: url(#motion-blur-filter);
    }

    h2, .p1{
        font-family: 'poppins',sans-serif;

    }

    .p1{
        color: black;
        text-decoration: none;
        font-family: 'poppins',sans-serif;
    }

    .card{
        width: 200px;
        height: 370px;
        display: inline-block;
        border-radius: 10px;
        padding: 15px 25px;
        box-sizing: border-box;
        cursor: pointer;
        margin: 0px 20px;
        background-image: url(../gifs/airportsketch.jpg);
        background-position: center;
        background-size: cover;
        transition: transform 0.5s;

    }

    .card:hover{
        transform: translateY(-10px);
    }

    .footer{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 90px;
        background-color: black;
        color: #f4f1deff;
        font-family: 'poppins',sans-serif;
        text-align: center;
        
    }

    .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 8px 2px;
    }
    
    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook{
        background: #3B5998;
        color: white;
        margin-left: 13%;
    }
    
    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-instagram{
        background: #125688;
        color: white;
    }

    .fa-pinterest{
       background: #cb2027;
       color: white;
    }

    @media(max-width: 767px){
        .footer{
            width: 100%;
            
        }

    }
    </style>

    <body>
        <form action="" method="POST">
            <h1><a href="home.php">FlyInTime</a></h1>   
            <div>
                <p><b>ABOUT US</b></p>
            </div>   
            <div class="card">
                <h2>Unde opereaza FlyInTime zboruri?</h2>
                <p1><b>Orarul de zbor al paginii acoperă rute către multe orașe populare. Pentru a verifica disponibilitatea conexiunilor, accesati pagina principala si zborurile disponibile.</b></p1>
            </div>
            <div class="card">
                <h2>Când puteți achiziționa cele mai ieftine bilete pentru zboruri?</h2>
                <p1><b>Este recomandat să achiziționați biletele pentru zboruri cu cât mai mult timp înainte de data călătoriei.</b></p1>
            </div>
            <div class="card">
                <h2>Ce alte linii aeriene operează pe rute similare?</h2>
                <p1><b>Există și alte linii aeriene care operează către destinațiile acoperite de pagina noastra. Le puteți descoperi în motorul de căutare aflat pe pagina principala.</b></p1>
            </div>
            <div class="footer">
                <p3><b>copyright &copy;2021 FlyInTime - Programare Web</b></p3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>  
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>
            </div>
         </form>
         
    </body>

</html>        