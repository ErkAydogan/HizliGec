<!DOCTYPE html>
<html>

<?php include 'Header.php';?>

<link href="../includes/css/login.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<body>

<div class="col-xs-12 col-sm-8">

    <br><br>
</div>

<div class="login-page">
    <div class="form">
        <form class="login-form" method="POST" action="CheckSignIn.php">
             <input type="text" placeholder="username" id="username" name="username" required/>
             <input type="password" placeholder="password" id="password" name="password" required/>
            <button class="btn btn-info" type="submit" >Sign in</button>
            <p class="message">Not registered? <a href="SignUp.php">Create an account</a></p>
        </form>
    </div>
</div>

<?php include 'Footer.php';?>

</body>
</html>
