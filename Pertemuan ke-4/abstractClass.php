<?php

abstract class Product
{
    //syarat :
    //1. memiliki atribute / properties harus public
    //2. memiliki function yang bersifat abstract
    //3. tidak memiliki contain body dalam function
    //4. harus sama dengan class implementasinya

    abstract public function judul();
}

class Buku extends Product
{
    public $nama;

    public function __construct(string $nama = "JOKOWI WIDODO")
    {
      $this->nama = $nama;   
    }

    public function getNama() : string
    {
        return $this->nama;
    }
    public function judul() : void //Overriding
    {
        echo $this->getNama();
    }

    public function getJudul()
    {
        return $this->nama;
    }
}

$buku1 = new Buku();
echo $buku1->getJudul();












?>