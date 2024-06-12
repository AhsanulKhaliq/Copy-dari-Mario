<?php

class User extends Connection{

    private $userid = 0;
    private $email = '';
    private $password = '';
    private $role = '';
    private $emp;

    private $hasil = false;
    private $message = '';
    
    public function __get($atribute){
        if(property_exists($this,$atribute)){
            return $this->$atribute;
        }
    }

    public function __set($atribut, $value){
        if(property_exists($this,$atribut))
                    {$this->$atribut= $value;}
    }



    public function AddAdmin(){
        $sql = "INSERT INTO admin (a_username, a_password, role)
                values ('$this->email', '$this->password', '$this->role')";
        $this->hasil = mysqli_query($this->connection, $sql);
        
        if($this->hasil)
            $this->message ='Data berhasil ditambahkan!';
        else
            $this->message ='Data gagal ditambahkan!';
        }
        
        public function ValidateEmail($inputemail){
                $sql = "SELECT * FROM admin
                        WHERE a_username = '$inputemail'";
                $result = mysqli_query($this->connection, $sql);
                if (mysqli_num_rows ($result) == 1){
                    $this->hasil = true;
                    $data = mysqli_fetch_assoc($result);
                    $this->password = $data['a_password'];
                    $this->email=$data['a_username'];
                    $this->role=$data['role'];
                    }
                    else{
                        $this->hasil = false;
                    }
        }
        }

        ?>