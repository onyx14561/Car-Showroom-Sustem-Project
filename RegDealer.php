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
        echo "Database connected";
    }
?>

<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <style>
        body{
            background-image: url("image/DealerBG.png");
            }

        .name {
            font-family: "Sofia", sans-serif;
            position: absolute;
            bottom: 678px;
            right: 1150px;
            font-size: 30px;
            
        }
        .pass {
            font-family: "Sofia", sans-serif;
            position: absolute;
            bottom: 540px;
            right: 1150px;
            font-size: 30px;
        }
        .addre {
            font-family: "Sofia", sans-serif;
            position: absolute;
            bottom: 400px;
            right: 1150px;
            font-size: 30px;
        }
        .submit {
            font-family: "Sofia", sans-serif;
            position: absolute;
            bottom: 300px;
            right: 1150px;
            font-size: 30px;
        }
        </style>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Dealer Registration</title>
    </head>
    <body>
        <form action="RegDealer.php" method="post">

        <div class="name"><div class="font-effect-fire">Dealer name : </div><input type="text" name="Dealer name"><br></div>
        <div class="pass"><div class="font-effect-fire">Password : </div><input type="password" name="password"><br></div>
        <div class="addre"><div class="font-effect-fire">Address : </div><input type="text" name="address"><br></div>
        
        <div class="submit"><input type="submit" name="submit" class="font-effect-fire" value="Register"></div></div>
        </form>

        <?php

            if(isset($_POST['submit'])){
                $Deal_name=$_POST['Dealer_name'];
                $Deal_pass=$_POST['password'];
                $Deal_Address=$_POST['address'];

                if($Deal_name!="" && $Deal_pass!="")
                {
                    $sql="insert into dealer values('$Deal_name','$Deal_pass','$Deal_Address')";
                    header('location:LoginDealer.php'); 
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
