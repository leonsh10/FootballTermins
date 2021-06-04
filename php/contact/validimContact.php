<?php 

session_start();

require_once '../userMapper.php';
include_once 'contactClass.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];


if(verifyEmpty($username,$email,$phone,$message))
{
    header('Location:../../klasat/components/contact.php?erroriCon');
    
}

else if(preg_match('/^[0-9]{5,15}+$/', $phone) == false
|| filter_var($email, FILTER_VALIDATE_EMAIL) == false)
{
    header('Location:../../klasat/components/contact.php?erroriCon2');
}
else if (isset($_POST['submit'])) {
    $contact= new ContactLogic($_POST);
    $contact->insertData();
    header('Location:../../klasat/components/contact.php?sentSuc');
}
else{
    header('Location:../../klasat/components/contact.php');
}
}
else{
   
}




function verifyEmpty($username,$email,$phone,$message){
    if(empty($username) || empty($email) || empty($phone) || empty($message))
    return true;
    return false;
}


class ContactLogic
{
    
    private $username = "";
    private $email = "";
    private $phone = "";
    private $message = "";

    public function __construct($formData)
    {
       
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->phone = $formData['phone'];
        $this->message = $formData['message'];
    }

    public function insertData()
    {
        $contact = new contact($this->username,$this->email, $this->phone,$this->message);
        $mapper = new UserMapper();
        $mapper->insertContact($contact);
        header('Location:../../klasat/components/contact.php');
    }
}

?>