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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <style>
        body{
            background-image: url("image/letter-bg.png"),url("image/letter-bg.png"),url("image/home2.png");
            background-repeat: no-repeat,no-repeat,no-repeat;
            background-position: top,top,bottom;
            }

        .name {
            font-family: "Audiowide", sans-serif;
            position: absolute;
            bottom: 678px;
            right: 800px;
            font-size: 20px;
        }
        .pass {
            font-family: "Audiowide", sans-serif;
            position: absolute;
            bottom: 630px;
            right: 800px;
            font-size: 20px;
        }
        .addre {
            font-family: "Audiowide", sans-serif;
            position: absolute;
            bottom: 580px;
            right: 800px;
            font-size: 20px;
        }
        .submit {
            font-family: "Audiowide", sans-serif;
            position: absolute;
            bottom: 500px;
            right: 960px;
            font-size: 30px;
        }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Customer Registration</title>
    </head>
    <body>

        <form action="RegCustomer.php" method="post">

        <div class="name">Enter name : <input type="text" name="customer name"><br></div>
        <div class="name">Enter name : <input type="text" name="customer name"><br></div>
        <div class="pass">Enter password : <input type="password" name="password"><br></div>
        <div class="addre">Enter Address : <input type="text" name="address"><br></div>
        
        <div class="submit"><input type="submit" name="submit" value="Register"></div>
        </form>

        <?php

            if(isset($_POST['submit'])){
                $Cus_name=$_POST['customer_name'];
                $Cus_pass=$_POST['password'];
                $Address=$_POST['address'];

                if($Cus_name!="" && $Cus_pass!="")
                {
                    $sql="insert into customer values('$Cus_name','$Cus_pass','$Address')";
                    header('location:LoginCustomer.php');   
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
