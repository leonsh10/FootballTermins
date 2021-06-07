<?php 

session_start();

require_once '../userMapper.php';
include_once 'terminetClass.php';

if(isset($_POST['submit'])){
    $emertimi=$_POST['emertimi'];
    $pozicioni=$_POST['pozicioni'];
    $komuna=$_POST['komuna'];
    $transporti=$_POST['transporti'];
    $fusha=$_POST['fusha'];
    $ora=$_POST['ora'];
    $data=$_POST['data'];
    $foto=$_POST['foto'];


if(verifyEmpty($emertimi,  $pozicioni, $komuna,$transporti,$fusha,$ora,$data,$foto))
{
    header('Location:../../klasat/components/ShtoTermin.php?errAdd');
    
}

// else if(preg_match('/^[0-9]{5,15}+$/', $phone) == false
// || filter_var($email, FILTER_VALIDATE_EMAIL) == false)
// {
//     header('Location:../../klasat/components/contact.php?erroriCon2');
// }
else if (isset($_POST['submit'])) {
    $termini= new TerminLogic($_POST);
    $termini->insertData();
    header('Location:../../klasat/components/ShtoTermin.php?sucAdd');
}
else{
    header('Location:../../klasat/components/index.php');
}
}
else{
   
}




function verifyEmpty($emertimi,  $pozicioni, $komuna,$transporti,$fusha,$ora,$data,$foto){
    if(empty($emertimi) || empty($pozicioni) || empty($komuna) || empty($transporti)|| empty($fusha) || empty($ora) || empty($data)|| empty($foto))
    return true;
    return false;
}


class TerminLogic
{
    
    private $emertimi = "";
    private $pozicioni = "";    
    private $komuna = "";
    private $transporti = "";
    private $fusha = "";
    private $ora = "";
    private $data = "";
    private $foto = "";

    public function __construct($formData)
    {
       
        $this->emertimi = $formData['emertimi'];
        $this->pozicioni = $formData['pozicioni'];
        $this->komuna = $formData['komuna'];
        $this->transporti = $formData['transporti'];
        $this->fusha = $formData['fusha'];
        $this->ora = $formData['ora'];
        $this->data = $formData['data'];
        $this->foto = $formData['foto'];
    }

    public function insertData()
    {
        $termini = new termin($this->emertimi,$this->pozicioni, $this->komuna,$this->transporti,$this->fusha,$this->ora, $this->data,$this->foto);
        $mapper = new UserMapper();
        $mapper->insertTermin($termini);
        header('Location:../../klasat/components/index.php');
    }
}

?>