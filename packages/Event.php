<!DOCTYPE html>
<html>
<?php
include 'Database.php';
$database = new Database();
$eventID = $_POST["eventID"];
$event = $database->getEvent($eventID);
$place = $database->getPlace($event["Place_Name"]);
$_POST["event"]= $event;


?>
<title> <?php echo $event["Name"]; ?> </title>
<?php include 'Header.php';?>

<link href="../includes/css/event.css" rel="stylesheet">

<body>
<h2>Event Information</h2>

    <div class="login-page">
        <div class="form">

            <form class="Event-form" method="POST" action="Buy.php">
                <img src=<?php echo $event["Picture"]?> alt="Sport" height="300" width="440">
                <h4>Event Name: <?php echo $event["Name"]?></h4>
                <h4>Place :<?php echo $place["Name"]?></h4>
                <h4>City :<?php echo $place["City"]?></h4>
                <h4>Event Date :<?php echo $event["Date"]?></h4>
                <h4>Event Time:<?php echo $event["Time"]?></h4>
                <h4>Ticket Price :<?php echo $event["Ticket_price"]?></h4>
                <h4>Event Number of tickets left: <?php echo $event["num_of_tickets_left"]?><h4/>
                <button class="btn"  type="submit">Buy Tickets</button>
                <p class="message"><a href="SignIn.php">Not Registered? Create An Account.</a></p>
                    <input hidden type="password" value=<?php echo $eventID ?>   name="eventID"/>
            </form>
        </div>
    </div>

<div class="footer">Havefun.com &copy; 2016</div>

</body>
</html>