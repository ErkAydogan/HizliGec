<!DOCTYPE html>
<?php
include 'Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
$event = $database->getEvent($eventID);
$place = $database->getPlace($event["Place_Name"]);
$_POST["event"]= $event;
$numLeft = $event["num_of_tickets_left"] ;
session_start();

$isAdmin = $database->isAdmin($_SESSION['currentUser']);
if ($database->isAdmin($_SESSION['currentUser'])) {
    $refH = "AdminHomePage.php";
    $refP = "AdminProfile.php";
}else {
    $refH = "UserHome.php";
    $refP = "UserProfile.php";
}
?>

    <title> <?php echo $event["Name"]; ?> </title>

    <html>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../includes/css/eventforsignedin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="../includes/css/header.css" rel="stylesheet">

    <ul class="w3-navbar w3-white w3-large">
        <li class="shrift"><a href="<?php echo $refH ?>" class="w3-black"></i>HaveFun</a></li>
        <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>
        <li class="w3-right w3-light-grey shrift"><a href="<?php echo $refP ?>">Profile</a></li>
    </ul>
<h2>Event Information</h2>

<div class="login-page">
    <div class="form">

        <form class="Event-form" method="POST" >
            <img src=<?php echo $event["Picture"]?> alt="Sport" height="300" width="440">
            <button class="buton" formaction="TicketReturn.php" type="submit" formnovalidate>Return your tickets!</button>
            <h4>Event Name: <?php echo $event["Name"]?></h4>
            <h4>Place :<?php echo $place["Name"]?></h4>
            <h4>City :<?php echo $place["City"]?></h4>
            <h4>Event Date :<?php echo $event["Date"]?></h4>
            <h4>Event Time:<?php echo $event["Time"]?></h4>
            <h4>Ticket Price :<?php echo $event["Ticket_price"]?></h4>
            <h4>Event Number of tickets left: <?php echo $numLeft?><h4/>
                <div>
                    <?php if ($numLeft >0){ ?>
                    <input class = "num" type="number" name="ntickets"  placeholder="Enter the number of tickets" min="1" max="<?php echo $numLeft?>"  required/>
                    <button class="btn" formaction="Buy.php" type="submit">Buy Tickets</button>
                    <?php }else{ ?>
                    <button class="disbutton " disabled >Sold Out!!!!</button>
                    <?php } ?>
                </div>
                <input hidden type="password" value=<?php echo $eventID ?>  name="eventID"/>
        </form>
    </div>
</div>

<div class="footer">Havefun.com &copy; 2016</div>
