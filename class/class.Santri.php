<?php

    class Santri extends Connection
    {
        private $id_santri ='';
        private $s_fullName ='';
        private $tlSantri = '';
        private $s_BOD = '';
        private $s_address = '';
        private $fotoSantri = '';
        
        private $pendidikanSantri = '';
        private $emailWali = '';
        private $kontakWali = '';
        private $nikSantri = '';
        private $kkSantri = '';
        private $namaWali = '';
        private $pekerjaanWali = '';
        private $penghasilanWali = '';
        
        public $hasil = false;
        public $message = 'Silahkan memasukkan data yang valid!';

        public function __get($atribute)
        {
            if(property_exists($this, $atribute))
            {
                return $this->$atribute;
            }
        }

        public function __set($atribut, $value)
        {
            if(property_exists($this, $atribut))
            {
                return $this->$atribut = $value;
            }
        }

        public function tambahSantri()
        {
            $sql = "INSERT INTO santri(id_santri, 
                                    s_fullName, 
                                    s_bodPlace, 
                                    s_BOD, 
                                    s_address, 
                                    s_photo,)
                                VALUES(,
                                '$this->s_fullName',
                                '$this->tlSantri',
                                '$this->s_BOD',
                                '$this->s_address',
                                '$this->fotoSantri')";

            $this->hasil = mysqli_query($this->connection, $sql);

            if ($this->hasil) 
            {
                $this->message = 'Data berhasil ditambahkan!';
            }
            else
            {
                $this->message = 'Data gagal ditambahkan!';
            }
        }

        public function UpdateSantri()
        {
            $sql = "UPDATE santri SET s_fullName = '$this->namaSantri', s_address = '$this->alamatSantri' WHERE id_santri = '$this->id_santri'";

            $this->hasil = mysqli_query($this->connection, $sql);
            if ($this->hasil) {
                $this->message = 'Data berhasil diubah';
            }
            else
            {
                $this->message ='Data gagal diubah!';
            }
        }

        public function DeleteSantri()
        {
            $sql = "DELETE FROM santri WHERE id_santri = '$this->id_santri'";
            $this->hasil = mysqli_query($this->connection, $sql);
            
            if ($this->hasil) {
                $this->message = 'Data berhasil dihapus';
            }
            else
            {
                $this->message ='Data gagal dihapus!';
            }
        }

        public function SelectAllSantri()
        {
            $sql = "SELECT * FROM santri";
            $result= mysqli_query($this->connection, $sql);
            $arrResult = Array();
            $count = 0;

            if (mysqli_num_rows($result) > 0) 
            {
                while ($data = mysqli_fetch_array($result))
                {
                    $objSantri = new Santri();
                    $objSantri->id_santri = $data['id_santri'];
                    $objSantri->s_fullName = $data['s_fullName'];
                    $objSantri->s_address = $data['s_address'];
                    $arrResult[$count] = $objSantri;
                    $count++;
                }    
            }
            return $arrResult;
        }

        public function SelectOneSantri()
        {
            $sql = "SELECT * FROM santri WHERE id_santri = '$this->id_santri'";
            $resultOne = mysqli_query($this->connection, $sql);

            if (mysqli_num_rows($resultOne) == 1) 
            {
                    $this->hasil = true;
                    $data= mysqli_fetch_assoc($resultOne);
                    $this->fname = $data['fname'];
                    $this->address = $data['address'];
            }
        }
    }

?>