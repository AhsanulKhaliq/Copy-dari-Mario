<?php
session_start();
session_destroy();
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Logout</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    <script>
        Swal.fire({
            title: 'Terima kasih telah bekerja dengan penuh keikhlasan!',
            text: 'Anda berhasil keluar.',
            icon: 'Sukses'
        }).then((result) => {
            window.location.href ='../index.php';
        });
    </script>
</body>
</html>";
