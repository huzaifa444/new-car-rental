<?php include 'header.php' ?>

<html>

<body>
    <form action="" style="border:1px solid #ccc" method="POST">
        <div class="container">
            <h2>Booking Information</h2><br>
            <p style="font-weight: bold; font-size:20px">Fill this Form ! to Confirm Booking</p>
            <hr><br>

            <label for="bookingdate"><b>Booking Date</b></label>
            <input type="date" placeholder="Booking Date" name="bookingdate" required>

            <label for="bookingfrom"><b>Booking from</b></label>
            <input type="date" placeholder="Booking from" name="bookingfrom" required>

            <label for="bookingto"><b>Booking to</b></label>
            <input type="date" placeholder="Booking to" name="bookingto" required>

            <label for="Userid"><b>Enter Your UserID</b></label>
            <input type="text" placeholder="Enter UserID" name="Userid" required><BR>

            <p style="font-weight:lighter;">By Booking a Car you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <br>
            <div class="BookingSubmit">
                <input type="submit" class="BookCar" name="booksubmit" value="Booking Confirmed ">
            </div>
        </div>
    </form>
</body>

</html>

<?php

include 'config.php';

$caradnumber = $_GET['carid'];
$userid = "";
$useriderr = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["booksubmit"])) {
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
                        $userid = trim($_POST['Userid']);
                    } else {
                        echo "The User ID does not Exist";
                    }
                }
            } else {
                echo "Something Went Wrong";
            }
        }
        mysqli_stmt_close($stmt);


        //Check for the Booking Date
        $bookingdate = trim($_POST['bookingdate']);

        //Check for the Booking From
        $bookingfrom = trim($_POST['bookingfrom']);

        //Check for the Booking To
        $bookingto = trim($_POST['bookingto']);

        //Inserting Booking Record in the Database
        if (empty($useriderr)) {
            $sql = "INSERT INTO booking (bookingdate,bookingfrom,bookingto,carid,User) VALUES (?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) {
                mysqli_stmt_bind_param(
                    $stmt,
                    "sssii",
                    $param_bookingdate,
                    $param_bookingfrom,
                    $param_bookingto,
                    $param_carid,
                    $param_userid,
                );

                //Set the Parameters
                $param_bookingdate = $bookingdate;
                $param_bookingfrom = $bookingfrom;
                $param_bookingto = $bookingto;
                $param_carid = $caradnumber;
                $param_userid = $userid;

                //Exceute the Query
                if (mysqli_stmt_execute($stmt)) {
                    //echo "SuccessFully Executed";
                } else {
                    echo "Something Went Wrong";
                }
            }
            mysqli_stmt_close($stmt);
        }
    }
}
mysqli_close($conn);


?>

<?php include 'footer.php' ?>

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Blinker", sans-serif;

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

    .BookingSubmit {
        color: rgb(55, 236, 48);
    }

    .BookCar {
        cursor: pointer;
        padding: 5px;
    }

    .BookCar:hover {
        font-weight: bold;
    }
</style>