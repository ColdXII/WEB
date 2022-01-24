<?php
    //PEKERJAAN PERTAMA
    // class rent
    // {
    //     public $diskon;
    //     public $harga;
    //     public $waktu;

    //     public function __construct( int $diskon = 0, int $harga = 5000, int $waktu = 0)
    //     {
    //         $this->diskon = $diskon;
    //         $this->harga = $harga;
    //         $this->waktu = $waktu;
    //     }

    //     public function setharga(int $harga)
    //     {
    //         $this->harga = $harga;
    //     }

    //     public function getharga()
    //     {
    //         return $this->harga;
    //     }

    //     public function setdiskon(int $diskon)
    //     {
    //         $this->diskon = $diskon;
    //     }
    //     public function getdiskon()
    //     {
    //         return $this->diskon;
    //     }

    //     public function setwaktu(int $waktu)
    //     {
    //         $this->waktu = $waktu;
    //         if($waktu <= 4){
    //             $this->harga * $this->waktu;
    //         }else if($waktu <= 10){
    //             $this->harga * $this->waktu * 5/100;
    //         }else if($waktu <= 24){
    //             $this->harga * $this->waktu * 10/100;
    //         }

    //     }
    //     public function getwaktu()
    //     {
    //         return $this->waktu;
    //     }

    //     function diskon0()
    //     {
    //         $this->harga * $this->waktu;
    //         return ($this->harga * $this->waktu);
    //     }

    //     function diskon5()
    //     {
    //         $hasil = $this->harga * $this->waktu * 5/100;
    //         return ($this->harga * $this->waktu - $hasil);
    //     }

    //     function diskon10()
    //     {
    //         $hasil = $this->harga * $this->waktu * 10/100;
    //         return ($this->harga * $this->waktu - $hasil);
    //     }

    //     public function display():void
    //     {
    //     echo "Total Waktu Sewa : ".$this->getwaktu() ." Jam";
    //     echo "<br>";
    //     echo "Harga : ".$this->getharga();
    //     echo "<br>";
    //     echo "<br>";
    //     // echo "Diskon : ".$this->getdiskon();
    //     // echo "<br>";
    //     // echo "Total Harga: ".  ".$this->getwaktu(). * .$this->getharga()." ".$this->getdiskon()";
    //     }

        
    // }

    // $sewa= new rent;
    // $sewa->waktu = 11;
    // $sewa->harga = 5000;
    // $sewa->diskon = 1;
    // echo $sewa->display(); 


    // if ($sewa->waktu >=0 && $sewa->waktu <=4){
    // echo number_format($sewa->diskon0());
    // echo "<br>";
    // echo "0%";
    // }else if ($sewa->waktu >= 5 && $sewa->waktu <=10){
    // echo number_format($sewa->diskon5());
    // echo "<br>";
    // echo "5%";
    // }elseif($sewa->waktu >=11 && $sewa->waktu <=24){
    // echo number_format($sewa->diskon10());
    // echo "<br>";
    // echo "10%";
    // }else{
    // echo "GAK DAPAT DISKON";
    // }

    class Barang
    {
        private $harga;
        private $diskon;

        public function __construct(int $harga = 5000, int $diskon = 5)
        {
            $this->harga = $harga;
            $this->diskon = $diskon;
        }

        public function getTotal(int $jumlahjam)
        {
            $total = 0;

            if($jumlahjam >= 5)
            {
                $total += $jumlahjam * $this->harga;
                return $total;
            }  elseif($jumlahjam >= 6 && $jumlahjam <= 10)
            {
                $total += $jumlahjam * $this->harga;
            }else{
                return $total;
            }    
        }
    }

    $barang = new Barang();
    echo $barang->getTotal(jumlahjam: 16);


   

    

?>