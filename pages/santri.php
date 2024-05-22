<?php
require_once('./class/class.Santri.php');
$santri = new Santri();
if(isset($_POST['btnSubmit'])){
    $santri->id_santri = $_POST[NULL];
    $santri->s_fullName = $_POST['inputNama'];
    $santri->s_BOD = $_POST['tanggal'];
    $santri->s_address = $_POST['inputAlamat'];

    if(isset($_GET['id_santri'])){
        $santri->id_santri = $_GET['id_santri'];
        $santri->UpdateSantri();
    } else {
     $santri->tambahSantri();
    }
    echo "<script> alert('$santri->message'); </script>";
    if($santri->hasil){
        echo '<script> window.location = "index.php?p=listSantri";</script>';
    }
} else if (isset($_GET['ssn'])){
        $santri->ssn = $_GET['ssn'];
        $santri->SelectOneSantri();
    }
?>
<h2>Biodata Calon Santri</h2>
<form class="form-group" action="" method="post">
  <div class="row">
    <div class="col-sm">
      <label for="inputNama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" placeholder="Nama sesuai dengan Ijazah terakhir" name="inputNama">
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
      <label for="inputTempatLahir" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control" name="tLahir">
    </div>

    <div class="col-sm">
      <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" id="inputTanggalLahir" name="tanggal">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <label for="inputAlamat" class="form-label">Alamat Lengkap</label>
      <input type="text" class="form-control" name="inputAlamat" placeholder="Sesuai Kartu Keluarga" style="height: 100px">
    </div>

    <div class="col-md-6">
      <label for="pasFoto" class="form-label">Masukkan Pas Foto</label>
      <input class="form-control" type="file" id="pasFoto" style="height: 100px" name="s_photo">
    </div>
  </div>

  <hr>
  <h3>Wali Calon Santri</h3>

  <div class="row">
    <div class="col-sm">
      <label for="inputNamaWali" class="form-label">Nama Lengkap Wali</label>
      <input type="text" class="form-control" placeholder="Nama sesuai dengan Kartu Tanda Penduduk" name="w_fullName">
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" name="w_email" placeholder="Masukkan email wali">
    </div>

    <div class="col-sm">
      <label for="inputKontak" class="form-label">Nomor Kontak</label>
      <input type="tel" class="form-control" id="inputKontak" name="w_phone" placeholder="Masukkan nomor kontak wali" pattern="[0-9]{10,12}" minlength="10" maxlength="12">
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
      <label for="pekerjaan">Pekerjaan Wali</label>
      <select class="form-control" name="pekerjaan" onchange="showInput(this)">
        <option value="pilihKerja">Pilih Pekerjaan</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Petani">Petani</option>
        <option value="Dosen">Dosen</option>
        <option value="PNS">PNS</option>
        <option value="Dokter">Dokter</option>
        <option value="Polisi">Polisi</option>
        <option value="Tentara">Tentara</option>
        <option value="Other">Lainnya</option>
      </select>
    </div>
    <div class="form-group" id="lainnyaInput" style="display: none;">
      <label for="pekerjaan_lainnya">Lainnya</label>
      <input type="text" class="form-control" name="pekerjaan_lainnya" placeholder="Masukkan Pekerjaan Wali">
    </div>

    <div class="col-sm">
      <label for="penghasilan">Penghasilan Wali</label>
      <select class="form-control" name="penghasilan">
        <option value="pilihGaji">Pilih Penghasilan Wali</option>
        <option value="1">'<'Rp. 500.000</option>
        <option value="1">Rp. 500.000 - Rp. 1.000.000</option>
        <option value="1">Rp. 1.000.000 - Rp. 2.000.000</option>
        <option value="1">Rp. 2.000.000 - Rp. 3.000.000</option>
        <option value="1">'>'Rp. 3.000.000</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm">
      <label for="fileKK" class="form-label">Upload Kartu Keluarga</label>
      <input class="form-control" type="file" name="w_familyRegist" style="height: 100px">
    </div>
  </div>
  
  <hr>
  <h3>Pendidikan Calon Santri</h3>
  <div class="row">
    <div class="col-sm">
      <label for="selectSekolah" class="form-label">Pendidikan Terakhir</label>
      <select class="form-select" aria-label="Default select example" name="pendidikanSantri">
        <option selected>Pilih Pendidikan Terakhir</option>
        <option value="SD/MI">Sekolah Dasar/Madrasah Ibtidaiyah</option>
        <option value="SMP/MTs">Sekolah Menengah Pertama/Madrasah Tsanawiyah</option>
        <option value="SMA/MA">Sekolah Menengah Atas/Madrasah Aliyah</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
      <label for="p_certificate" class="form-label">Upload Ijazah Terakhir</label>
      <input class="form-control" type="file" name="p_certificate" style="height: 100px">
    </div>
    <div class="col-sm">
      <label for="p_transcript" class="form-label">Upload Transkrip Nilai</label>
      <input class="form-control" type="file" name="p_transcript" style="height: 100px">
    </div>
  </div>

  <div class="row my-2">
    <div class="column">
      <input type="submit" class="btn btn-success" value="Daftar" name="btnSubmit">
      <a href="index.php" class="btn btn-warning">Kembali</a>
    </div>
  </div>
</form>

<script>
  function showInput(select) {
    var selectedOption = select.value;
    var inputDiv = document.getElementById('lainnyaInput');

    if (selectedOption === 'lainnya') {
      inputDiv.style.display = 'block';
    } else {
      inputDiv.style.display = 'none';
    }
  }
</script>