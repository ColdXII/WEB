<?php

    class User
    {
        public $nama;
        public $umur;

        public function _construct()
        {
            $this->nama ="";
            $this->umur ="";
        }
    }

    $user1 = new User();
    echo $user1->nama = "Steven";
    echo $user1->umur = 24;
?>