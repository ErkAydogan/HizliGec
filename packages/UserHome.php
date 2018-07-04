<!DOCTYPE html>
<html>

<title>Havefun</title>

<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="../includes/css/home.css" rel="stylesheet">
<link href="../includes/css/header.css" rel="stylesheet">
<?php
include 'Database.php';
$database = new Database();
$randomEvents = $database->getRandomEvents();
$list_catgs_query = "Select Category from Event group by Category";
?>

<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="UserHome.php" class="w3-black">HaveFun</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="UserProfile.php">Profile</a></li>
   </ul>



<body>

<header class="w3-display-container w3-content  w3-padding-64" style="max-width:1500px">
    <div class="w3-container w3-padding-4 ">
        <h3 align="center" style="font-family: Lobster; font-size:50px;">Search Your Event</h3>

        <form class="w3-row-padding" method="post" action="SearchIndexForSignedIn.php">
            <div class="w3-row-padding" align="center">
                <div class="w3-rest">
                    <input class="inputstyle" name = "from" type="date" placeholder="Search from">
                    <input class="inputstyle" name = "to" type="date" placeholder="To">
                    <input class="inputstyle" name = "city"type="text" placeholder="City">
                    <input class="inputstyle" name = "place" type="text" placeholder="Place">
                    <select  class="w3-dropdown-hover inputstyle" name="category"  id="inputs">
                        <option  value="All">All Categories</option>
                        <?php $result = $database->performQuery($list_catgs_query);
                        while($row = $result->fetch_assoc()) { ?>
                            <option value=<?php echo $row["Category"]; ?>> <?php echo $row["Category"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <p align="center" style="font-family:Lobster; font-size:18px;"><button  class="w3-btn w3-dark-black" type="submit" style="padding: 14px 40px">Search for event</button></p>
            </div>
        </form>
    </div>
</header>

<h2>Featured Events</h2>

<div class="container" style="padding-top: 180px">
    <form  class="login-form" method="POST" action="EventForSignedIn.php">
        <div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php
            $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?> name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>
            <?php $row = $randomEvents->fetch_assoc(); ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding"> <?php echo $row["Name"]; ?></div>
                    <input type="image" class="imager" src=<?php echo $row["Picture"]; ?>  name="eventID" value=<?php echo $row["ID"]; ?> style="width:100%"  alt="Submit" />
                </div>
            </div>

    </form>
</div>

<div class="footer">Havefun.com &copy; 2016</div>

</body>
</html>




