<?php

// 1. menampilkan isi array
// 2. mencari isi nilai yang dicari
// function dengan parameter + logika

class Search
{
    public $names = ["Khellmy", "Suryanto", "Steven", "Kelvin", "Stenly", "Ricardo", "Sefryanto", "Tasya", "Angel", "Alvina", "Venty", "Sukarta"];
    public bool $Search = true;

    public function all():Search
    {
        $index = 1;
        echo "Nama Siswa: <br>";

        foreach($this->names as $nama)
        {
            echo $index++ . ". " . $nama . "<br>";
        }
        return $this;
    }

    public function searchName(String $searchName):void
    {
        echo "<br> Nama :  [" . $searchName . "] <br>";
        for($i = 0; $i < count($this->names); $i++ )
        {
            if($searchName == $this->names[$i])
            {
                $this->search = true;
                echo "Nama : [" . $this->names[$i] . "] ada di index : " . ($i+1);
            }
        }
        if($this->Search == false)
        {
            echo "Nama : [" . $searchName . "] tidak ada di array <br>";
        }
    }
}

$cari = new Search();
echo $cari->all()->searchName(searchName: "Steven");

?>