<?php

class contact
{
    protected $username;
    protected $email;
    protected $phone;
    protected $message;


    function __construct($username,  $email, $phone,$message)
    {
     
        $this->username = $username;
        $this->email = $email;
       $this->phone= $phone;
       $this->message=$message;
    }

    
    public function getUsername()
    {
        return $this->username;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function getPhone()
    {
        return $this->phone;
    }
    
    public function getMessage()
    {
        return $this->message;
    }

    // abstract protected function setSession();
    // abstract protected function setCookie();
}
