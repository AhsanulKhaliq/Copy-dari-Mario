<?php
require_once('./class/class.Santri.php');
if(isset($_GET['id_santri'])){
    $objSantri = new Santri();
    $objSantri->id_santri = $_GET['id_santri'];
    $objSantri->DeleteSantri();
    echo "<script> alert('$objSantri->message'); </script>";
    echo "<script>window.location = 'index.php?p=listSantri'</script>";
} else {
    echo '<script>window.history.back()</script>';
}
?>