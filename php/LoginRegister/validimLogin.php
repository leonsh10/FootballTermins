<?php


// include('variables.php');
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once '../userMapper.php';
session_start();

if (isset($_POST['submit'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
    
} 
 else {
    header('Location:../../klasat/components/LogInSignIn.php');
}   

class LoginLogic{

  
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

public function verifyData()
    {
        if ($this->vEmpty($this->username, $this->password)) {
            header('Location:../../klasat/components/LogInSignIn.php?error');
        } 
        else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            header('Location:../../klasat/components/index.php');
        }
        
        else{
            header('Location:../../klasat/components/LogInSignIn.php?errori');
        }

    }

private function vEmpty($username, $password)
{
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}
private function usernameAndPasswordCorrect($username, $password)
{
    $mapper = new UserMapper();
    $user = $mapper->getUserByUsername($username);
    if ($user == null || count($user) == 0)   header('Location:../../klasat/components/LogInSignIn.php?error');
    else if (password_verify($password,$user['password'])) {
        if ($user['role'] == 1) {
            $obj = new Admin($user['emri'],$user['mbiemri'],$user['username'], $user['email'],$user['password'],$user['cpassword'],$user['role']);
            $obj->setSession();
            // $_SESSION['username']=$_REQUEST['username'];
        } else {
            $obj = new SimpleUser($user['emri'],$user['mbiemri'],$user['username'],$user['email'],$user['password'],$user['cpassword'],$user['role']);
            $obj->setSession();
        }
        return true;
    } else return false;
}

}

?>