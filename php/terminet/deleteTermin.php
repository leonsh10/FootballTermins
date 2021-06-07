<?php
include_once '../userMapper.php';
if (isset($_GET['id_termini'])) {
    $id_termini = $_GET['id_termini'];
    $mapper = new UserMapper();
    $mapper->deleteTermin($id_termini);
    header("Location:../../klasat/components/dashboard.php");
}
?>