<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header style="background-color: #B6C4B6;">
    <nav class="navbar container">
            <a class="navbar-brand" href="index.php?p=home">Projek Akhir</a>
            <div class="d-flex align-middle">
                <a class="nav-link m-2" href="index.php?p=fasilitas">Fasilitas</a>
                <a class="nav-link m-2" href="index.php?p=berita">Berita</a>
                <a class="nav-btn btn m-1" style="background-color: #163020; color:#B6C4B6"; href="index.php?p=regist">Pendaftaran</a>
                <a class="nav-btn btn m-1" style="background-color: #163020; color:#B6C4B6"; href="index.php?p=admin">Login</a>
            </div>
    </nav>        
    </header>
    <main class="container">
    <?php
    $pages_dir = 'pages';
    if(!empty($_GET['p'])){
    
    $pages = scandir($pages_dir, 0);
    unset($pages[0], $pages[1]);
    
    $p = $_GET['p'];
    if(in_array($p.'.php', $pages)){
    
    include($pages_dir.'/'.$p.'.php');
    
    } else {
    
    echo 'Halaman tidak ditemukan! :(';
    
    }
    } else {
        include "pages/home.php";
    }
    ?>
    </main>
    <footer class="fixed-bottom" style="background-color: #B6C4B6;">
    <div class="container">
            <p>Menara 165 Lantai 18, Jl. TB. Simatupang, 12560, Jakarta Selatan, DKI Jakarta</p>
            <p>+62-1234-5678</p>
            <p>projek@gmail.com</p>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>