<?php

include 'Database.php';
$database = new Database();

$username = $_POST["username"];
$password = md5($_POST["password"]);


if(!$database->userExists($username)){
    ?>
    <script>
        alert("there is no such username!!!!");
        window.location.href = "SignIn.php";
    </script>
    <?php


    
}else if(!$database->passwordCorrect($password,$username)){
    ?>
    <script>
        alert("the password is incorrect!!!");
        window.location.href = "SignIn.php";
    </script>
    <?php

    
}else{
    session_start();
    $_SESSION['status'] = 1;
    $_SESSION['currentUser'] = $username;
    

    if($database->isAdmin($username)){
        header('Location: AdminProfile.php');
    }else{
        header('Location: UserProfile.php');
    }
}
