<?php

session_start();
require_once '../userMapper.php';
include_once 'simpleUserClass.php';
include_once 'adminClass.php';
if(isset($_POST['submit2'])){
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    if(verifyEmpty($username,$password,$email,$emri,$mbiemri,$cpassword) || preg_match('/^[a-zA-Z0-9]{5,30}+$/', $username) == false
    || filter_var($email, FILTER_VALIDATE_EMAIL) == false
    ){
        header('Location:../../klasat/components/LogInSignIn.php?erroriReg');
    }
    else if (isset($_POST['submit2'])) {
        $register = new RegisterLogic($_POST);
        $register->insertData();
        header('Location:../../klasat/components/LogInSignIn.php');
    }
    else{
        header('Location:../../klasat/components/LogInSignIn.php');
    }
}
else{
   
}

function verifyEmpty($username,$password,$email,$emri,$mbiemri,$cpassword){
    if(empty($username) || empty($password) || empty($email) || empty($emri) || empty($mbiemri) || empty($cpassword))
    return true;
    return false;
}

class RegisterLogic
{
    private $emri = "";
    private $mbiemri = "";
    private $username = "";
    private $email = "";
    private $password = "";
    private $cpassword = "";

    public function __construct($formData)
    {
        $this->emri = $formData['emri'];
        $this->mbiemri = $formData['mbiemri'];
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];
        $this->cpassword = $formData['cpassword'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->emri, $this->mbiemri,$this->username,$this->email, $this->password,$this->cpassword,0);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header('Location:../../klasat/components/LogInSignIn.php');
    }
}



?>