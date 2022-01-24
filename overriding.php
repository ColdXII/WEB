<?php


class Keluarga1
{
    public $nama;
    public $marga;
    public $status;
    //public $mata_pelajaran snack case

    public function __construct(String $nama = "Togar", String $marga = "Siregar", String $status = "Bapak")
    {
        $this->nama = $nama;
        $this->marga = $marga;
        $this->status = $status;
    }

    public function getName() : String
    {
        return $this->nama;
    }

    public function getMarga() : String
    {
        return $this->marga;
    }

    public function getStatus() : String
    {
        return $this->status;
    }

    public function display():void
    {
        echo $this->judul(). "<br>"; //overloading
        echo "Nama : " . $this->getName() . "<br>";
        echo "Marga : " . $this->getMarga() . "<br>";
        echo "Status : " . $this->getStatus();
    }

    public function judul() : void
    {
        echo "Ini dari Class " . $this->getStatus() . "<br>";
    }
}


class Keluarga2 extends Keluarga1
{
    public $role;

    public function __construct(String $nama = "Stanley", String $marga = "Siregar", String $status = "Anak", String $role = "Feeder")
    {
        //overriding construct
        parent::__construct($nama, $marga, $status);
        $this->role = $role;
    }

    public function getRole() : String
    {
        return $this->role;
    }


    public function displayChild(): void
    {
        echo parent::display();
        echo "<br>" . "Role : " . $this->getRole();
    }

}

//inisialisasi objek

$Keluarga1 = new Keluarga1();
$Keluarga2 = new Keluarga2();
echo $Keluarga1->display();
echo "<hr>";
echo $Keluarga2->displayChild();

















?>