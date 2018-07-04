<!DOCTYPE html>
<html>

<title>Havefun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../includes/css/header.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<ul class="w3-navbar w3-white w3-large">
    <li class="shrift"><a href="AdminHomePage.php" class="w3-black">HaveFun</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="logout.php">Sign Out</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="CreateEvent.php">Create An Event</a></li>
    <li class="w3-right w3-light-grey shrift"><a href="AdminProfile.php">Profile</a></li>
</ul>
<link href="../includes/css/createevent.css" rel="stylesheet">
<body>

<h5>Create Your Event To Show It To The World</h5>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<div class="testbox">

    <form class="login-form" method="POST" action="CheckCreateEvent.php">
        <label id="icon" for="Name"><i class="icon-shield"></i></label>
        <input type="text" name="Name"  placeholder="Name" required/>

        <label id="icon" for="Date"><i class="icon-shield"></i></label>
        <input class = "dateBox" type="date" name="Date" id="name" placeholder="Date" required/>

        <label id="icon" for="Time"><i class="icon-shield"></i></label>
        <input type="text" name="Time" id="name" placeholder="Time" required/>

        <label id="icon" for="City"><i class="icon-shield"></i></label>
        <input type="text" name="Place" id="name" placeholder="Place" required/>

        <label id="icon" for="City"><i class="icon-shield"></i></label>
        <input type="text" name="City" id="name" placeholder="City" required/>

        <label id="icon" for="Country"><i class="icon-shield"></i></label>
        <input type="text" name="Country" id="name" placeholder="Country" required/>

        <label id="icon" for="Number Of Tickets"><i class="icon-shield"></i></label>
        <input type="text" name="Numticket" id="name" placeholder="Number Of Tickets" required/>

        <label id="icon" for="Link"><i class="icon-shield"></i></label>
        <input type="text" name="Link" id="name" placeholder="Picture Link" required/>

        <label id="icon" for="Category"><i class="icon-shield"></i></label>
        <input type="text" name="Category" id="name" placeholder="Event Category" required/>

        <label id="icon" for="Price"><i class="icon-shield"></i></label>
        <input type="text" name="Price" id="price" placeholder="Price" required/>
        <div align="center" style="padding:4px 20px">
        <button  type="submit"> Register</button>
        </div>
    </form>
</div>
</body>
</html>



