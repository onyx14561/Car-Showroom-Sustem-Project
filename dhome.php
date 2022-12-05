<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dealer Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/stl.css">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- header section starts -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>R</span>N</a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#services">services</a>
            <a href="#features">features</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>





        </nav>
        <div id="login-btn">
        <font size=5>Welcome<button class="btn"><?php echo $_SESSION['dealer']; ?></button>
            <i far fa-user></i>
        </div>
    </header>
    <!-- header section ends -->
    <!-- login form -->
    <div class="login-form-container">
       <span class="fas fa-times" id="close-login-form"></span>
            <form action="LoginCustomer.php">
                <input type="submit" value="Customer Login" class="btn">
            </form>
            <form action="LoginDealer.php">
                <input type="submit" value="Dealer Login" class="btn">
            </form>
            <p><div class="eg">Dont have an account ?</div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">Register</button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                  <li><button class="dropdown-item" type="button"><font size="3"><a class="dropdown-item" href="RegCustomer.php" target="_self">Customer Registration</a></button></li>
                  <li><button class="dropdown-item" type="button"><font size="3"><a class="dropdown-item" href="RegDealer.php" target="_self">Dealer Registration</a></button></li>
                </ul>
            </div></p>
    </div>


    <!-- home section starts here -->

    <section class="home" id="home">
        <h1 class="home-parallax" data-speed="-2">rn's cars shop </h1>
        <img class="home-parallax" data-speed="5"  src="image/home2.png" alt="">
        <a href="#" class="btn home-parallax" data-speed="7">explore car</a>

    </section>







    <!-- home section ends here -->

<!-- icons section -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>parts stores</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>








    <script src="js/scrpt.js"></script>
</body>

</html>