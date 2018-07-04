<!DOCTYPE html>

<html>

<?php
include 'Database.php';
$database = new Database();
session_start();
$username = $_SESSION["currentUser"];
$user = $database->getUser($username);
$relatedEvents = $database->getRelatedEvents($username);
$createdEvents = $database->getCreatedEvents($username);
?>


<title>Profile</title>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../includes/css/adminprofile.css" rel="stylesheet">
<link href="../includes/css/header.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="../includes/css/adminprofile.css" rel="stylesheet">


<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="AdminHomePage.php" class="w3-black">HaveFun</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="CreateEvent.php">Create An Event</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="AdminProfile.php">Profile</a></li>
</ul>



<head>
<body>

<header>
    <h1 style="font-family:Lobster; color:white;">Personel Infomation</h1>
</header>

<nav class="w3-center">
    <i class="fa fa-user-circle-o  w3-text-theme" style="font-size:150px"></i>
    <h3 class="w3-center"><?php echo $user["Name"]." ".$user["Surname"] ?></h3>
    <h4 class="w3-center" style="color:black"><i class="fa fa-envelope w3-text-theme" style="font-size:30px; color:black;"></i><?php echo "        " .$user["Email"] ?></h4>
    <h4 class="w3-center" style="color:black"><i class="fa fa-phone w3-text-theme" style="font-size:30px; color:black;"></i><?php echo"    " . $user["Phone_number"] ?></h4>
</nav>

<section>
    <h1 style="color:black">-------------  </h1>
</section>

<form class="w3-row-padding w3-center w3-margin-top" method="POST" action="EventForSignedIn.php">
    <div class="w3-row-padding w3-center w3-margin-top">
        <div class="w3-half" style="background-color: seashell">
            <div class="w3-card-2  w3-padding-top" style="min-height:70px">
                <table class="w3-table w3-bordered" style="width:100%; background-color:#ffecf7;">
                    <h3 style="font-family: Lobster"> Events I participated in:</h3>
                    <tr>
                        <th>Picture </th>
                        <th>Event</th>
                        <th>Date</th>
                        <th>Category</th>
                    </tr>
                    <?php
                    for ($x = 0; $x <= count($relatedEvents)-1; $x++) {

                        ?>
                        <tr>
                            <td><input type="image" class="imager" src=<?php echo $relatedEvents[$x]["Picture"]; ?>  name="eventID" value=<?php echo $relatedEvents[$x]["ID"]; ?> width="150" height="100" alt="Submit" /></td>
                            <td><?php echo $relatedEvents[$x]["Name"] ?></td>
                            <td><?php echo $relatedEvents[$x]["Date"] ?></td>
                            <td> <?php echo $relatedEvents[$x]["Category"] ?> </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="w3-half" style="background-color: seashell">
        <div class="w3-card-2  w3-padding-top" style="min-height:70px">
            <table class="w3-table w3-bordered" style="width:100%; background-color:#ffecf7;">
                <h3 style="font-family: Lobster"> Created events</h3>
                <tr>
                    <th>Picture </th>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Category</th>
                </tr>
                <?php
                for ($x = 0; $x <= count($createdEvents)-1; $x++) {

                    ?>
                    <tr>
                        <td><input type="image" class="imager" src=<?php echo $createdEvents[$x]["Picture"]; ?>  name="eventID" value=<?php echo $createdEvents[$x]["ID"]; ?> width="150" height="100" alt="Submit" /></td>
                        <td><?php echo $createdEvents[$x]["Name"] ?></td>
                        <td><?php echo $createdEvents[$x]["Date"] ?></td>
                        <td> <?php echo $createdEvents[$x]["Category"] ?> </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    </div>
</form>

</body>
</head>
</html>


<?php include 'Footer.php';?>
