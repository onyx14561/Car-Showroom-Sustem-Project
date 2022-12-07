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
    <style>
        /* Style inputs, select elements and textareas */
        input[type=text], select, textarea{
        width: 50%;
        padding: 12px ;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
        }
        
        /* Style the label to display next to the inputs */
        label {
        padding: 12px 12px 12px 360px;
        display: inline-block;
        left: 90px;
        }
        
        /* Style the submit button */
        input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 9px;
        cursor: pointer;
        position:absolute;
        right:1050px;
        }

        input[type=file] {
        background-color: #04AA6D;
        color: white;
        padding:9px;
        border: none;
        border-radius: 9px;
        cursor: pointer;
        position:absolute;
        right: 1150px;
        }
        
        /* Style the container */
        .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
        
        /* Floating column for labels: 25% width */
        .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        }
        
        /* Floating column for inputs: 75% width */
        .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
        }
        
        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Cars</title>
    </head>
    <body>
    <div class="add">
    <form action="addcar.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-25">
                <label>Car Price</label>
            </div>
            <div class="col-75">
                <input type="text" name="car_price" placeholder="Please enter price of the car..">
            </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Car Model</label>
                </div>
                <div class="col-75">
                    <input type="text" name="car_model" placeholder="Please enter model of the car..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Car Type</label>
                </div>
                <div class="col-75">
                    <input type="text" name="car_type" placeholder="Please enter the type of car..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Mileage</label>
                </div>
                <div class="col-75">
                    <input type="text" name="mileage" placeholder="Enter Mileage"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Fueltype</label>
                </div>
                <div class="col-75">
                    <input type="text" name="fueltype" placeholder="Enter Fueltype"></textarea>
                </div>
            </div>
            <div class="form-group">
                    <div class="file">
                        <input class="form-control" type="file" name="uploadfile" value="" />
                    </div>
            </div>
            <div class="submit"><input type="submit" name="submit" class="font-effect-fire" value="Register"></div></div>
        </form>
    </div>
        <?php

            if(isset($_POST['submit']) && isset($_FILES['uploadfile'])){
                
                $dealer=$_SESSION['dealer'];
                $veh_price=$_POST['car_price'];
                $veh_model=$_POST['car_model'];
                $veh_type=$_POST['car_type'];	
                $veh_mileage=$_POST['mileage'];	
                $fueltype=$_POST['fueltype'];

                $filename = $_FILES['uploadfile']["name"];
                $tempname = $_FILES['uploadfile']["tmp_name"];
                $folder = "./uploads/" . $filename;

                if($veh_price!="" && $veh_model!="" && $veh_type!="" && $veh_mileage!="" && $fueltype!="")
                {
                    $sql="insert into vehicle (deal_name,veh_price,veh_model,veh_type,veh_mileage,fueltype,vehimg) values('$dealer','$veh_price','$veh_model','$veh_type','$veh_mileage','$fueltype','$filename')";  
                }
                else
                {
                    echo"Some fields may be Empty";
                }

                if (move_uploaded_file($tempname, $folder)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
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