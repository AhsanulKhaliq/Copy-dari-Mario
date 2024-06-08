<?php
    require_once('./class/class.Admin.php');
    
    if(isset($_POST['btnLogin'])){
    
        $email = $_POST['a_username'];
        $password = $_POST['a_password'];
        $objUser = new User();
        $objUser->hasil = true;
        $objUser->ValidateEmail($email);

        if($objUser->hasil){
            if($password === $objUser->password){
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION["userid"]= $objUser->userid;
                $_SESSION["a_username"]= $objUser->email;
                $_SESSION["a_password"]= $objUser->password;
                
                echo "<script>
                Swal.fire({
                    title: 'Login Sukses',
                    text: 'Anda berhasil login!',
                    icon: 'success'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = 'pages/adminRegist.php';
                    }
                });
                </script>";
            } else {
                echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Password tidak sesuai',
                    icon: 'error'
                });
                </script>";
            }
        } else {
            echo "<script>
            Swal.fire({
                title: 'Error!',
                text: 'Email tidak terdaftar',
                icon: 'error'
            });
            </script>";
        }
    
    }
?>

<h1>Ahlan Wa Sahlan</h1>
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="a_username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="a_password" required>
  </div>
  <button type="submit" class="btn btn-primary " name="btnLogin">Submit</button>
  <a class="btn btn-danger" href="index.php">Cancel</a>
</form>