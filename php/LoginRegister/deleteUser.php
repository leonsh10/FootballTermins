<?php
include_once '../userMapper.php';
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
    $mapper = new UserMapper();
    $mapper->deleteUser($id_user);
    header("Location:../../klasat/components/dashboard.php");
}
?>