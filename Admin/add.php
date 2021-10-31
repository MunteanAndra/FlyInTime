<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Flights</title>
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

   
    input[type=text] {
            border: 1px solid;
            border-radius: 4px;
            padding: 9px 20px;;
        }

        input[type=button], button[type=submit] {
           background-color: white;
           padding: 6px 18px;
           text-decoration: none;
           margin: 4px 2px;
           cursor: pointer;
           border: 1px solid;
           border-radius: 4px;
        }
    </style>    
    <body>
    <form action="adminService.php" method="POST">
            <h1><a href="admin.php">FlyInTime-Admin</a></h1>
            <div class="photo">
                    <label><b>Upload photo</b></label>
                    <input type="file" id="img" name="photo" accept="image/*">
                
            </div>
            <div class="date">
                    <label><b>Departure date</b></label>
                    <input type="datetime-local" name="data">
            </div>
            <div class="dep">
                    <label><b>Departure</b></label>
                    <input type="text"  name="plecare">
            </div>
            <div class="destination">
                    <label><b>Destination</b></label>
                    <input type="text"  name="dest">
            </div>
            <div class="price">
                    <label><b>Price</b></label>
                    <input type="text"  name="price">
            </div>
            <div class="seats">
                    <label><b>Number of seats</b></label>
                    <input type="text"  name="seats">
            </div>
            <div class="duration">
                    <label><b>Duration</b></label>
                    <input type="text"  name="durata">
            </div>
            <div>
            <button type="submit" name="add">Add</button>
            </div>   


      
        </form>
    </body>  
</html>         