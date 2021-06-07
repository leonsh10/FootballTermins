<?php 
include_once '../../php/userMapper.php';
include_once '../../php/dboconfig.php';
include_once '../../php/LoginRegister/simpleUserClass.php';
  

session_start();
$emri=$_SESSION['username'];
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
$mapper =  new UserMapper();
$userList = $mapper->getAllUsers();
$contactList=$mapper->getAllContacts();
$terminList=$mapper->getAllTerminet();
}
include './header.php'
?>


<!DOCTYPE html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../../stilizimi/dashboard.css">
</head>
<body style="background-color:#272727;">
<div id="users">
<div style="display:flex;justify-content:center;">
<h2 id="titulliTabeles">Lojtaret</h2>
</div>
        <table>
            <thead>
                <tr>
                    <td >ID</td>
                    <td >Emri</td>
                    <td >Mbiemri</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td >Fshij/Edit</td>
                </tr>
            </thead>
            <tbody>
                <?php
                            
                            if (is_array($userList) || is_object($userList))
                        {
                            foreach ($userList as $user) {
                                ?>
                                    <tr>
                                    <td><?php echo $user['id_user']; ?></td>
                                        <td><?php echo $user['emri']; ?></td>
                                        <td><?php echo $user['mbiemri']; ?></td>
                                        <td><?php echo $user['username']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['role']; ?></td>
                                        <td><button id="butonFshij" style="margin-bottom:10px;"><a style="text-decoration:none;" href=<?php echo "../../php/LoginRegister/deleteUser.php?id_user=" . $user['id_user'];
                                                    ?>>Fshij</button>
                                                    <!-- <button id="butonFshij"><a style="text-decoration:none;" href="#">Edit</button></td> -->
                                                   
                                    </tr>
                                <?php
                                }
                            }
                                ?>
            </tbody>
        </table>
        <div style="display:flex;justify-content:center;">
        <h2 id="titulliTabeles">Contact Us</h2>
</div>
<table>
    <thead>
        <tr>
            <td >Username</td>
            <td >Email</td>
            <td >Phone</td>
            <!-- <td >Message</td> -->

            <td id="mesazhi">Mesazhi</td>
        </tr>
    </thead>
    <tbody>
        <?php
                    
                    if (is_array($contactList) || is_object($contactList))
                {
                    foreach ($contactList as $contact) {
                        ?>
                            <tr>
                            <td><?php echo $contact['username']; ?></td>
                            <td><?php echo $contact['email']; ?></td>
                                <td><?php echo $contact['phone']; ?></td>
                                <td  id="mesazhi"><?php echo $contact['message']; ?></td>
                            </tr>
                        <?php
                        }
                    }
                        ?>
    </tbody>
</table>

</div>
<div style="display:flex;justify-content:center;">
<h2 id="titulliTabeles">Terminet</h2>
                </div>
</div>
        <table>
            <thead>
                <tr>
                    <td >Emertimi</td>
                    <td >Pozicioni</td>
                    <td >Komuna</td>
                    <td>Transporti</td>
                    <td>Fusha</td>
                    <td>Ora</td>
                    <td>Data</td>
                    <td>Foto</td>
                    <td >Fshij/Edit</td>
                </tr>
            </thead>
            <tbody>
                <?php
                            
                            if (is_array($terminList) || is_object($terminList))
                        {
                            foreach ($terminList as $termin) {
                                ?>
                                    <tr>
                                    <td><?php echo $termin['emertimi']; ?></td>
                                        <td><?php echo $termin['pozicioni']; ?></td>
                                        <td><?php echo $termin['komuna']; ?></td>
                                        <td><?php echo $termin['transporti']; ?></td>
                                        <td><?php echo $termin['fusha']; ?></td>
                                        <td><?php echo $termin['ora']; ?></td>
                                        <td><?php echo $termin['data']; ?></td>
                                        <td><?php echo $termin['foto']; ?></td>
                                        <td><button id="butonFshij" style="margin-bottom:10px;"><a style="text-decoration:none;" href=<?php echo "../../php/terminet/deleteTermin.php?id_termini=" . $termin['id_termini'];
                                                    ?>>Fshij</button>
                                                    <button id="butonFshij"><a style="text-decoration:none;" href="#">Edit</button></td>
                                                   
                                    </tr>
                                <?php
                                }
                            }
                                ?>
            </tbody>
        </table>
</body>





</html>




<?php 
    include './footer.php'
?>

