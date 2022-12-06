<?php
    session_start();
    $con=new mysqli('localhost','root','','car showroom'); 
    if($con->connect_errno)
    {
        echo $con->connect_error;
        die();
    }
    else
    {
        echo "Connected to Database succesfully";
    }
?>

<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Cars</title>
    </head>
    <body>

        <form action="addcar.php" method="post">

        <div class="name">Enter Car Price : <input type="text" name="car_price"><br></div>
        <div class="name">Enter Car Model : <input type="text" name="car_model"><br></div>
        <div class="pass">Enter Car Type : <input type="text" name="car_type"><br></div>
        <div class="addre">Enter Mileage : <input type="text" name="mileage"><br></div>
        <div class="addre">Enter Fuel type : <input type="text" name="fueltype"><br></div>

        <div class="submit"><input type="submit" name="submit" value="Register"></div>
        </form>

        <?php

            if(isset($_POST['submit'])){
                $dealer=$_SESSION['dealer'];
                $veh_price=$_POST['car_price'];
                $veh_model=$_POST['car_model'];
                $veh_type=$_POST['car_type'];	
                $veh_mileage=$_POST['mileage'];	
                $fueltype=$_POST['fueltype'];

                if($veh_price!="" && $veh_model!="" && $veh_type!="" && $veh_mileage!="" && $fueltype!="")
                {
                    $sql="insert into vehicle (deal_name,veh_price,veh_model,veh_type,veh_mileage,fueltype) values('$dealer','$veh_price','$veh_model','$veh_type','$veh_mileage','$fueltype')";  
                }
                else
                {
                    echo"Some fields may be Empty";
                }

                if($con->query($sql))
                {
                    echo "data stored";
                }
                else
                {
                    echo "insert data fail";
                }
            }
        ?>
    </body>
</html>