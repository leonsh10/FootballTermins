<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termini YT</title>
    <link rel="stylesheet" href="../../stilizimi/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="icon" href="../../Pics/logo.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Termini YT</title> 
</head>
<body>
    <header>
        <a href="index.php"><img class="llogo" src="../../Pics/logo1.png" alt=""></a>
        <div class="topnav">
        <div class="topnav">
        <a href="index.php">Terminet</a>
            <a href="Historia.php">Historia</a>
            
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