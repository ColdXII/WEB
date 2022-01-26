<?php

class binatang
{
    // public $nama; // variable global
    // public $jenis;

//  public function __construct($nama = "Molly", $jenis = "mini pom")
//  {
//    $this->nama = $nama;
//    $this->jenis = $jenis;
//  }

// attribute promotions

   public function __construct(public $nama ="Molly", public $jenis = "mini pom")
   {
       
   }
   public function display():void
   {
       echo "nama : ".$this->nama . "<br>";
       echo "jenis : ".$this->jenis;
   }
}

// inisialisasi objek
$binatang1 = new binatang("Black", "Helder");

echo $binatang1->display();