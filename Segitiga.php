<!-- class segitiga -->
<?php
    require_once 'Bentuk2D.php';
    class Segitiga extends Bentuk2D
    {
        public $alas;
        public $tinggi;
        public $sisiA;
        public $sisiB;
        public $sisiC;

        public function __construct($alas, $tinggi, $sisiA, $sisiB, $sisiC) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->sisiA = $sisiA;
            $this->sisiB = $sisiB;
            $this->sisiC = $sisiC;
        }

        public function namaBidang() {
            $name = 'Segitiga';
            return $name;
        }

        public function luasBidang()
        {
            $luas = ($this->alas * $this->tinggi) * 0.5;
            return $luas;
        }

        public function kelilingBidang() {
            $keliling = $this->sisiA + $this->sisiB + $this->sisiC;
            return $keliling;
        }
    }