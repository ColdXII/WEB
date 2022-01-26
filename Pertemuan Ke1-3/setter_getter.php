<?php 

class Contoh2
{
    // variable global
    // public $nama;
    // private $harga;
  
    // constructor 
    public function __construct(public string $nama = "Komputer", public int $harga = 100000)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    // function setter dengan parameter
    public function setharga(string $harga)
    {
        $this->harga = $harga;
        // self::$nama = $nama;
    }

    public function getharga()
    {
        return $this->harga;
    }
    public function setnama(string $nama)
    {
        $this->nama = $nama;
    }

    public function getnama():string
    {
        return $this->nama;
    }
    public function display():void
    {
       echo "nama : ".$this->getnama();
       echo "<br>";
       echo "harga : ".$this->getharga();
    }
}
$contoh1 = new Contoh2;
$contoh1->setHarga(harga : 2000000);
$contoh1->setnama("PC");
echo $contoh1->display(); 

?>