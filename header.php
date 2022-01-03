<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rent A Car in Pakistan ( Quality Service ) & Save Upto 20%">
    <meta name="keywords" content="Rent , Car , AQCar , Quality Service , Pakistan ,Vehicle ">
    <link rel="stylesheet" type="text/css" href="../CarRental/CSSFILES/header.css">
    <title>AQCar</title>
</head>



<body>
    <!--Logo ,SavingOfferHeading, Login , Registration Intro Container-->
    <div class="Intro-Container">
        <div class="logo"><a href="Home.html">
                <img src="../CarRental/HtmlFiles/Logo.PNG" class="Website-Logo" alt="AQCar" width="100px" , height="100px"></a>
        </div>
        <div class="savingofferheading">
            <h1>Save Upto 20 % On Renting the Car</h1>
        </div>
        <div class="userauthenticationbuttons">
            <a href="../CarRental/login.php"><button type="button" class="authentication-button">Login</button></a>
            <a href="../CarRental/register.php"><button type="button" class="authentication-button">Registration</button></a>
        </div>
    </div>

    <!--Navigation-->
    <div class="flex-nav-container">
        <div class="flex-navigationcontainer">
            <ul class="links">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Hotoffer.php">Hot Offers</a></li>
                <li><a href="About.php">Help</a></li>
            </ul>

        </div>
        <div class="usersearchbox">
            <form action="Search.PHP" method="$_GET">
                <input type="text" placeholder="Search Here " name="searchtext" style=" height: 30px; border: 2px solid black;">
                <input type="submit" class="submitsearch" name="searchsubmit" style=" padding:3px; height: 30px; border: 2px solid black;">
            </form>
        </div>
    </div>
</body>

</html>