<?php
$err = "";
if (isset($_POST['loginsubmit'])) {
    if (empty($_POST['userid']) || empty($_POST['userpassword'])) {
        $err = "Fields are Blank";
    }
    include 'config.php';
    $userid = mysqli_real_escape_string($conn, trim($_POST['userid']));
    $password = md5($_POST['userpassword']);

    $sql = "Select userid,name,password From useraccount WHERE userid={$userid} AND password='{$password}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    if (mysqli_num_rows($result) > 0) {
        if ($row = mysqli_fetch_assoc($result)) {
            echo "<div style='color:green'>.Successfully Logged In.'</div>'";
            // session_start();
            // $_SESSION['Username'] = $row['name'];
            // $_SESSION['Userid'] = $row['userid'];
            header("Location: Home.php");
        }
    } else {
        echo "<div style='color:red'>.Invalid Credentials.'</div>'";
    }
}








?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rent A Car in Pakistan ( Quality Service ) & Save Upto 20%">
    <meta name="keywords" content="Rent , Car , AQCar , Quality Service , Pakistan ,Vehicle ">
    <link rel="stylesheet" type="text/css" href="../CSSFILES/Login.css">
    <title>AQCar</title>
</head>


<body>
    <!--Logo ,SavingOfferHeading, Login , Registration Intro Container-->
    <div class="Intro-Container">
        <div class="logo">
            <a href="Home.html">
                <img src="../CarRental/HtmlFiles/Logo.PNG" class="Website-Logo" alt="AQCar" width="100px" , height="100px"></a>
        </div>
        <div class="savingofferheading">
            <h1>Save Upto 20 % On Renting the Car</h1>
        </div>
        <div class="userauthenticationbuttons">
            <a href="../register.php"><button type="button" class="authentication-button">Register Here</button></a>
        </div>
    </div>


    <!--Navigation-->
    <div class="flex-nav-container">
        <div class="flex-navigationcontainer">
            <ul class="links">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Cars.php">Cars</a></li>
                <li><a href="About.php">Help</a></li>
            </ul>

        </div>
        <div class="usersearchbox">
            <form action="/action_page.php">
                <input type="text" placeholder="Search Here " name="search" style=" height: 30px; border: 2px solid black;">
            </form>
        </div>
    </div>

    <!--Page of Login Page-->
    <div class="container-login-page">
        <div class="login-form">
            <form action="" method="post">
                <label style="color:white" for="uname"><b>User ID</b></label>
                <input type="text" placeholder="Enter Userid" name="userid" required><br>

                <label style="color:white;" for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="userpassword" required><br>

                <button type="submit" class="submit-button" name="loginsubmit">Login</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="footericons">
            <a href=""><img src="../CarRental/Icons/facebook.png" alt="facebook" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="../CarRental/Icons/twitter-sign.png" alt="twitter" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="../CarRental/Icons/whatsapp.png" alt="whatsapp" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="../CarRental/Icons/instagram.jpg" alt="whatsapp" class="Icons" width="50" , height="50"></a>
        </div>
        <div class="Suggestionbox">
            <form class="SuggestionBox" action="">
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
        padding-top: 25px;
        padding-bottom: 25px;
        margin-left: auto;
    }

    .container-login-page {
        background-image: url("../CarRental/background.jpg");
        height: 100%;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 1;
        display: flex;
        flex-wrap: nowrap;
    }

    .login-form {
        margin: auto;
        padding-top: 285px;
        padding-bottom: 260px;
        padding-left: 4px;
        padding-right: 2px;
    }

    .login-image {
        display: flex;
        flex-wrap: wrap;
        margin-left: 0 auto;
        border: 2px solid black;
    }

    .responsive {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: auto;
    }

    label {
        border: 2px solid white;
        padding: 9px;
        border-radius: 5px;
    }

    input {
        border: 2px solid white;
        margin-top: 15px;
        margin-bottom: 12px;
        margin-right: 10px;
        width: 200px;
        height: 40px;
        border-radius: 5px;
    }

    .submit-button {
        border: 2px solid white;
        padding: 5px;
        border-radius: 5px;
    }

    .submit-button:hover {
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

    .Icons {
        padding-right: 5px;
    }

    .Icons:hover {
        cursor: pointer;
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
</style>