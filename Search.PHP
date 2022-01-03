<!--Import Header-->
<?php include 'header.php' ?>

<?php
include 'config.php';
if (isset($_GET['searchsubmit'])) {
        $search_term = trim($_GET['searchtext']);
        $sqlquery = "Select * FROM carads WHERE
                    carads.CarMode LIKE '%$search_term%'";

        $result = mysqli_query($conn, $sqlquery) or die("Query Failed to Execute");
        echo '<div class="container-car-ads">';
        while ($result = mysqli_fetch_assoc($result)) {
                echo "<div class='car-ad'>";
?>
                <img src="<?php echo $result["carimage"] ?>" width="500" height="500">
                <?php
                echo "<p class='car-adnumber'>";
                echo "<br>" . $result["CarMode"] . "<br>";
                echo "<br>" . $result["CarCondition"] . "<br>";
                echo "<br>" . $result["CarDetails"] . "<br>";
                echo "<br>" . $result["CarCostDay"] . "<br>";
                echo "<br>" . $result["CarLocation"] . "<br>";
                echo '<br><a href="Search.php?carad=' . $result["carid"] . '">Interested</a></br>';
                echo "</p>";
                echo "</div>"; ?>
<?php }
} ?>
</div>

<!-- Footer -->

<?php include 'footer.php' ?>



<style>
        * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: "Blinker", sans-serif;
        }

        .container-car-ads {
                margin: auto;
                display: flex;
                flex-wrap: wrap;
                width: 30%;
                padding-left: 0%;
                flex-direction: column;
        }

        .car-ad {
                display: flex;
                flex-wrap: wrap;
                border: 2px solid black;
                margin-bottom: 10px;
        }

        .car-adnumber {
                display: flex;
                flex-wrap: wrap;
                padding-left: 150px;
                font-weight: bold;
                padding-top: 20px;
                padding-bottom: 20px;
        }

        ul {
                display: flex;
                justify-content: center;
        }

        ul li {
                padding: 0 8px;
                list-style-type: none;
                text-decoration: none;
        }
</style>