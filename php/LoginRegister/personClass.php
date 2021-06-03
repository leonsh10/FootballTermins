<?php

abstract class Person
{
    protected $emri;
    protected $mbiemri;
    protected $username;
    protected $email;
    protected $password;
    protected $cpassword;
    protected $role;

    function __construct($emri,  $mbiemri, $username,$email,  $password, $cpassword, $role)
    {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->cpassword = $cpassword;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
