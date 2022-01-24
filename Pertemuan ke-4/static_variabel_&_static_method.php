<?php

class Hewan
{
    // public $index = 1;

    public static $nama = "Sapi";
    // public $nama = ["Sapi", "Anjing", "Kucing"];

    public static function all()
    {

        echo "Ini contoh function static";


        // foreach($nama as $item)
        // {
        //     echo "Nama " . $nama;
        // }
    }
}

//inisialisasi object

// $objek = new Hewan();
echo Hewan::$nama;

// echo Hewan::$nama;

echo "<br>";
echo Hewan::all();

?>