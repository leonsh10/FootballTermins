<?php 

session_start();

require_once '../userMapper.php';
include_once 'contactClass.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
}






function verifyEmpty($username,$email,$phone,$message){
    if(empty($username) || empty($email) || empty($phone) || empty($message))
    return true;
    return false;
}

?>