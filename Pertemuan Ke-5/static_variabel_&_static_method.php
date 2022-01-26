<?php
// static memiliki 2 jenis
// 1. early static
// 2. late static


// 1. early static
class Hewan
{
    public static $index = 1; // variabel global

    // public static $nama = "Sapi";
    public static $nama = ["Sapi", "Anjing", "Kucing"];

    public static function all()
    {
        $index = 1; // variabel local

        echo "Ini contoh function static" . "<br>";


        foreach(self::$nama as $item)
        {
            echo $index++ . ". " . $item . "<br>";
        }
    }

    public function display()
    {
        echo self::all();
    }
}

class SubHewan extends Hewan

{

}

//inisialisasi object

// $objek = new Hewan();
// echo Hewan::$nama;

// echo Hewan::$nama;

echo "<br>";
$objek = new SubHewan();
echo $objek->display();
echo "<br>" . "---------------------------------------------------------";
echo "<br>";


// 2. late static









?>