<?php
include 'Database.php';
$database = new Database();

$username = $_POST["Username"];
$password = $_POST["Password"];
$name = $_POST["Name"];
$surname = $_POST["Surname"];
$email = $_POST["e-mail"];
if(strlen($_POST["number"]) ==0 )
    $pNumber = "null";
else
    $pNumber = $_POST["number"];

if(isset($_POST["check"])){
    $isAdmin = 1;
}else
    $isAdmin = 0;


  #TODO try to only empty the fields that are illegal and leave the rest
if(strlen($username)==0){
    ?>
    <script>
        alert("please enter A USERNAME!!!!");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else if(strlen($name)==0){
    ?>
    <script>
        alert("please enter A NAME!!!!");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else if(strlen($surname)==0){
    ?>
    <script>
        alert("please enter A SURNAME!!!!");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else if(strlen($email)==0){
    ?>
    <script>
        alert("please enter AN EMAIL!!!!");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else if($database->userExists($username)){
    ?>
    <script>
        alert("THERE IS already a user with this username!!!!" + "\n" + "please choose another username.");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else if($database->emailExists($email)){
    ?>
    <script>
        alert("THERE IS already a user using this email address!!!!" + "\n" + "please enter another email address.");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else if(strlen($password)<6 || strlen($password)>30){
    ?>
    <script>
        alert("password should at least 6 characters and no more than 30!!" + "\n" + "please try a different password");
        window.location.href = "SignUp.php";
    </script>
    <?php

}else {
    $database->createUser($username,md5($password),$name,$surname,$email,$pNumber,$isAdmin);

        session_start();
        $_SESSION['status'] = 1;
        $_SESSION['currentUser'] = $username;


        if($isAdmin){
        ?>
        <script>
            alert("Account successfully created!! ");
            window.location.href = "AdminProfile.php";
        </script>

        <?php
    }else{
            ?>
            <script>
                alert("Account successfully created!! ");
                window.location.href = "UserProfile.php";
            </script>

            <?php

        }
}
