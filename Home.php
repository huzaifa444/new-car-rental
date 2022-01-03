<!--Import Header-->
<?php include 'header.php' ?>


<!--Asks User for the location and printing the latitude and longitude on website(users) browsers-->
<script type="text/javascript" src="../CarRental/JavaScript Files/location.js"></script>


<!--Car Ads-->
<div class="container-car-ads">
    <?php
    include 'config.php';
    $Limit = 5;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $offset = ($page - 1) * $Limit;
    $queryselector = "Select * from carads LIMIT {$offset},{$Limit}";
    $query = mysqli_query($conn, $queryselector);
    while ($result = mysqli_fetch_assoc($query)) {
        echo "<div class='car-ad'>"; ?>
        <img src="<?php echo $result["carimage"] ?>" width="500" height="500">
        <?php
        echo "<p class='car-adnumber'>";
        echo "<br>" . $result["CarMode"] . "<br>";
        echo "<br>" . $result["CarCondition"] . "<br>";
        echo "<br>" . $result["CarDetails"] . "<br>";
        echo "<br>" . $result["CarCostDay"] . "<br>";
        echo "<br>" . $result["CarLocation"] . "<br>";
        echo '<br><a href="po.php?carad=' . $result["carid"] . '">Interested</a></br>';
        echo "</p>";
        echo "</p>";
        echo "</div>"; ?>
    <?php } ?>
</div>



<!--Pages Button-->

<?php
include 'config.php';
$page;
$queryselector = "Select * from carads";
$query = mysqli_query($conn, $queryselector) or die("Query Failed");
if (mysqli_num_rows($query) > 0) {
    $total_records = mysqli_num_rows($query);
    $limitofcarads = 5;
    $total_page = ceil($total_records / $limitofcarads);

    echo '<ul class="pagecontainerbox">';
    for ($i = 1; $i <= $total_page; $i++) {
        echo '<li><a href="Home.php?page=' . $i . '">' . $i . '</a></li>';
    }
    echo '</ul>';
}
?>

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