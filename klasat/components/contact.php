<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Termini YT
    </title>
    <link rel="icon" href="../../Pics/logo.png">
    <link rel="stylesheet" href="../../stilizimi/ContactStyle.css" />
    <link rel="stylesheet" href="../../stilizimi/index.css">
    <link rel="icon" href="logo.png">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
  </head>
  <body>
  <header>
        <a href="index.php"><img class="llogo" src="../../Pics/logo1.png" alt=""></a>
        <div class="topnav">
        <div class="topnav">
            <a href="index.php">Kryefaqja</a>
            <a href="Historia.php">Historia</a>
            <a href="#">Terminet</a>
            <a href="#">Shto Terminin</a>
            <a href="contact.php">Kontakti</a>
            <a href="about.php">Rreth Nesh</a>
            <a class="login" href="./LogInSignIn.php">Log In/Sign Up</a>
        </div>
    </header> 
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Na Kontaktoni</h3>
          <p class="text">
            Na kontaktoni ne qofte se keni ndonje sygjerim per ndryshime.
          </p>

          <div class="info">
            <div class="information">
              <img src="../../Pics/location.png" class="icon" alt="" />
              <p>Lagjja Kalabria,10000 Prishtine, Kosovo</p>
            </div>
            <div class="information">
              <img src="../../Pics/email.png" class="icon" alt="" />
              <p>terminiyt@gmail.com</p>
            </div>
            <div class="information">
              <img src="../../Pics/phone.png" class="icon" alt="" />
              <p>+383 (0) 44 000 000</p>
            </div>
          </div>

          <div class="social-media">
            <p>Na gjeni edhe ne :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="../../php/contact/validimContact.php" method="post"  autocomplete="off">
          <div id="errori" style="height:20px;width:fit-content; ;background-color:#a0a0a0;color:#00ff43;font-family: montserrat, sans-serif;text-align:center; ">
            <?php
                         $Msg="";
                         if(isset($_GET['sentSuc'])){
                         $Msg=" Forma juaj u dergua me sukses!";
                         echo $Msg;    
                                    }     
                                    $Msg1="";
                                    if(isset($_GET['erroriCon'])){
                                    $Msg1=" Ploteso te dhenat.";
                                    echo $Msg1;    
                                               }       
                                               $Msg2="";
                                    if(isset($_GET['erroriCon2'])){
                                    $Msg2=" Shkruaj numrin sakte!";
                                    echo $Msg2;    
                                               }   
            ?>
                    </div> 
            <h3 class="title">Na Kontaktoni</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" ></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Dergo" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <footer>
        <div class="footerContent">
            <div class="footerleft size">
                <h5>TERMINI YT</h5>
                <p>Ne krijojme termine te ndryshme futbolli. <b>GJEJ TERMININ TEND</b></p>
            </div>
            <div class="footerLinks size">
                <h5>EXPLORE</h5>
                <a href="./index.php">Kryefaqja</a>
                <a href="./Historia.php">Historia</a>
                <a href="#">Terminet</a>
                <a href="#">Shto Terminin</a>
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
    <script src="../../JS/app.js"></script>
  </body>
</html>
