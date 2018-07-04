<?php
include 'Database.php';
$database = new Database();

$dateFrom = $_POST["from"];
$dateTo = $_POST["to"];
$city = $_POST["city"];
$place = $_POST["place"];
$category = $_POST["category"];

$selectedCriteria = array();

if(isset($_POST["place"])&&!empty($_POST["place"])) {
    $placeResults = $database->getPlaceEvents($place);
    array_push($selectedCriteria, $placeResults);
}

if(isset($_POST["city"])&&!empty($_POST["city"])) {
    $cityResults = $database->getCityEvents($city);
    array_push($selectedCriteria, $cityResults);
}

if( (isset($_POST["from"])&&!empty($_POST["from"])) && (isset($_POST["to"])&&!empty($_POST["to"]))) {
    $dateResults = $database->getDateEventsFromTo($dateFrom, $dateTo);
    array_push($selectedCriteria, $dateResults);
}else if ((isset($_POST["from"])&&!empty($_POST["from"]))) {
    $dateResults = $database->getDateEventsFrom($dateFrom);
    array_push($selectedCriteria, $dateResults);
}else if ((isset($_POST["to"])&&!empty($_POST["to"]))) {
    $dateResults = $database->getDateEventsTo($dateTo);
    array_push($selectedCriteria, $dateResults);
}

if(!($_POST["category"] === "All")) {
    $categoryResults = $database->getCategoryEvents($category);
    array_push($selectedCriteria, $categoryResults);
}




$events = array();
if(count($selectedCriteria)>0){
    for($i = 0 ; $i<count($selectedCriteria[0]);$i++){
        $event = $selectedCriteria[0][$i];
        $isMutual = true;
        for($j = 1 ; $j<count($selectedCriteria);$j++){
            $isMutual = false;
            for($k = 0 ; $k<count($selectedCriteria[$j]);$k++){
                if(strcmp($event["ID"],$selectedCriteria[$j][$k]["ID"]) ==0)
                    $isMutual = true;
            }
        }
        if($isMutual)
            array_push($events,$event);
    }
}else{
    $events = $database->getAllEvents();
}

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
<!DOCTYPE html>
<html>
<title>Search results</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../includes/css/header.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<ul class="w3-navbar w3-white w3-large">
<li class="shrift"><a href="<?php echo $refH ?>" class="w3-black"></i>HaveFun</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="<?php echo $refP ?>">Profile</a></li>
</ul>

<link href="../includes/css/search.css" rel="stylesheet">

<body>
<div class="container matgin-top" id="Events">
    <h3>Searched Events</h3>
</div>

<table style="background-color:darkgrey">
    <form method="post" action="EventForSignedIn.php"
    <tr>
        <th>Picture</th>
        <th>Event Name</th>
        <th>Place</th>
        <th>Date</th>
    </tr>

    <?php for($i = 0 ; $i < count($events);$i++){?>

        <tr>
            <td>   <input type="image" name="eventID" value="<?php echo $events[$i]["ID"] ?>" src="<?php echo $events[$i]["Picture"] ?>" alt="submit" class="imager" width="200" height="52" ></td>
            <td> <?php echo $events[$i]["Name"] ?></td>
            <td><?php echo $events[$i]["Place_Name"] ?></td>
            <td><?php echo $events[$i]["Date"] ?></td>
        </tr>

    <?php } ?>
    </form>
</table>




</body>
</html>