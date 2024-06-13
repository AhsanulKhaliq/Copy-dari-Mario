<?php

require_once dirname(__FILE__).'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML(<<<HTML
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keputusan Kepala Sekolah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h6>PEMERINTAH KABUPATEN BONE</h6>
            <h6>DINAS PENDIDIKAN</h6>
            <h6>PONDOK PESANTREN DARUL TAQWA</h6>
            <p>Jl. Sukawati, No.09, No.7, Kec. Tanete Riattang Barat, Kab. Bone, Prov. Sulawesi Selatan</p>
            <p>E-mail: <a href="mailto:Darul_Taqwa@boarding_school.ac.id">Darul_Taqwa@boarding_school.ac.id</a></p>
        </div>
        <div class="text-center mb-4">
            <h5>SURAT KEPUTUSAN PIMPINAN</h5>
            <h5>PONDOK PESANTREN DARUL TAQWA NOMOR : 423.1/04-PONPESDARULTAQWA/2024</h5>
        </div>
        <p>Berdasarkan :</p>
        <p>1. Surat Keputusan Pimpinan Pondok Pesantren Darul Taqwa : 210.02/1234-Disdik tentang Pedoman Penerimaan Santri/wati Baru (PPSB) MT's dan MA;</p>
        <p>2. Hasil musyawarah Dewan Asatidzah Wal Ustadzah Kulliyyatul Muallimin Wal Muallimat Al-Islamiyah dan Panitia Penerimaan Santri/wati Baru Pondok Pesantren Darul Taqwa Kabupaten Bone Tahun Ajaran 2024/2025.</p>
        <p class="text-center font-weight-bold">MEMUTUSKAN</p>
        <p>Nama : <strong>$s_fullName</strong></p>
        <p>No. Urut Pendaftaran : <strong>$id_santri</strong></p>
        <p>Sekolah Asal : <strong>$p_lastSchool</strong></p>
        <p>Dinyatakan :</p>
        <p class="text-center font-weight-bold">DITERIMA</p>
        <p>di Kelas : <strong>VII/X</strong></p>
        <p>Sebagai Santri/wati Baru di lingkungan Pondok Pesantren Darul Taqwa Kabupaten Bone Tahun Ajaran 2024/2025</p>
        <p>Keterangan:</p>
        <ol>
            <li>Daftar ulang dilaksanakan pada tanggal 9 s.d. 11 Juli 2024, mulai pukul 08.00 s.d 12.00 WIB;</li>
            <li>Apabila sampai dengan tanggal 11 Juli 2024 pukul 12.00 tidak melaksanakan daftar ulang, maka Santri Baru dianggap mengundurkan diri.</li>
            <li>Pada waktu daftar ulang agar melengkapi persyaratan yang belum lengkap:
                <ul>
                    <li>Photo copy Ijazah sebanyak 2 lembar</li>
                    <li>Photo copy Kartu NISN (bagi yang sudah mempunyai) 2 lembar</li>
                    <li>Photo copy Kartu PKH/KPS (bagi yang mempunyai) 2 lembar</li>
                    <li>Biodata Santri yang diisi dengan lengkap dan akurat (surat pernyataan dibubuhi materai Rp 6.000)</li>
                </ul>
            </li>
        </ol>
        <div class="text-right">
            <p>Ditetapkan di: Macege</p>
            <p>Pada Tanggal: 10 Juni 2024</p>
            <p>Pimpinan Pondok,</p>
            <br><br><br>
            <p><strong>KH. Dr. Mariole Sulolipo, M.Ag</strong></p>
            <p>NIP 196810151990031005</p>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
HTML
);
$html2pdf->output();

?>