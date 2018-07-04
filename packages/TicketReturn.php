<!DOCTYPE html>
<html>
<?php
include 'Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
$event = $database->getEvent($eventID);
$place = $database->getPlace($event["Place_Name"]);
$_POST["event"]= $event;

session_start();
$username = $_SESSION['currentUser'];
if ($database->isAdmin($username)) {
    $refH = "AdminHomePage.php";
    $refP = "AdminProfile.php";
}else {
    $refH = "UserHome.php";
    $refP = "UserProfile.php";
}
$nTicketsBought = $database->getTicketsBoughtForEvent($username, $eventID)
?>

<title> <?php echo $event["Name"]; ?> </title>


<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../includes/css/eventforsignedin.css" rel="stylesheet">

<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="<?php echo $refH ?>" class="w3-black"></i>HaveFun</a></li>
    <li class="shrift"><a href="<?php echo $refP ?>">Profile</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>

</ul>
<body>

<h2>Return your tickets</h2>

<div class="login-page">
    <div class="form">

        <form class="Event-form" method="POST" action="return.php">
            <img src=<?php echo $event["Picture"]?> alt="Sport" height="300" width="440">
            <h4>Event Name: <?php echo $event["Name"]?></h4>
            <h4>Event Date :<?php echo $event["Date"]?></h4>
            <h4>Ticket Price :<?php echo $event["Ticket_price"]?></h4>
                <div>
                    <?php if ($nTicketsBought >0){ ?>
                        <input class = "num" type="number" name="ntickets"  placeholder="Enter the number of tickets" min="1" max="<?php echo $nTicketsBought?>"  required/>
                        <button class="btn"  type="submit">Return tickets</button>
                    <?php }else{ ?>
                        <button class="disbutton black" disabled >You didn't buy any tickets</button>
                    <?php } ?>
                </div>
                <input hidden type="password" value=<?php echo $eventID ?>  name="eventID"/>
        </form>
    </div>
</div>

<div class="footer">Havefun.com &copy; 2016</div>

</body>
</html>
