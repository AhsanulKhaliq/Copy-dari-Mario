<h4 class="title">
    <span class="text">
        <strong>Daftar Santri</strong>
    </span>
</h4>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>NIS</th>
        <th>Nama Santri</th>
        <th>Alamat</th>
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
            echo '</tr>';
            $no++;
        }
    }
    ?>
</table>