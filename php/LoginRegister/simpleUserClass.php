<?php
include_once 'personClass.php';

class SimpleUser extends Person
{
   
    public function __construct($emri,  $mbiemri, $username,$email,  $password, $cpassword, $role)
    {
        parent::__construct($emri,  $mbiemri, $username,$email,  $password, $cpassword, $role);
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }



    public function getEmri()
    {
        return $this->emri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
   
    public function getPassword()
    {
        return $this->password;
    }
    public function getCPassword()
    {
        return $this->cpassword;
    }
    
    public function getRole()
    {
        return $this->role;
    }
}
