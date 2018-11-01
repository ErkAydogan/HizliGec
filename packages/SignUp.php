<?php include 'Header.php';
include 'Database.php';
$database = new Database(); ?>

<link href="../includes/css/UyeOl.css" rel="stylesheet">
-
<head>
    <title>
        Üye Olun
    </title>
</head>
<body style="background: url('img/Uyeyap.jpg'); background-size: 100%">



<div style="margin-right: 30%; color: whitesmoke" class="col-xs-12 col-sm-8">
    <h1>Zaman Kaybetmeden Siparişiniz</h1>
    <h1>Siz Gidince Hazır Olsun</h1>
    <br><br>
</div>

<div  style="margin-left: 20%" class="container">

    <form id="signup" method="POST" action="CheckSignUp.php">

        <div class="header">

            <h3>Sign Up</h3>

        </div>

        <div class="sep"></div>

        <div class="inputs">
            <input type="text" placeholder="Name" id="Name" name="Name" autofocus required/>
            <input type="text" placeholder="Surname"  id="Surname" name="Surname" autofocus required/>
            <input type="email" placeholder="e-mail"  id="e-mail" name="e-mail" autofocus required/>
            <input type="text" placeholder="Username" id="Username" name="Username" autofocus required/>
            <input type="password" placeholder="Password" id="Password" name="Password" required/>
            <input type="text" placeholder="Phone Number" id="number" name="number" autofocus />


            <section title=".roundedTwo">

                <div class="roundedTwo">
                    <input type="checkbox" value=1 id="check" name="check"   Label text</label>İşletme misiniz?
                </div>

            </section>
            <button class="btn btn-info" type="submit" >Sign up</button>
        </div>

    </form>

</div>
​

<?php include 'Footer.php';?>
</body>
</html>