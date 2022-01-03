<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rent A Car in Pakistan ( Quality Service ) & Save Upto 20%">
    <meta name="keywords" content="Rent , Car , AQCar , Quality Service , Pakistan ,Vehicle ">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" type="text/css" href="./Home.css">
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
            <a href="../CarRental/login.php"><button type="button" class="authentication-button">Login</button></a>
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
            <form action="/action_page.php">
                <input type="text" placeholder="Search Here " name="search" style=" height: 30px; border: 2px solid black;">
            </form>
        </div>
    </div>




    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" style="border:1px solid #ccc" method="POST">
        <div class="container">
            <h2>Create Account</h2><br>
            <p style="font-weight: bold; font-size:20px">Fill this form to create an account.</p>
            <hr><br>

            <label for="UserId"><b>User Id</b></label>
            <input type="text" placeholder="Enter User Id" name="Userid" required>

            <label for="UserName"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="NameofUser" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="Useremail" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Userpassword" required>

            <label for="User Cnic"><b>CNIC</b></label>
            <input type="text" placeholder="Enter CNIC" name="UserCNIC" required>

            <label for="user Phone Number"><b>Phone Number</b></label>
            <input type="text" placeholder="Enter Phone Number" name="PhoneNumber" required><br>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <br>
            <div class="SignUpSubmit">
                <button type="submit" class="signupbtn" name="submitbutton">Create Account</button>
            </div>
        </div>
    </form>


    <?php
    require "config.php";

    $userid = $username = $userpassword = $useremail = $usercnic = $phonenumber = "";
    $useriderr = $usernameerr = $userpassworderr = $useremailerr = $phonenumbererr = $usercnicerr = "";

    //Check for the Userid

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST["submitbutton"])) {
            if (empty(trim($_POST["Userid"]))) {
                $useriderr = "User Id cannot be Blank";
            } else {
                //check if the userid exists in the database
                $sqlquery = "Select * from useraccount where userid=?";
                $stmt = mysqli_prepare($conn, $sqlquery);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "s", $param_userid);

                    //Set the value of $param_userid
                    $param_userid = trim($_POST['Userid']);

                    //Try Execute this statement
                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_store_result($stmt);
                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            $useriderr = "User Id already exists";
                        } else {
                            $userid = trim($_POST['Userid']);
                        }
                    }
                } else {
                    echo "Something Went Wrong";
                }
            }
            mysqli_stmt_close($stmt);


            //Check for the username
            if (empty(trim($_POST["NameofUser"]))) {
                $usernameerr = "Name of User cannot be Blank";
            } else {
                $username = trim($_POST['NameofUser']);
            }

            //Check for the Useremail
            $emailvalidation = "@";
            if (empty(trim($_POST['Useremail']))) {
                $useremailerr = "Email Cannot be Blank";
            } else if (strpos(empty(trim($_POST['Useremail'])), $emailvalidation) !== false) {
                $useremailerr = "Invalid Email";
            } else {
                $useremail = trim($_POST["Useremail"]);
            }

            //Check for the Userpassword
            if (empty(trim($_POST['Userpassword']))) {
                $userpassworderr = "Userpassword Cannot be Blank";
            } else if (strlen(trim($_POST['Userpassword'])) < 6) {
                $userpassworderr = "Password Cannot be Less than 6 Characters";
            } else {
                $userpassword = trim($_POST["Userpassword"]);
            }

            //Check for the User UserCNIC
            if (strlen(trim($_POST['UserCNIC'])) > 13 && strlen(trim($_POST['UserCNIC'])) < 13) {
                $usercnicerr = "Invalid CNIC";
            } else {
                $usercnic = trim($_POST["UserCNIC"]);
            }

            //Check for the User PhoneNumber
            if (strlen(trim($_POST['PhoneNumber'])) > 11 && strlen(trim($_POST['PhoneNumber'])) < 11) {
                $phonenumbererr = "Invalid PhoneNumber";
            } else {
                $phonenumber = trim($_POST["PhoneNumber"]);
            }

            //If no errors, insert in the database
            if (
                empty($useriderr) && empty($usernameerr) && empty($userpassworderr) && empty($usercnicerr)
            ) {
                $sql = "INSERT INTO useraccount (userid,name,	email,password,cnic,phonenumber) VALUES (?,?,?,?,?,?)";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param(
                        $stmt,
                        "ssssss",
                        $param_userid,
                        $param_username,
                        $param_email,
                        $param_password,
                        $param_cnic,
                        $param_phonenumber
                    );

                    //Set the Parameters
                    $param_userid = $userid;
                    $param_username = $username;
                    $param_email = $useremail;
                    $param_password = md5($userpassword);
                    $param_cnic = $usercnic;
                    $param_phonenumber = $phonenumber;

                    //Exceute the Query
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<div style='color:green'>.Successfully Account Created.'</div>'";
                    } else {
                        echo "Something is Wrong";
                    }
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "<div style='color:red'>.User Id Already Taken.'</div>'";
            }
        }
    }
    mysqli_close($conn);
    ?>

    <div class="footer">
        <div class="footericons">
            <a href="#"><img src="Icons/facebook.png" alt="facebook" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="Icons/twitter-sign.png" alt="twitter" class="Icons" width="50" , height="50"></a>
            <a href="#"><img src="Icons/whatsapp.png" alt="whatsapp" class="Icons" width="50" , height="50"></a>
        </div>
        <div class="Suggestionbox">
            <h6 id="headingforsuggestion">Provide Us ! Your Suggestion</h6>
            <form class="SuggestionBox" action="/action_page.php">
                <textarea class="Suggest-Box" placeholder="Give Some Suggestion"></textarea><br>
                <button type="submit" class="sugbutton">Submit</button>
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

    .container {
        background-color: rgb(169, 178, 184);
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        border: 3px solid black;
    }


    label {
        margin: 5px;
        line-height: 2;
        border-radius: 5px;
    }

    input {
        width: 200px;
        height: 40px;
        border-radius: 5px;
    }

    .SignUpSubmit {
        color: rgb(55, 236, 48);
    }

    .signupbtn {
        cursor: pointer;
        padding: 5px;
    }

    .signupbtn:hover {
        font-weight: bold;
    }


    .footer {
        display: flex;
        border: 2px solid black;
        background-color: rgb(202, 235, 235);
        color: white;
        border-radius: 2px;
        padding: 20px;
    }

    .Suggestionbox {
        flex-flow: row-reverse wrap;
        margin-left: auto;
        font-size: 14pt;
    }

    .Suggest-Box {
        resize: none;
        max-width: 100%;
    }

    .sugbutton {
        cursor: pointer;
        margin-top: 2px;
    }

    .sugbutton:hover {
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
        background-color: rgb(20, 241, 241);
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
    }

    .para {
        padding: 10px;
    }

    .login_wrapper {
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 1px solid #e4e4e4;
        float: left;
        width: 100%;
        background: #a9b2b8;
        padding: 50px
    }

    .login_wrapper a.btn {
        color: #fff;
        width: 100%;
        height: 50px;
        line-height: 36px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        background: #4385f5;
        font-size: 16px;
        border: 1px solid #4385f5
    }

    .login_wrapper a i {
        float: right;
        margin: 0;

    }

    .login_wrapper a.google-plus {
        background: #db4c3e;
        border: 1px solid #db4c3e
    }
</style>