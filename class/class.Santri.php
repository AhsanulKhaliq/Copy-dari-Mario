<?php

    class Employee extends Connection
    {
        private $namaSantri ='';
        private $pendidikanSantri = '';
        private $tlSantri = '';
        private $tgllSantri = '';
        private $alamatSantri = '';
        private $fotoSantri = '';
        private $emailSantri = '';
        private $kontakSantri = '';
        private $nikSantri = '';
        private $kkSantri = '';
        private $namaWali = '';
        private $kontakWali = '';
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

        public function __set($atribute, $value)
        {
            if(property_exists($this, $atribute))
            {
                return $this->$atribute = $value;
            }
        }

        public function tambahSantri()
        {
            $sql = "INSERT INTO daftar_santri (id_santri, s_fullName, p_lastSchool, s_bodPlace, s_BOD, s_address, s_photo, w_email, w_phone, id_santri, id_familyRegist, w_fullName, w_phone, w_job, w_salary)
                    VALUES ('$this->namaSantri','$this->pendidikanSantri','$this->tlSantri','$this->tgllSantri','$this->alamatSantri','$this->fotoSantri','$this->emailSantri','$this->kontakSantri','$this->nikSantri','$this->kkSantri','$this->namaWali','$this->kontakWali','$this->pekerjaanWali','$this->penghasilanWali')";

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

        public function UpdateEmployee()
        {
            $sql = "UPDATE employee SET fname = '$this->fname', address = '$this->address' WHERE ssn = '$this->ssn'";

            $this->hasil = mysqli_query($this->connection, $sql);
            if ($this->hasil) {
                $this->message = 'Data berhasil diubah';
            }
            else
            {
                $this->message ='Data gagal diubah!';
            }
        }

        public function DeleteEmployee()
        {
            $sql = "DELETE FROM employee WHERE ssn = '$this->ssn'";
            $this->hasil = mysqli_query($this->connection, $sql);
            
            if ($this->hasil) {
                $this->message = 'Data berhasil dihapus';
            }
            else
            {
                $this->message ='Data gagal dihapus!';
            }
        }

        public function SelectAllEmployee()
        {
            $sql = "SELECT * FROM employee";
            $result= mysqli_query($this->connection, $sql);
            $arrResult = Array();
            $count = 0;

            if (mysqli_num_rows($result) > 0) 
            {
                while ($data = mysqli_fetch_array($result))
                {
                    $objEmployee = new Employee();
                    $objEmployee->ssn = $data['ssn'];
                    $objEmployee->fname = $data['fname'];
                    $objEmployee->address = $data['address'];
                    $arrResult[$count] = $objEmployee;
                    $count++;
                }    
            }
            return $arrResult;
        }

        public function SelectOneEmployee()
        {
            $sql = "SELECT * FROM employee WHERE ssn = '$this->ssn'";
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