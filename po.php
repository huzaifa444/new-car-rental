<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rent A Car in Pakistan ( Quality Service ) & Save Upto 20%">
    <meta name="keywords" content="Rent , Car , AQCar , Quality Service , Pakistan ,Vehicle ">
    <link rel="stylesheet" type="text/css" href="./Home.css">
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
            <a href="login.php"><button type="button" class="authentication-button">Login</button></a>
            <a href="register.php"><button type="button" class="authentication-button">Registration</button></a>
        </div>
    </div>

    <!--Navigation-->
    <div class="flex-nav-container">
        <div class="flex-navigationcontainer">
            <ul class="links">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Hotoffers.php">Hot Offers</a></li>
                <li><a href="About.php">Help</a></li>
            </ul>

        </div>
        <div class="usersearchbox">
            <form action="" method="$_GET">
                <input type="text" placeholder="Search Here " name="searchtext" style=" height: 30px; border: 2px solid black;">
                <input type="submit" class="submitsearch" name="searchsubmit" style=" padding:3px; height: 30px; border: 2px solid black;">
            </form>
        </div>
    </div>


    <?php

    include 'config.php';
    $caradnumber = $_GET['carad'];
    $queryselector = "Select * from carads WHERE carid={$caradnumber}";
    $query = mysqli_query($conn, $queryselector);
    if ($result = mysqli_fetch_assoc($query)) {
        echo "<div class='car1linkpage'>;";
        echo "<div class='car1linkimage'>"; ?>
        <img src="<?php echo $result["carimage"] ?>" width="1000" height="700" class="carlinkimage">
        </div>;
        <div class="cardescription">
            <?php
            echo "<p class='car-adnumber'>";
            echo "<br> Car Model :  " . $result["CarMode"] . "<br>";
            echo "<br> Car Condition :  " . $result["CarCondition"] . "<br>";
            echo "<br> Car Details :    " . $result["CarDetails"] . "<br>";
            echo "<br> Car Cost per Day :   " . $result["CarCostDay"] . "<br>";
            echo "<br> Car Location :   " . $result["CarLocation"] . "<br>"; ?>
        </div>
        <div class="bookforrent">
            <?php echo '<br><a href="booking.php?carid=' . $result["carid"] . '" ><button id="bookbutton">Book Now</button></a></br>'; ?>
        </div>
        </div><?php } ?>
    <!-- Footer -->

    <div class="footer">
        <div class="footericons">
            <a href="#"><img src="Icons/facebook.png" alt="facebook" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="Icons/twitter-sign.png" alt="twitter" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="Icons/whatsapp.png" alt="whatsapp" class="Icons" width="50" , height="50"></a>
        </div>
        <div class="Suggestionbox">
            <form class="SuggestionBox" action="/action_page.php">
                <h6 id="headingforsuggestion">Provide Us ! Your Suggestion</h6>
                <textarea class="Suggest-Box" placeholder="Give Some Suggestion"></textarea><br>
                <input type="submit" id="sugformbutton" value="Submit">
            </form>
        </div>
    </div>
    <div class="copyright">
        <p>&#169; 2021 AQCars. All Rights Reserved.</p>
    </div>
</body>

</html>




<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Blinker", sans-serif;
    }


    .Intro-Container {
        display: flex;
        flex-wrap: wrap;
        background-color: rgb(3, 3, 3);
        border: 5px solid black;
        border-radius: 5px;
    }

    .logo {
        border: 2px solid rgb(94, 97, 94);
        border-radius: 5px;
        margin: 0px;
        cursor: pointer;
        padding-left: 4px;
        padding-right: 4px;
        padding-top: 4px;
        margin: 5px;
    }


    .img {
        max-width: 100%;
        height: auto;
    }

    .savingofferheading {
        display: flex;
        flex-wrap: wrap;
        border: 5px solid rgb(230, 232, 236);
        border-radius: 20px;
        margin: auto;
        padding: 10px;
        font-weight: bold;
        color: rgb(230, 232, 236);
    }

    .userauthenticationbuttons {
        display: flex;
        flex-flow: row-reverse wrap;
        color: white;
        padding-top: 30px;
        /* margin: 5px; */
    }

    .authentication-button {
        border-radius: 5px;
        font-size: 20px;
        text-align: center;
        padding: 10px;
        cursor: pointer;
    }

    .authentication-button:hover {
        font-weight: bold;
    }

    .flex-nav-container {

        display: flex;
        flex-wrap: wrap;
    }

    .flex-navigationcontainer {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .flex-navigationcontainer ul {
        justify-content: space-evenly;
        display: flex;
        padding: 34px 23px;
        margin-left: auto;

    }

    ul.links {
        list-style-type: none;

    }

    .flex-navigationcontainer li a {
        padding: 10px;
        margin: 10px;
        text-decoration: none;
        color: rgb(80, 84, 87);
        border: 2px solid black;
    }

    .flex-navigationcontainer li a:hover {
        color: rgb(38, 39, 41);
        font-weight: bold;
    }

    .usersearchbox {
        padding-top: 25PX;
        padding-bottom: 25px;
        margin-left: auto;
    }

    .carlinkpage {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
    }

    .carlinkimage {
        display: flex;
        flex-wrap: wrap;
        border: 2px solid black;
    }

    .carlinkimage {
        margin: auto;
    }

    .cardescription {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border: 2px solid black;
        background-color: rgb(128, 128, 128);
        color: white;
        font-weight: bold;
    }

    .bookforrent {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

    }

    button:hover {
        cursor: pointer;
        font-weight: bold;
    }

    .footer {
        display: flex;
        border: 2px solid black;
        justify-content: space-between;
        background-color: rgb(202, 235, 235);
        color: white;
        border-radius: 2px;
    }

    .footericons {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin: 10px;
    }

    .Suggestionbox {
        display: flex;
        flex-wrap: wrap-reverse;
        padding: 10px;
        margin: 5px;
        font-size: 14pt;
    }

    .Suggest-Box {
        resize: none;
        max-width: 100%;
    }

    #sugformbutton {
        cursor: pointer;
    }

    #sugformbutton:hover {
        font-weight: bold;
    }

    .copyright {
        border: 2px solid black;
        display: flex;
        justify-content: center;
        font-weight: bold;
    }

    #headingforsuggestion {
        padding-bottom: 10px;
        color: black;
    }

    #bookbutton {
        padding: 5px;
        margin: 10px;
    }

    #bookbutton:hover {
        background-color: rgb(64, 255, 0);
    }
</style>