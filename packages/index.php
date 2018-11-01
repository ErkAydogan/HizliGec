<!DOCTYPE html>
<html>
<title>HIZLIGEÇ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../includes/css/ana.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size: 16px;}
    img {margin-bottom: -8px;}
    .mySlides {display: none;}
</style>

<body class="w3-content w3-white" style="max-width:1500px;">
<!-- Navbar -->
<nav style="margin-top: 1%; background-color: transparent" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <a style="margin-bottom: 0.5%" class="navbar-brand" href="index.php">
                <img style="height: 35px; width: 70px" alt="Brand" src="img/hızlıgec.png">
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Appretix</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php#main">Neden HızlıGeç?</a></li>
                <li><a href="SignUp.php">Kaydolun</a></li>
                <li><a href="Contact.php">Bize Ulaşın</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header with Slideshow -->
<header class="w3-display-container">
    <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button>
    <div class="mySlides w3-animate-opacity">
        <img  style="height: 700px; width: 1500px; background: url(img/Ana.png); background-size: 100%">
        <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div style="margin-left: 15%" class="w3-black  w3-hover-opacity-off w3-padding-large w3-round-large">
                <h1 class="w3-xlarge">Sıra Yok, Sipariş Var</h1>
                <hr class="w3-opacity">
                <p>Uygulamayı hemen ücretsiz indir</p>
                <p><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
            </div>
        </div>
    </div>
    <div class="mySlides w3-animate-opacity">
        <img class="w3-image" src="/w3images/app2.jpg" alt="Image 2">
        <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                <h1 class="w3-xlarge w3-text-red"><b>CLICK!</b> Fast and Easy</h1>
                <hr class="w3-opacity">
                <p>Choose from thousands of features</p>
                <p><button class="w3-button w3-block w3-red w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
            </div>
        </div>
    </div>
    <div class="mySlides w3-animate-opacity">
        <img class="w3-image" src="/w3images/app4.jpg" alt="Image 3" style="min-width:500px" width="1500" height="1000">
        <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
            <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                <h1 class="w3-xlarge">Smart Design</h1>
                <hr class="w3-opacity">
                <p>Customize photos as you go</p>
                <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('download').style.display='block'">Download <i class="fa fa-android"></i> <i class="fa fa-apple"></i> <i class="fa fa-windows"></i></button></p>
            </div>
        </div>
    </div>
    <a href="SignIn.php" class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey">Üye Girişi <i class="fa fa-angle-right"></i></a>
    <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
</header>

<!-- The App Section -->
<div id="main" class="w3-padding-64 w3-white">
    <div class="w3-row-padding">
        <div class="w3-col l8 m6">
            <h1 class="w3-jumbo"><b>Hızlı Geç</b></h1>
            <h1 class="w3-xxxlarge w3-text-green"><b>Neden Kullanmalıyım?</b></h1>
            <p><span class="w3-xlarge">Zaman Kaybına Son.</span> Biryere mi yetişiceksiniz veya siparişinizin sıraya girmeden hazır olmasını mı istiyosunuz? HızlıGeç tam size göre, indirin ve zaman kaybı olmadan restoranlar da ve cafelerde özel hissedin.</p>
            <button class="w3-button w3-light-grey w3-padding-large w3-section w3-hide-small" onclick="document.getElementById('download').style.display='block'">
                <i class="fa fa-download"></i> Download Application
            </button>
            <p>Available for <i class="fa fa-android w3-xlarge w3-text-green"></i> <i class="fa fa-apple w3-xlarge"></i> <i class="fa fa-windows w3-xlarge w3-text-blue"></i></p>
        </div>
        <div class="w3-col l4 m6">
            <img src="img/home1.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
            <div class="w3-center w3-hide-large w3-hide-medium">
                <button class="w3-button w3-block w3-padding-large" onclick="document.getElementById('download').style.display='block'">
                    <i class="fa fa-download"></i> Download Application
                </button>
                <img src="/w3images/img_app.jpg" class="w3-image w3-margin-top" width="335" height="471">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="download" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content" style="padding:32px">
        <div class="w3-container w3-white">
            <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
            <h2 class="w3-wide">DOWNLOAD</h2>
            <p>Download the app in AppStore, Google Play or Microsoft Store.</p>
            <i class="fa fa-android w3-large"></i> <i class="fa fa-apple w3-large"></i> <i class="fa fa-windows w3-large"></i>
            <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
            <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('download').style.display='none'">Fake Download</button>
        </div>
    </div>
</div>

<!-- Clarity Section -->
<div class="w3-padding-64 w3-light-grey">
    <div class="w3-row-padding">
        <div class="w3-col l4 m6">
            <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="img/home2.jpg" alt="App" width="335" height="471">
        </div>
        <div class="w3-col l8 m6">
            <h1 class="w3-jumbo"><b>Beklemeden Siparişinizi Alın</b></h1>
            <h1 class="w3-xxxlarge w3-text-red"><b>Sipariş de Dönüm Noktası.</b></h1>
            <p><span class="w3-xlarge">A revolution in resolution.</span> Sharp and clear photos with the world's best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="w3-container w3-padding-64 w3-dark-grey w3-center">
    <h1 class="w3-jumbo"><b>Hızlı Geç</b></h1>
    <p>Sizin için en hızlı geçişi düşündük.</p>

    <div class="w3-row" style="margin-top:64px">
        <div class="w3-col s3">
            <i class="fa fa-bolt w3-text-orange w3-jumbo"></i>
            <p>Hızlı</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-heart w3-text-red w3-jumbo"></i>
            <p>Loved</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-camera w3-text-yellow w3-jumbo"></i>
            <p>Clarity</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-battery-full w3-text-green w3-jumbo"></i>
            <p>Güçlü</p>
        </div>
    </div>

    <div class="w3-row" style="margin-top:64px">
        <div class="w3-col s3">
            <i class="fa fa-diamond w3-text-white w3-jumbo"></i>
            <p>Sharp</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-cloud w3-text-blue w3-jumbo"></i>
            <p>Cloud</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-globe w3-text-amber w3-jumbo"></i>
            <p>Küresel</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-hdd-o w3-text-cyan w3-jumbo"></i>
            <p>Storage</p>
        </div>
    </div>

    <div class="w3-row" style="margin-top:64px">
        <div class="w3-col s3">
            <i class="fa fa-user w3-text-sand w3-jumbo"></i>
            <p>Güvenli</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-shield w3-text-orange w3-jumbo"></i>
            <p>Stabile</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-wifi w3-text-grey w3-jumbo"></i>
            <p>Connected</p>
        </div>
        <div class="w3-col s3">
            <i class="fa fa-image w3-text-pink w3-jumbo"></i>
            <p>HD</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer style="display: block" class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
    <div class="w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p class="w3-medium">Tüm hakları saklıdır hızlıgec.com@2018</p>
</footer>

<script>
    // Slideshow
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>

</body>
</html>

