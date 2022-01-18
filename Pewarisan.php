<?php

class Togar
{
   public $nama;
   public $marga;

//    constructor
   public function __construct(string $marga = "siregar", string $nama = "Togar")
   {
       $this->nama = $nama;
       $this->marga =$marga;
   }

   public function setNama(string $nama)
   {
       $this->nama = $nama;
   }

   public function getNama()
   {
       return $this->nama;
   }
   public function display():void
   {
     echo "nama : ". $this->getNama() . "<br>";
     echo "marga : ". $this->getMarga();
   }
   public function getMarga()
   {
       return $this->marga;
   }
}

class Emy extends Togar
{
 
}

$Emy1 = new Emy;
echo $Emy1->display();

