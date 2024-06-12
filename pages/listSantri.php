<?php
require_once('authorization_admin.php');    
?>
<h4 class="title">
    <span class="text">
        <strong>Daftar Calon Santri</strong>
    </span>
</h4>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>NIS</th>
        <th>Nama Santri</th>
        <th>Alamat</th>
        <th>Edit</th>
    </tr>

    <?php
    require_once('./class/class.Santri.php');
    $listSantri = new Santri();
    $arrayResult = $listSantri->SelectAllSantri();
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    } else {
        $no = 1;
        foreach ($arrayResult as $dataSantri) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataSantri->id_santri.'</td>';
            echo '<td>'.$dataSantri->s_fullName.'</td>';
            echo '<td>'.$dataSantri->s_address.'</td>';
            echo '<td><a class="btn btn-warning" href="index.php?p=santri&id_santri='.$dataSantri->id_santri.'"> Edit </a>|<a class="btn btn-danger" href="index.php?p=delSantri&id_santri='.$dataSantri->id_santri.'"> Hapus </a></td>';
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>
<a class="btn btn-primary" href="pages/adminRegist.php">Kembali</a>