<?php

class termin
{
    protected $emertimi;
    protected $pozicioni;
    protected $komuna;
    protected $transporti;
    protected $fusha;
    protected $ora;
    protected $data;
    protected $foto;



    function __construct($emertimi,  $pozicioni, $komuna,$transporti,$fusha,$ora,$data,$foto)
    {
     
        $this->emertimi = $emertimi;
        $this->pozicioni = $pozicioni;
       $this->komuna= $komuna;
       $this->transporti=$transporti;
       $this->fusha = $fusha;
       $this->data= $data;
       $this->ora=$ora;
       $this->foto=$foto;
    }

    
    public function getEmertimi()
    {
        return $this->emertimi;
    }

    
    public function getPozicioni()
    {
        return $this->pozicioni;
    }

    
    public function getKomuna()
    {
        return $this->komuna;
    }
    
    public function getTransporti()
    {
        return $this->transporti;
    }

    public function getFusha()
    {
        return $this->fusha;
    }

    
    public function getOra()
    {
        return $this->ora;
    }

    
    public function getData()
    {
        return $this->data;
    }
    
    public function getFoto()
    {
        return $this->foto;
    }

    // abstract protected function setSession();
    // abstract protected function setCookie();
}
