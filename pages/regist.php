<h1>Regist</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS tambahan sesuai kebutuhan */
        body {
            background-color: #f8f9fa;
        }
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-family: Arial, sans-serif;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px #ccc;
        }
        .login-form h2 {
            margin: 0 0 15px;
            color: #333;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <form action="/login" method="post">
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>        
        </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
    </div>
</body>
</html>
