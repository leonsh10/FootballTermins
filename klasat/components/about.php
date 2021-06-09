<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termini YT</title>
    <link rel="icon" href="../../Pics/logo.png">
    <link rel="stylesheet" href="../../stilizimi/AboutStyle.css">
    <link rel="stylesheet" href="../../stilizimi/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">

</head>
<header>
        <a href="index.php"><img class="llogo" src="../../Pics/logo1.png" alt=""></a>
        <div class="topnav">
            <a href="index.php">Terminet</a>
            <a href="Historia.php">Historia</a>
            <!-- <a href="#">Terminet</a> -->
            <!-- <a href="#">Shto Terminin</a> -->
            <a href="contact.php">Kontakti</a>
            <a href="about.php">Rreth Nesh</a>
            <?php
      if (isset($_SESSION['role']) && $_SESSION['role'] =='1')  {
      ?>
        <a href="dashboard.php">Dashboard</a>
      <?php
      }
      ?>
           <?php
      if (isset($_SESSION['role']))  {
      ?>
         <a class="login" href="../../php/LoginRegister/logout.php">LOGOUT</a> 
      <?php
      }
      else{
          ?>
          
          <a class="login" href="./LogInSignIn.php">LOGIN</a>
        <?php
      }
      ?>
        </div>
    </header>
<body>

    <section>
        <div class="container">
            <div class="grid">
                <div class="left">
                    <img src="../../Pics/about.svg" alt="">
                </div>
                <div class="right">
                    <h4>RRETH NESH !</h4>
                    <h1>TERMINI YT </h1>
                    
                    <p>Termini YT eshte nje aplikacion i cili mundeson rezervimin e termineve te futbollin apo edhe kerkimin e lojtareve. Ekipi i Termini YT eshte i perbere nga 5 antare. </p>
                    <a href="contact.php" class="btn">Kontakto me ne</a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footerContent">
            <div class="footerleft size">
                <h5>TERMINI YT</h5>
                <p>Ne krijojme termine te ndryshme futbolli. <b>GJEJ TERMININ TEND</b></p>
            </div>
            <div class="footerLinks size">
                <h5>EXPLORE</h5>
                <a href="./index.php">Terminet</a>
                <a href="./Historia.php">Historia</a>
                <!-- <a href="#">Terminet</a> -->
                <a href="ShtoTermin.php">Shto Terminin</a>
            </div>
            <div class="footerAddress size">
                <h5>VISIT</h5>
                <p>Lagjia
                Kalabria, 10000
                Prishtine, Kosove</p>
            </div>
            <div class="footerLinks size">
                <h5>FOLLOW</h5>
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
            </div>
            <div class="footerLegal size">
                <h5>LEGAL</h5>
                <p>TermsPrivacy</p>
            </div>
            <div class="footerEmail size">
                <h5>NEW BUSSINESS</h5>
                <p>terminiyt@gmail.com</p>
            </div>
            <div class="footerCopyRights size">
                <h5><i>&copy;</i>2021 TY. All Rights Reserved</h5>
            </div>
        </div>
    </footer>
</body>
</html>