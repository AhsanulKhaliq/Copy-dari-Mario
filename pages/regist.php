<h2 color="163020" class="bs-light-rgb">Biodata Santri</h2>

<form class="row g-3">
  <div class="col-sm">
    <label for="inputNama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" placeholder="Nama sesuai dengan Ijazah terakhir" id="inputNama">
  </div>
  <div class="col-sm">
  <select class="form-select" aria-label="Default select example">
  <option selected>Pilih Pendidikan Terakhir</option>
  <option value="1">Sekolah Dasar/Madrasah Ibtidaiyah</option>
  <option value="2">Sekolah Menengah Pertama/Madrasah Tsanawiyah</option>
  <option value="3">Sekolah Menengah Atas/Madrasah Aliyah</option>
</select>  
</div>
<div class="container mt-5">
    <form>
      <div class="form-group">
        <label for="InputTanggal">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal">
      </div>
<div class="col-12">
    <label for="inputAlamat" class="form-label">Alamat Lengkap</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Sesuai Kartu Keluarga">
  </div>
  <div class="mb-3">
  <label for="pilihFile" class="form-label">Masukkan Pas Foto</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="inputEmail" class="form-label">Email</label>
  <input type="email" class="form-control" id="inputEmail" placeholder="@example.com (Boleh memakai Email Wali)">
</div>
  <div class="col-12">
  <div class="form-group">
        <label for="inptuKontak">Nomor Kontak:</label>
        <input type="tel" class="form-control" id="nomor" name="nomorKontak" placeholder="Masukkan nomor kontak Anda/Wali Anda" pattern="[0-9]{10,12}" minlength="10" maxlength="12">
        <small id="nomorKontak" class="form-text text-muted">Harus terdiri dari 10-12 digit angka.</small>
      </div>

      <div class="form-group">
        <label for="inputNik">Nomor Induk Kependudukan:</label>
        <input type="tel" class="form-control" id="nomor" name="nomorNik" placeholder="Masukkan nomor kontak Anda/Wali Anda" pattern="[0-9]" minlength="15" maxlength="16">
        <small id="nomorKontak" class="form-text text-muted">Harus terdiri dari 16 digit angka.</small>
      </div>

      <div class="form-group">
        <label for="inputNik">Nomor Kartu Keluarga:</label>
        <input type="tel" class="form-control" id="nomor" name="nomorNik" placeholder="Masukkan nomor kontak Anda/Wali Anda" pattern="[0-9]" minlength="15" maxlength="16">
        <small id="nomorKontak" class="form-text text-muted">Harus terdiri dari 16 digit angka.</small>
      </div>

      <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>