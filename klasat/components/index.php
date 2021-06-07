<?php 
session_start();
    include './header.php'
   
?>

<?php
include_once '../../php/userMapper.php';
include_once '../../php/dboconfig.php';
include_once '../../php/LoginRegister/simpleUserClass.php';

// $emri=$_SESSION['username'];

$mapper =  new UserMapper();
$terminList=$mapper->getAllTerminet();

?>
    <content>
      <div class="mainContent">
        <div class="search1">
          <div class="shtoTermin">
          <a href="ShtoTermin.php" class="shto">
              <i class="fas fa-plus"></i>Shto terminin
            </a>
          </div>
          <div class="search">
            <input type="text" name="search" placeholder="Kerko..." class="input" />

            <a href="#" class="btn">
              <i class="fas fa-search"></i>
            </a>
          </div>
        </div>
        <?php
                            
                            if (is_array($terminList) || is_object($terminList))
                        {
                            foreach ($terminList as $termin) {
                                ?>
        <div class="terminet">
          <img src="../../Pics/stadiumi1.jpeg" class="foto"/>
          <div class="teksti">
            <h4 style="padding-bottom: 35px;"><?php echo $termin['emertimi']; ?></h4>
            <p class="paragraph"><b>Pozicioni:</b><?php echo $termin['pozicioni']; ?></p>
            <p class="paragraph"><b>Komuna:</b> <?php echo $termin['komuna']; ?></p>
            <p class="paragraph"><b>Transporti:</b> <?php echo $termin['transporti']; ?></p>
            <p class="paragraph"><b>Fusha:</b> <?php echo $termin['fusha']; ?></p>
            <p class="paragraph"><b>Ora:</b> <?php echo $termin['ora']; ?></p>
            <p class="paragraph"><b>Data:</b> <?php echo $termin['data']; ?></p>
          </div>
        </div>
     
        <?php }}?>
       
      </div>
    </content>
<?php 
    include './footer.php'
?>