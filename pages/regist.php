<h2>Biodata Santri</h2>

<form class="form-group">
<div class="row">
<div class="col-sm">
    <label for="inputNama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Nama sesuai dengan Ijazah terakhir" id="inputNama">
  </div>
  <div class="col-sm">
    <label for="selectSekolah" class="form-label">Pendidikan Terakhir</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Pilih Pendidikan Terakhir</option>
  <option value="1">Sekolah Dasar/Madrasah Ibtidaiyah</option>
  <option value="2">Sekolah Menengah Pertama/Madrasah Tsanawiyah</option>
  <option value="3">Sekolah Menengah Atas/Madrasah Aliyah</option>
</select>  
</div>
</div>
<div class="row">
<div class="col-sm">
    <label for="inputTempatLahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" placeholder="Nama tempat sesuai dengan Ijazah terakhir" id="inputNama">
  </div>
      <div class="col-sm">
        <label for="InputTanggal">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal">
      </div>
</div>
<div class="row">
<div class="col-md-6">
    <label for="inputAlamat" class="form-label">Alamat Lengkap</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Sesuai Kartu Keluarga" style="height: 100px">
  </div>
  <div class="col-md-6">
  <label for="pilihFile" class="form-label">Masukkan Pas Foto</label>
  <input class="form-control" type="file" id="formFile" style="height: 100px">
</div>
</div>
<div class="row">
<div class="col-sm">
  <label for="inputEmail" class="form-label">Email</label>
  <input type="email" class="form-control" id="inputEmail" placeholder="@example.com (Boleh memakai Email Wali)">
</div>
  <div class="col-sm">
        <label for="inptuKontak">Nomor Kontak:</label>
        <input type="tel" class="form-control" id="nomor" name="nomorKontak" placeholder="Masukkan nomor kontak Anda" pattern="[0-9]{10,12}" minlength="10" maxlength="12">
        <small id="nomorKontak" class="form-text text-muted">Harus terdiri dari 10-12 digit angka.</small>
      </div>
      </div>

      <div class="row">
      <div class="col-sm">
        <label for="inputNik">Nomor Induk Kependudukan:</label>
        <input type="tel" class="form-control" id="nomor" name="nomorNik" placeholder="Masukkan Induk Kependudukan Anda" pattern="[0-9]" minlength="15" maxlength="16">
        <small id="nomorKontak" class="form-text text-muted">Harus terdiri dari 16 digit angka.</small>
      </div>

      <div class="col-sm">
        <label for="inputNik">Nomor Kartu Keluarga:</label>
        <input type="tel" class="form-control" id="nomor" name="nomorNik" placeholder="Masukkan nomor Kartu Keluarga Anda" pattern="[0-9]" minlength="15" maxlength="16">
        <small id="nomorKontak" class="form-text text-muted">Harus terdiri dari 16 digit angka.</small>
      </div>
      </div>
    <div class="row">
      <div class="col-sm">
    <label for="inputNamaWali" class="form-label">Nama Lengkap Wali</label>
    <input type="text" class="form-control" placeholder="Nama sesuai dengan Kartu Tanda Penduduk" id="inputNamaWali">
  </div>

  <div class="col-sm">
        <label for="inputKontakWali">Nomor Kontak Wali</label>
        <input type="tel" class="form-control" id="nomor" name="nomorKontakWali" placeholder="Masukkan nomor kontak Wali Anda" pattern="[0-9]{10,12}" minlength="10" maxlength="12">
        <small id="nomorKontakWali" class="form-text text-muted">Harus terdiri dari 10-12 digit angka.</small>
      </div>
      </div>

      <div class="row">
      <div class="col-sm">
        <label for="pekerjaan">Pekerjaan Wali</label>
        <select class="form-control" id="pekerjaan" onchange="showInput(this)">
          <option value="pilihKerja">Pilih Pekerjaan</option>
          <option value="1">Ibu Rumah Tangga</option>
          <option value="2">Wiraswasta</option>
          <option value="3">Petani</option>
          <option value="4">Dosen</option>
          <option value="5">PNS</option>
          <option value="6">Dokter</option>
          <option value="7">Polisi</option>
          <option value="8">Tentara</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div class="form-group" id="lainnyaInput" style="display: none;">
        <label for="pekerjaan_lainnya">Lainnya</label>
        <input type="text" class="form-control" id="pekerjaan_lainnya" placeholder="Masukkan Pekerjaan Wali">
      </div>

      <div class="col-sm">
        <label for="penghasilan">Penghasilan Wali</label>
        <select class="form-control" id="gajiWali">
          <option value="pilihGaji">Pilih Penghasilan Wali</option>
          <option value="1">'<'Rp. 500.000</option>
          <option value="1">Rp. 500.000 - Rp. 1.000.000</option>
          <option value="1">Rp. 1.000.000 - Rp. 2.000.000</option>
          <option value="1">Rp. 2.000.000 - Rp. 3.000.000</option>
          <option value="1">'>'Rp. 3.000.000</option>
          </select>
      </div>
      </div>
      
      <div class="col-sm">
      <button type="submit" class="btn btn-primary">Kirim Data</button>
      <button type="cancel" class="btn btn-primary">Kembali</button>
      </div>


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

