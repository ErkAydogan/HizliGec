<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
         /*Contact sectiom*/
     .content-header{
         font-family: 'Oleo Script', cursive;
         color:#fcc500;
         font-size: 45px;
     }

    .section-content{
        text-align: center;

    }
    #contact{

        font-family: 'Teko', sans-serif;
        padding-top: 60px;
        width: 100%;
        width: 100vw;
        height: 850px;
        background: #3a6186; /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color : #fff;
    }
    .contact-section{
        padding-top: 40px;
    }
    .contact-section .col-md-6{
        width: 50%;
    }

    .form-line{
        border-right: 1px solid #B29999;
    }

    .form-group{
        margin-top: 10px;
    }
    label{
        font-size: 1.3em;
        line-height: 1em;
        font-weight: normal;
    }
    .form-control{
        font-size: 1.3em;
        color: #080808;
    }
    textarea.form-control {
        height: 135px;
        /* margin-top: px;*/
    }

    .submit{
        font-size: 1.1em;
        float: right;
        width: 150px;
        background-color: transparent;
        color: #fff;

    }

</style>
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
<section id="contact">
    <div class="section-content">
        <h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Bize Ulaşın</span></h1>
        <h3>Destek ekibimiz size en kısa zamanda  dönücektir.</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form>
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">İsim Soyisim</label>
                        <input type="text" class="form-control" id="" placeholder=" İsim">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email Adresi</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Email">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telefon Numarası</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Tel">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for ="description"> Mesaj</label>
                        <textarea  class="form-control" id="description" placeholder="Mesajınızı girin..."></textarea>
                    </div>
                    <div>

                        <button type="button" action="mailto:erk.aydogan@yahoo.com" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Gönder</button>
                    </div>

                </div>
            </form>
        </div>
</section>

<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
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
