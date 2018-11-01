<!DOCTYPE html>
<html>

<?php include 'Header.php';?>

<link href="../includes/css/login.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<body style="background: url('img/signin.jpg'); background-size: 100%">
<h2 style="margin-left: 40%">
    Sıra Yok, Sipariş var
</h2>
<div class="col-xs-12 col-sm-8">

    <br><br>
</div>

<div class="login-page">
    <div class="form">
        <form class="login-form" method="POST" action="CheckSignIn.php">
             <input type="text" placeholder="username" id="username" name="username" required/>
             <input type="password" placeholder="password" id="password" name="password" required/>

            <button onclick="geoFindMe()" class="btn btn-info" type="submit" >Sign in</button

            <p class="message">Not registered? <a href="SignUp.php">Create an account</a></p>
        </form>
    </div>
</div>

<script>
    function geoFindMe() {
        var output = document.getElementById("out");

        if (!navigator.geolocation){
            output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
            return;
        }

        function success(position) {
            var latitude  = position.coords.latitude;
            var longitude = position.coords.longitude;

            output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

            var img = new Image();
            img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";

            output.appendChild(img);
        }

        function error() {
            output.innerHTML = "Unable to retrieve your location";
        }

        output.innerHTML = "<p>Locating…</p>";

        navigator.geolocation.getCurrentPosition(success, error);
    }
</script>

<?php include 'Footer.php';?>

</body>
</html>
