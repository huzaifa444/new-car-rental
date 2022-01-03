<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rent A Car in Pakistan ( Quality Service ) & Save Upto 20%">
    <meta name="keywords" content="Rent , Car , AQCar , Quality Service , Pakistan ,Vehicle ">
    <title>AQCar</title>
</head>


<body>
    <!--Logo ,SavingOfferHeading, Login , Registration Intro Container-->
    <div class="Intro-Container">
        <div class="logo">
            <a href="../CarRental/Home.php">
                <img src="../CarRental/HtmlFiles/Logo.PNG" class="Website-Logo" alt="AQCar" width="100px" , height="100px"></a>
        </div>
        <div class="savingofferheading">
            <h1>Save Upto 20 % On Renting the Car</h1>
        </div>
        <div class="userauthenticationbuttons">
            <a href="../CarRental/HtmlFiles/Login.html"><button type="button" class="authentication-button">Login</button></a>
            <a href="../CarRental/HtmlFiles/Registration.html"><button type="button" class="authentication-button">Registration</button></a>
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
            <form action="/action_page.php">
                <input type="text" placeholder="Search Here " name="search" style=" height: 30px; border: 2px solid black;">
            </form>
        </div>
    </div>

    <div class="helppage">
        <div class="para">
            <b>At AQCARS we believe in providing excellent Service to our Customers.</b>
        </div>
        <div class="para"></div>
        However, if you still require more information or assistance, feel free to <b>contact our Customer Support
            team!</b>
        <div class="para"></div>
        You can:
        <div class="para"></div>
        1. Send us an email: <b>aqcars@gmail.com</b>
        <div class="para"></div>
        2. Call us: <b>0800-10101 (9:30 am till 6:30 pm only)</b>
        <div class="para"></div>
        3. Visit our Facebook page: <b>/AQCARSPakistan</b>
        <div class="para"></div>
        4. Reach us on Twitter: <b>@AQCARS_Pakistan</b>
        <div class="para">
            Customer Support is available <b>Seven days a Week</b>
        </div>
    </div>

    <!--This is fake location . through google maps user can see the location of AQCars Office-->
    <div class="officelocation">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26550.48251294937!2d73.0422222395508!3d33.7138569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfa2daaaaaab%3A0xc23d277b19eb8c02!2sPak%20Car%20Rentals!5e0!3m2!1sen!2snl!4v1622232298269!5m2!1sen!2snl" width=100% height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

    .helppage {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        border: 2px solid black;
        justify-content: center;
        align-items: center;
        background-color: lightgray;
    }

    .para {
        padding: 5px;
        margin: 5px;
        color: GREY;
    }
</style>