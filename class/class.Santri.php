<?php

    class Santri extends Connection
    {
        private $id_santri ='';
        private $s_fullName ='';
        private $s_bodPlace = '';
        private $s_BOD = '';
        private $s_address = '';
        private $s_photo = '';
        
        private $id_wali = '';
        private $w_email = '';
        private $w_phone = '';
        private $w_familyRegist = '';
        private $w_fullName = '';
        private $w_job = '';
        private $w_salary = '';

        private $id_pendidikan = '';
        private $p_lastSchool = '';
        private $p_certificate = '';
        private $p_transcript = '';
        
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
                                        s_photo)
                                    VALUES('$this->id_santri',
                                    '$this->s_fullName',
                                    '$this->s_bodPlace',
                                    '$this->s_BOD',
                                    '$this->s_address',
                                    '$this->s_photo')";
        
            $this->hasil1 = mysqli_query($this->connection, $sql);
        
            if ($this->hasil1) 
            {
                $this->message = 'Data santri berhasil ditambahkan!';
            }
            else
            {
                $this->message = 'Data santri gagal ditambahkan!';
            }

            $sql2 = "INSERT INTO wali(id_wali,
                                        id_santri,
                                        w_fullName,
                                        w_address,
                                        w_phone,
                                        w_email,
                                        w_familyRegist,
                                        w_job,
                                        w_salary)
                                    VALUES('$this->id_wali',
                                    '$this->id_santri',
                                    '$this->w_fullName',
                                    '$this->s_address',
                                    '$this->w_phone',
                                    '$this->w_email',
                                    '$this->w_familyRegist',
                                    '$this->w_job',
                                    '$this->w_salary')";
            
            $this->hasil2 = mysqli_query($this->connection, $sql2);
        
            if ($this->hasil2) 
            {
                $this->message = 'Data wali berhasil ditambahkan!';
            }
            else
            {
                $this->message = 'Data wali gagal ditambahkan!';
            }
                
            // Insert into pendidikan table
            $sql3 = "INSERT INTO pendidikan(id_pendidikan,
                                        id_santri,
                                        p_lastSchool,
                                        p_certificate,
                                        p_transcript)
                                    VALUES('$this->id_pendidikan',
                                    '$this->id_santri',
                                    '$this->p_lastSchool',
                                    '$this->p_certificate',
                                    '$this->p_transcript')";
            
            $this->hasil3 = mysqli_query($this->connection, $sql3);
        
            if ($this->hasil3) 
            {
                $this->message = 'Data pendidikan berhasil ditambahkan!';
            }
            else
            {
                $this->message = 'Data pendidikan gagal ditambahkan!';
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

        public function SelectOneSantri(){
            $sql = "SELECT * FROM santri WHERE id_santri = '$this->id_santri'";
            $resultOne = mysqli_query($this->connection, $sql);

            if (mysqli_num_rows($resultOne) == 1) 
            {
                    $this->hasil = true;
                    $data= mysqli_fetch_assoc($resultOne);
                    $this->id_santri = $data['id_santri'];
                    $this->s_fullName = $data['s_fullName'];
                    $this->s_address = $data['s_address'];
                    $this->s_bodPlace = $data['s_bodPlace'];
                    $this->s_BOD = $data['s_BOD'];
                    $this->s_photo = $data['s_photo'];
            }
        }
    
        public function SelectWali(){
            $sql2 = "SELECT * FROM wali WHERE id_santri = '$this->id_santri'";
                    $resultTwo = mysqli_query($this->connection, $sql2);
        
                    if (mysqli_num_rows($resultTwo) == 1) 
                    {
                            $this->hasil = true;
                            $data= mysqli_fetch_assoc($resultTwo);                    
                            $this->id_wali = $data['id_wali'];
                            $this->w_fullName = $data['w_fullName'];
                            $this->w_email = $data['w_email'];
                            $this->w_phone = $data['w_phone'];
                            $this->w_familyRegist = $data['w_familyRegist'];
                            $this->w_job = $data['w_job'];
                            $this->w_salary = $data['w_salary'];
                    }
        }
        public function SelectPendidikan(){
            $sql3 = "SELECT * FROM pendidikan WHERE id_santri = '$this->id_santri'";
                            $resultThree = mysqli_query($this->connection, $sql3);
        
                            if (mysqli_num_rows($resultThree) == 1) 
                            {
                                $this->hasil = true;
                                $data= mysqli_fetch_assoc($resultThree);
                                $this->id_pendidikan = $data['id_pendidikan'];
                                $this->p_lastSchool = $data['p_lastSchool'];
                                $this->p_certificate = $data['p_certificate'];
                                $this->p_transcript = $data['p_transcript'];
                            }
        }

    }

?>