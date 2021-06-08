<?php 
session_start();
    include './header.php'
   
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
     <meta charset="UTF-8"> 
    <title> Termini YT </title>
    <link rel="stylesheet" href="../../stilizimi/ShtoTermin.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
    <link rel="icon" href="../../Pics/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body style="display:flex !important;flex-direction:column !important;">

  <div class="container" >
    <div class="title">Shto Terminin
    <div id="errori" style="margin-top:7px;font-size:20px;background-color:#272727;color:green;font-family: montserrat, sans-serif;float:right; ">
            <?php
                         $Msg="";
                         if(isset($_GET['sucAdd'])){
                         $Msg=" Termini u shtua me sukses.";
                         echo $Msg;    
                                    }   
                                    
                                    $Msg2="";
                                    if(isset($_GET['errAdd'])){
                                    $Msg2=" Ploteso te dhenat!";
                                    echo "<font color='red'>".$Msg2."</font>"; 
                                               }          
            ?>
                    </div> 
    </div>
    <div class="content" style="font-family: open-sans, sans-serif;">
      <form action="../../php/terminet/validimTerminet.php" method="post"  >
        <div class="user-details">
          <div class="input-box">
            <span class="details">Emerto Terminin</span>
            <input type="text" name="emertimi" placeholder="Emerto Terminin" style="color:white;" >
          </div>
          <div class="Pozicioni">
            <div class="details">Perzgjedh pozicionin</div>
            <select class="drop1" name="pozicioni">  
              <option value = "Perzgjedh Pozicionin" > Perzgjedh Pozicionin   
              </option> 
              <option value = "Sulmues"> Sulmues   
              </option>  
              <option value = "Mesfushor"> Mesfushor   
              </option>  
              <option value = "Mbrojtes"> Mbrojtes  
              </option>  
              <option value = "Portier"> Portier  
              </option>  
              </select> 
          </div>
          <div class="Komuna">
            <div class="details">Perzgjedh Komunen</div>
            <select class="drop2" name="komuna">  
              <option value = "Perzgjedh Komunen" > Perzgjedh Komunen  
              </option> 
              <option value = "01"> 01-Prishtine   
              </option>  
              <option value = "02"> 02-Mitrovice   
              </option>  
              <option value = "03"> 03-Peje  
              </option>  
              <option value = "04"> 04-Prizeren  
              </option>
              <option value = "05"> 05-Ferizaj  
              </option>
              <option value = "06"> 06-Gjilan  
              </option>
              <option value = "07"> 07-Gjakove  
              </option>
              </select>  
          </div>
          <div class="Transporti">
            <div class="details">Perzgjedh Transportin </div>
            <select class="drop3" name="transporti">  
              <option value = "Perzgjedh Transportin" > Perzgjedh Transportin   
              </option> 
              <option value = "Ekipor"> Ekipor   
              </option>  
              <option value = "Privat"> Privat   
              </option> 
              </select>  
          </div>

          <div class="Fusha">
            <div class="details">Perzgjedh Fushen</div>
            <select class="drop4" name="fusha">  
              <option value = "Perzgjedh Fushen" > Perzgjedh Fushen   
              </option> 
              <option value = "Princ"> Princ   
              </option>  
              <option value = "Arena1"> Arena 1   
              </option> 
              <option value = "Arena2"> Arena 2   
              </option> 
              <option value = "2Korriku"> 2 Korriku   
              </option> 
              </select>  
          </div>

          <div class="ora">
            <div class="details">Cakto Oren</div>
            <input class="ora1" type="time" id="appt" name="ora" 
        min="09:00" max="24:00" >
          </div>
          <div class="data">
            <div class="details">Zgjedh Daten</div>
            <input class="data1" type="date" name="data" >  
          </div>
        </div>
       
        <div class="Chooseafile">
          <div class="teksti">Shto foton e terminit</div>
          <input class="ch1" type="file" id="img" name="foto" accept="image/*">
        </div>
        
 
        
        <div class="button">
      
          <input type="submit" name="submit" value="Krijo Terminin">
        </div>

    
      </form>
    </div>
  </div>
  

</body>
</html>

<?php  
    include './footer.php'
?>
