<?php
include 'Database.php';
$database = new Database();

session_start();
$status = $_SESSION['status'];
$username = $_SESSION['currentUser'];

$eventID = $_POST["eventID"];
$ntickets = $_POST["ntickets"];

$query = "DELETE from Tickets_purchased where Event_ID = ".$eventID." AND Username = \"".$username."\" LIMIT ".$ntickets;
$database->performQuery($query);
$database->ticketReturned($ntickets,$eventID);

if ($database->isAdmin($username)) {
    ?>
    <script>
        alert("tickets successfully returned!!!");
        window.location.href = "AdminHomePage.php";
    </script>
<?php
}else{
    ?>
    <script>
        alert("tickets successfully returned!!!");
        window.location.href = "UserHome.php";
    </script>
<?php
}
