<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya Pendaftaran Santri Baru</title>
</head>
<body>
    <h1>Biaya Pendaftaran Santri Baru</h1>
    <br>
    <h2>A. Biaya Administrasi Pendaftaran</h2>
    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>JENIS BIAYA</th>
            <th>SMP</th>
            <th>MA</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Administrasi Pendaftaran dan Tes Masuk</td>
            <td>Rp 125.000</td>
            <td>Rp 125.000</td>
        </tr>
    </table>
    <div class="p-3 bg-primary-subtle border rounded-3" style="background-color: #B6C4B6;">
        <p>Catatan:</p>
        <p>1. Pendaftar Online: Setelah membuat akun pendaftaran, calon santri harus membayar biaya Administrasi Pendaftaran sebelum dapat bisa mengisi formulir.</p>
        <p>2. Pendaftar offline membayar biaya Administrasi Pendaftaran di pondok sebelum masuk ke ruang pengisian formulir.</p>
        <p>3. Pembayaran tidak dapat dicicil.</p>
        <p>4. Siswa yang mengundurkan diri setelah pendaftaran, tidak dapat mengambil uang pendaftaran yang telah dibayarkan.</p>
    </div>
    <br>
    <h2>B. Biaya Pendaftaran Ulang</h2>
    <table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>JENIS BIAYA</th>
            <th>SMP</th>
            <th>MA</th>
        </tr>
        <?php
            $biaya = [
                ["Uang Pangkal dan Gedung Pondok", 450000, 450000],
                ["Uang Pangkal dan Gedung Sekolah", 450000, 450000],
                ["Uang Makan Bulan Juli", 430000, 430000],
                ["Iuran Pondok Bulan Juli", 140000, 140000],
                ["SPP Sekolah Bulan Juli", 80000, 100000],
                ["Administrasi Awal Tahun", 200000, 280000],
                ["Kegiatan Awal Tahun Pelajaran", 70000, 70000],
                ["Seragam Pondok (atas-bawah)", 195000, 195000],
                ["Seragam Pramuka (atas-bawah)", 200000, 215000],
                ["Seragam Baju Batik SMP", 125000, 130000],
                ["Atribut Sekolah", 550000, 60000],
                ["Kegiatan Esktra Semester Pertama", 50000, 50000],
                ["LKS/Buku Semester Pertama", 270000, 240000],
                ["Buku Pelajaran Pondok", 100000, 225000]

            ];

            $total_smp = 0;
            $total_ma = 0;

            foreach ($biaya as $index => $item) {
                echo "<tr>";
                echo "<td>".($index + 1)."</td>";
                echo "<td>".$item[0]."</td>";
                echo "<td>Rp ".number_format($item[1], 0, ',', '.')."</td>";
                echo "<td>Rp ".number_format($item[2], 0, ',', '.')."</td>";
                echo "</tr>";
                $total_smp += $item[1];
                $total_ma += $item[2];
            }
        ?>
        <tr>
            <th colspan="2">Total</th>
            <th>Rp <?php echo number_format($total_smp, 0, ',', '.'); ?></th>
            <th>Rp <?php echo number_format($total_ma, 0, ',', '.'); ?></th>
        </tr>
    </table>
</body>
</html>