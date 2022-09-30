<?php
    class Pegawai
    {
        // public variable
        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        // constructor
        public function __construct($nip, $nama, $jabatan, $agama, $status)
        {
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
        }

        /**
         * function untuk menentukan gaji pokok dengan switch case
         * jika jabatan nya 'manager' gapok nya 15 juta
         * jika jabatan nya 'asisten manager' gapok nya 10 juta
         * jika jabatan nya 'kepala bagian' gapok nya 7 juta
         * jika jabatan nya 'staff' gapok nya 4 juta.
         * 
         * lalu mengembalikan nilai dari variable gapok
         */
        public function setGapok() {
            switch ($this->jabatan) {
                case 'Manager': $gapok = 15000000; break;
                case 'Asisten Manager': $gapok = 10000000; break;
                case 'Kepala Bagian': $gapok = 7000000; break;
                case 'Staff': $gapok = 4000000; break;
                default: $gapok = 0; break;
            }

            return $gapok;
        }

        /**
         * function untuk menentukan tunjangan jabatan
         * ditentukan dengan cara 20% dari gaji pokok.
         * 
         * lalu mengembalikan nilai dari variable tunjab
         */
        public function setTunjab() {
            $tunjab = $this->setGapok() * 20 /100;
            return $tunjab;
        }

        /**
         * function untuk menentukan tunjangan keluarga
         * jika status nya sudah menikah maka mendapatkan tunjangan keluarga 10% dari gaji pokok
         * jika belum menikah tidak akan mendapatkan tunjangan keluarga.
         * 
         * lalu mengembalikan nilai dari variable tunkel
         */
        public function setTunkel() {
            $tunkel = ($this->status == 'Menikah') ? $this->setGapok() * 10 / 100 : 0;
            return $tunkel;
        }

        /**
         * function untuk menentukan gaji kotor dengan cara
         * menjumlahkan gaji pokok, tunjangan jabatan dan tunjangan keluarga.
         * 
         * lalu mengembalikan nilai dari variable gator
         */
        public function setGator() {
            $gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
            return $gator;
        }

        /**
         * function untuk menentukan zakat profesi
         * jika agama nya islam dan dan gaji kotor nya minimal 6 juta, maka
         * akan membayar zakat 2,5% dari gaji kotor nya, jika tidak sesuai syarat maka tidak membayar zakat.
         * 
         * lalu mengembalikan nilai dari variable zaprof
         */
        public function setZakatProfesi() {
            $zaprof = ($this->agama == 'Islam' && $this->setGator() >= 6000000) ? $this->setGator() * 2.5 / 100 : 0;
            return $zaprof;
        }

        /**
         * function untuk menentukan uang yang dibawa kerumah
         * dengan cara jumlah gator dikurang zakat profesi.
         * 
         * lalu mengembalikan nilai dari variable takeHomePay
         */
        public function setTakeHomePay() {
            $takeHomePay = $this->setGator() - $this->setZakatProfesi();
            return $takeHomePay;
        }

        // function untuk mencetak struktur gaji pegawai
        public function mencetak() {
            echo '<h5 class="card-title fw-bold">'.$this->nama.'</h5>';
            echo '<p class="card-text">
                    NIP: '.$this->nip.
                    '<br />Jabatan: '.$this->jabatan.
                    '<br />Agama: '.$this->agama.
                    '<br />Status: '.$this->status.
                    '<br />Gaji Pokok: Rp. '.number_format($this->setGapok(), 2, ',', '.').
                    '<br />Tunjangan Jabatan: Rp. '.number_format($this->setTunjab(), 2, ',', '.').
                    '<br />Tunjangan Keluarga: Rp. '.number_format($this->setTunkel(), 2, ',', '.').
                    '<br />Gaji Kotor: Rp. '.number_format($this->setGator(), 2, ',', '.').
                    '<br />Zakat Profesi: Rp. '.number_format($this->setZakatProfesi(), 2, ',', '.').
                    '<br />Take Home Pay: Rp. '.number_format($this->setTakeHomePay(), 2, ',', '.').
                '</p>';
        }
    }
?>