<?php
    require_once('./class/class.Admin.php');
    
    if(isset($_POST['btnLogin'])){
    
        $email = $_POST['a_username'];
        $password = $_POST['a_password'];
        $objUser = new User();
        $objUser->hasil = true;
        $objUser->ValidateEmail($email);

        if($objUser->hasil){
        
            $ismatch = password_verify($password, $objUser->password);
            if($ismatch){
                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION["userid"]= $objUser->userid;
                $_SESSION["role"]= $objUser->role;
                $_SESSION["a_username"]= $objUser->name;
                $_SESSION["a_password"]= $objUser->email;
                
                echo "<script>alert('Login sukses');</script>";
                
                if($objUser->role == 'admin')
                    echo '<script>window.location = "adminRegist.php";</script>';
                else if($objUser->role == 'index')
                    echo '<script>window.location = "index.php";</script>';
                
        }

            else{
                    echo "<script>alert('Password tidak sesuai');</script>";
                }
            }
            else{
                echo "<script>alert('Email tidak terdaftar');</script>";
            }
        }

?>
<h1>Ahlan Wa Sahlan</h1>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="a_username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="a_password">
  </div>
  <button type="submit" class="btn btn-primary ">Submit</button>
  <button type="cancel" class="btn btn-primary">Cancel</button>
</form>