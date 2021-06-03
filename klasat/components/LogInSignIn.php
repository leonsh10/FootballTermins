<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"  
      
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../../stilizimi/Login.css" />
    <link rel="icon" href="../../Pics/logo.png">
    <title>Termini YT</title>
  
  </head>
  <body>
    <div style="width: 100%; height: 25px; background-color: #272727;">
    <a href="index.php" style="float: right; color: black; text-decoration: none; back"><i class="fa fa-home" aria-hidden="true"></i></a> </div>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../../php/LoginRegister/validimLogin.php" method="post" class="sign-in-form">
            <div id="errori" style="height:30px;margin-top:-15px; background-color:#1a1a1a;color:red;font-family: montserrat, sans-serif;text-align:center; ">
              <?php
                      $Msg="";
                      if(isset($_GET['error'])){
                  $Msg=" Ploteso te dhenat!! ";
                  echo $Msg;    
                      }
                  else if(isset($_GET['errori'])){
                      $Msg=" Username ose Password GABIM! ";
                      echo $Msg;   
              }           
          ?>
          </div> 
            <h2 class="title">Kyqu</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="Kyqu" class="btn solid" />
            
          
          </form>
         

          <form action="../../php/LoginRegister/validimRegister.php" method="post" class="sign-up-form">
          <div id="errori" style="height:15px; margin-top:-9px ;margin-bottom:7px ;background-color:#1a1a1a;color:red;font-family: montserrat, sans-serif;text-align:center; ">
            <?php
                         $Msg="";
                         if(isset($_GET['erroriReg'])){
                         $Msg=" Please Fill All Your Data ";
                         echo $Msg;    
                                    }             
            ?>
                    </div> 
            <h2 class="title">Profil i ri </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="emri" placeholder="Emri" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="mbiemri" placeholder="Mbiemri" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
      
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="cpassword" placeholder="Confirm Password" />
            </div>
            <input type="submit" name="submit2" id="submit2" class="btn" value="Krijo" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Përdorues i ri ?</h3>
            <p>
              Termini YT të mundëson që të krijoni ekipen tuaj për terminin e ardhshem, por gjithashtu qe ju të gjeni terminin e rradhes.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Krijo nje llogari
            </button>
          </div>
          <img src="../../Pics/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Keni Llogari ?</h3>
            <p>
              Kyquni në llogarin që egziston.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Kyquni
            </button>
          </div>
          <img src="../../Pics/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../../JS/Login.js"></script>
  </body>
</html>